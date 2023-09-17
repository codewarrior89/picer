<?php

define('APP_NOTICE_DOMAIN', config('shop.app_notice_domain'));
define('DEFAULT_LANGUAGE', config('shop.default_language'));
define('TRANSLATION_ENABLED', config('shop.translation_enabled'));
define('DEFAULT_CURRENCY', config('shop.default_currency'));
define('ACTIVE_PAYMENT_GATEWAY', config('shop.active_payment_gateway'));
define('NOT_FOUND', APP_NOTICE_DOMAIN . 'ERROR.NOT_FOUND');
define('COUPON_NOT_FOUND', APP_NOTICE_DOMAIN . 'ERROR.COUPON_NOT_FOUND');
define('INVALID_COUPON_CODE', APP_NOTICE_DOMAIN . 'ERROR.INVALID_COUPON_CODE');
define('COUPON_CODE_IS_NOT_APPLICABLE', APP_NOTICE_DOMAIN . 'ERROR.COUPON_CODE_IS_NOT_APPLICABLE');
define('ALREADY_FREE_SHIPPING_ACTIVATED', APP_NOTICE_DOMAIN . 'ERROR.ALREADY_FREE_SHIPPING_ACTIVATED');
define('CART_ITEMS_NOT_FOUND', APP_NOTICE_DOMAIN . 'ERROR.CART_ITEMS_NOT_FOUND');
define('NOT_A_RENTAL_PRODUCT', APP_NOTICE_DOMAIN . 'ERROR.NOT_A_RENTAL_PRODUCT');
define('NOT_AUTHORIZED', APP_NOTICE_DOMAIN . 'ERROR.NOT_AUTHORIZED');
define('NOT_A_FREE_PRODUCT', APP_NOTICE_DOMAIN . 'ERROR.NOT_A_FREE_PRODUCT');
define('SOMETHING_WENT_WRONG', APP_NOTICE_DOMAIN . 'ERROR.SOMETHING_WENT_WRONG');
define('PAYMENT_FAILED', APP_NOTICE_DOMAIN . 'ERROR.PAYMENT_FAILED');
define('SHOP_NOT_APPROVED', APP_NOTICE_DOMAIN . 'ERROR.SHOP_NOT_APPROVED');
define('INSUFFICIENT_BALANCE', APP_NOTICE_DOMAIN . 'ERROR.INSUFFICIENT_BALANCE');
define('INVALID_CREDENTIALS', APP_NOTICE_DOMAIN . 'ERROR.INVALID_CREDENTIALS');
define('EMAIL_SENT_SUCCESSFUL', APP_NOTICE_DOMAIN . 'MESSAGE.EMAIL_SENT_SUCCESSFUL');
define('PASSWORD_RESET_SUCCESSFUL', APP_NOTICE_DOMAIN . 'MESSAGE.PASSWORD_RESET_SUCCESSFUL');
define('INVALID_TOKEN', APP_NOTICE_DOMAIN . 'MESSAGE.INVALID_TOKEN');
define('TOKEN_IS_VALID', APP_NOTICE_DOMAIN . 'MESSAGE.TOKEN_IS_VALID');
define('CHECK_INBOX_FOR_PASSWORD_RESET_EMAIL', APP_NOTICE_DOMAIN . 'MESSAGE.CHECK_INBOX_FOR_PASSWORD_RESET_EMAIL');
define('ACTION_NOT_VALID', APP_NOTICE_DOMAIN . 'ERROR.ACTION_NOT_VALID');
define('PLEASE_LOGIN_USING_FACEBOOK_OR_GOOGLE', APP_NOTICE_DOMAIN . 'ERROR.PLEASE_LOGIN_USING_FACEBOOK_OR_GOOGLE');
define('WITHDRAW_MUST_BE_ATTACHED_TO_SHOP', APP_NOTICE_DOMAIN . 'ERROR.WITHDRAW_MUST_BE_ATTACHED_TO_SHOP');
define('OLD_PASSWORD_INCORRECT', APP_NOTICE_DOMAIN . 'MESSAGE.OLD_PASSWORD_INCORRECT');
define('OTP_SEND_FAIL', APP_NOTICE_DOMAIN . 'ERROR.OTP_SEND_FAIL');
define('OTP_SEND_SUCCESSFUL', APP_NOTICE_DOMAIN . 'MESSAGE.OTP_SEND_SUCCESSFUL');
define('REQUIRED_INFO_MISSING', APP_NOTICE_DOMAIN . 'MESSAGE.REQUIRED_INFO_MISSING');
define('CONTACT_UPDATE_SUCCESSFUL', APP_NOTICE_DOMAIN . 'MESSAGE.CONTACT_UPDATE_SUCCESSFUL');
define('INVALID_GATEWAY', APP_NOTICE_DOMAIN . 'ERROR.INVALID_GATEWAY');
define('OTP_VERIFICATION_FAILED', APP_NOTICE_DOMAIN . 'ERROR.OTP_VERIFICATION_FAILED');
define('CONTACT_UPDATE_FAILED', APP_NOTICE_DOMAIN . 'ERROR.CONTACT_UPDATE_FAILED');
define('ALREADY_REFUNDED', APP_NOTICE_DOMAIN . 'ERROR.ALREADY_REFUNDED');
define('ORDER_ALREADY_HAS_REFUND_REQUEST', APP_NOTICE_DOMAIN . 'ERROR.ORDER_ALREADY_HAS_REFUND_REQUEST');
define('REFUND_ONLY_ALLOWED_FOR_MAIN_ORDER', APP_NOTICE_DOMAIN . 'ERROR.REFUND_ONLY_ALLOWED_FOR_MAIN_ORDER');
define('WRONG_REFUND', APP_NOTICE_DOMAIN . 'ERROR.WRONG_REFUND');
define('CSV_NOT_FOUND', APP_NOTICE_DOMAIN . 'ERROR.CSV_NOT_FOUND');
define('ALREADY_GIVEN_REVIEW_FOR_THIS_PRODUCT', APP_NOTICE_DOMAIN . 'ERROR.ALREADY_GIVEN_REVIEW_FOR_THIS_PRODUCT');
define('USER_NOT_FOUND', APP_NOTICE_DOMAIN . 'ERROR.USER_NOT_FOUND');
define('TOKEN_NOT_FOUND', APP_NOTICE_DOMAIN . 'ERROR.TOKEN_NOT_FOUND');
define('NOT_AVAILABLE_FOR_BOOKING', APP_NOTICE_DOMAIN . 'ERROR.NOT_AVAILABLE_FOR_BOOKING');
define('YOU_HAVE_ALREADY_GIVEN_ABUSIVE_REPORT_FOR_THIS', APP_NOTICE_DOMAIN . 'ERROR.YOU_HAVE_ALREADY_GIVEN_ABUSIVE_REPORT_FOR_THIS');
define('MAXIMUM_QUESTION_LIMIT_EXCEEDED', APP_NOTICE_DOMAIN . 'ERROR.MAXIMUM_QUESTION_LIMIT_EXCEEDED');
define('INVALID_AMOUNT', APP_NOTICE_DOMAIN . 'ERROR.INVALID_AMOUNT');
define('INVALID_CARD', APP_NOTICE_DOMAIN . 'ERROR.INVALID_CARD');
define('TOO_MANY_REQUEST', APP_NOTICE_DOMAIN . 'ERROR.TOO_MANY_REQUEST');
define('INVALID_REQUEST', APP_NOTICE_DOMAIN . 'ERROR.INVALID_REQUEST');
define('AUTHENTICATION_FAILED', APP_NOTICE_DOMAIN . 'ERROR.AUTHENTICATION_FAILED');
define('API_CONNECTION_FAILED', APP_NOTICE_DOMAIN . 'ERROR.API_CONNECTION_FAILED');
define('SOMETHING_WENT_WRONG_WITH_PAYMENT', APP_NOTICE_DOMAIN . 'ERROR.SOMETHING_WENT_WRONG_WITH_PAYMENT');
define('INVALID_PAYMENT_ID', APP_NOTICE_DOMAIN . 'ERROR.INVALID_PAYMENT_ID');
define('INVALID_PAYMENT_INTENT_ID', APP_NOTICE_DOMAIN . 'ERROR.INVALID_PAYMENT_INTENT_ID');
define('EMAIL_NOT_VERIFIED', 'EMAIL_NOT_VERIFIED');
define('EMAIL_UPDATED_SUCCESSFULLY', APP_NOTICE_DOMAIN . 'SUCCESS.EMAIL_UPDATED_SUCCESSFULLY');
define('YOU_CAN_NOT_SEND_MESSAGE_TO_YOUR_OWN_SHOP', APP_NOTICE_DOMAIN . 'ERROR.YOU_CAN_NOT_SEND_MESSAGE_TO_YOUR_OWN_SHOP');
define('COULD_NOT_CREATE_THE_RESOURCE', APP_NOTICE_DOMAIN . 'ERROR.COULD_NOT_CREATE_THE_RESOURCE');
define('COULD_NOT_UPDATE_THE_RESOURCE', APP_NOTICE_DOMAIN . 'ERROR.COULD_NOT_UPDATE_THE_RESOURCE');
define('COULD_NOT_DELETE_THE_RESOURCE', APP_NOTICE_DOMAIN . 'ERROR.COULD_NOT_DELETE_THE_RESOURCE');
define('FULL_PATH_TO_THE_CONFIG_FILE', config('shop.bitpay.config_file.json'));
define('PLEASE_ENABLE_OPENAI_FROM_THE_SETTINGS', APP_NOTICE_DOMAIN . 'ERROR.PLEASE_ENABLE_OPENAI_FROM_THE_SETTINGS');

