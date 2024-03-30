<?php
namespace Marvel\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;
use Marvel\Database\Models\Settings;
use Spatie\Permission\Models\Permission;
use Marvel\Enums\Permission as UserPermission;
use Marvel\Enums\Role as UserRole;
use Spatie\Permission\Models\Role;
use Marvel\Database\Seeders\MarvelSeeder;
use PDO;
use PDOException;
use function Laravel\Prompts\{text, confirm, info, error, table};

class InstallCommand extends Command
{
    protected $signature = 'marvel:install';

    protected $description = 'Installing Marvel Dependencies';

    public function handle()
    {
        info('Installing Marvel Dependencies...');
        info('Do you want to migrate Tables?');
        info('If you have already run this command or migrated tables then be aware.');
        info('It will erase all of your data.');

        info('Please use arrow key for navigation.');
        if (confirm('Are you sure!')) {

            info('Migrating Tables Now....');

            $this->call('migrate:fresh');

            info('Tables Migration completed.');

            if (confirm('Do you want to seed dummy data?')) {
                $this->call('marvel:seed');
                $this->call('db:seed', [
                    '--class' => MarvelSeeder::class
                ]);
            }

            info('Importing required settings...');

            $this->call(
                'db:seed',
                [
                    '--class' => '\\Marvel\\Database\\Seeders\\SettingsSeeder',
                ]

            );

            info('Settings import is completed.');
        } else {
            info('Do you want to seed dummy Settings data?');
            info('If "yes", then please follow next steps carefully.');
            if (confirm('Are you sure!')) {
                $this->call('marvel:settings-seed');
            }
        }

        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        Permission::firstOrCreate(['name' => UserPermission::SUPER_ADMIN]);
        Permission::firstOrCreate(['name' => UserPermission::CUSTOMER]);
        Permission::firstOrCreate(['name' => UserPermission::STORE_OWNER]);
        Permission::firstOrCreate(['name' => UserPermission::STAFF]);

        $superAdminPermissions = [UserPermission::SUPER_ADMIN, UserPermission::STORE_OWNER, UserPermission::CUSTOMER];
        $storeOwnerPermissions = [UserPermission::STORE_OWNER, UserPermission::CUSTOMER];
        $staffPermissions = [UserPermission::STAFF, UserPermission::CUSTOMER];
        $customerPermissions = [UserPermission::CUSTOMER];

        Role::firstOrCreate(['name' => UserRole::SUPER_ADMIN])->syncPermissions($superAdminPermissions);
        Role::firstOrCreate(['name' => UserRole::STORE_OWNER])->syncPermissions($storeOwnerPermissions);
        Role::firstOrCreate(['name' => UserRole::STAFF])->syncPermissions($staffPermissions);
        Role::firstOrCreate(['name' => UserRole::CUSTOMER])->syncPermissions($customerPermissions);

        $this->call('marvel:create-admin'); // creating Admin

        $this->call('marvel:copy-files');

        $this->modifySettingsData();
        
        info('You need to configure your mail server for proper application performance.');
        info('Do you want to configure mail server.');
        $confirmed = confirm(
            label: "Are you sure!",
            default: true,
            yes: 'Yes, I accept',
            no: 'No, I decline',
        );
        if ($confirmed) {
            $this->call('marvel:mail-setup');
        } else {
            info('You can configuration by below command or manual process.');
            table(['Command', 'Details'], [['marvel:mail-setup', 'Mail setup (mailtrap, mailgun, gmail)']]);
        }
        
        info('Everything is successful. Now clearing all cached...');
        $this->call('optimize:clear');
        info('Thank You.');
    }

    private function modifySettingsData(): void
    {

        $language = isset(request()['language']) ? request()['language'] : DEFAULT_LANGUAGE;
        Cache::flush();
        $settings = Settings::getData($language);
        $settings->update([
            'options' => [
                ...$settings->options,
                'app_settings' => [
                    'last_checking_time' => null,
                    'trust'       => null,
                ]
            ]
        ]);
    }
}
C:\Users\Jeet Singh\Desktop\NEXT-JS_YT_DLDR\SERVER\picer\pixer-api\packages\marvel\src\Console\InstallCommand.php


cp InstallCommand.php /var/www/pixer-laravel/pixer-api/packages/marvel/src/Console