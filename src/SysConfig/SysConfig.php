<?php

namespace SysConfig;

use SysStdLib\SysStdLib;

class SysConfig
{

    protected $config;

    public function __construct()
    {
        $this->config = SysStdLib::getConfig('SysConfig');
    }

    public function getShopName()
    {
        return $this->config["shopsys"]["shop_details"]["default"]["shop_details"]["name"];
    }

    public function getShopUrl()
    {
        return $this->config["shopsys"]["shop_details"]["default"]["shop_details"]["url"];
    }
    public function getShopTitle()
    {
        return $this->config["shopsys"]["shop_details"]["default"]["meta"]["title"];
    }
    public function getShopKeywords()
    {
        return $this->config["shopsys"]["shop_details"]["default"]["meta"]["keywords"];
    }
    public function getShopDescription()
    {
        return $this->config["shopsys"]["shop_details"]["default"]["meta"]["description"];
    }

    public function getShopSlogan()
    {
        return $this->config["shopsys"]["shop_details"]["default"]["meta"]["slogan"];
    }

    public function getFBAppID()
    {
        return $this->config["shopsys"]["shop_details"]["default"]["social_media"]["facebook"]["appid"];
    }

    public function getFBAdmins()
    {
        return $this->config["shopsys"]["shop_details"]["default"]["social_media"]["facebook"]["admins"];
    }


    public function getShopDebugMode()
    {
        return $this->config["shopsys"]["shop_details"]["default"]["settings"]["debug"];
    }

    public function getTimeLimitActions()
    {
        return $this->config["shopsys"]["shop_details"]["default"]["settings"]["time_limit_actions"];
    }

    public function getTimeLimitDefault()
    {
        return $this->config["shopsys"]["shop_details"]["default"]["settings"]["time_limit_default"];
    }

    public function getDefaultLanguage()
    {
        return $this->config["shopsys"]["shop_details"]["default"]["shop_front"]["language"];
    }

    public function getUseCookies()
    {
        return $this->config["shopsys"]["shop_details"]["default"]["settings"]["use_cookies"];
    }

    public function getUseSSL()
    {
        return $this->config["shopsys"]["shop_details"]["default"]["settings"]["use_ssl"];
    }

    public function getUseAutoLogin()
    {
        return $this->config["shopsys"]["shop_details"]["default"]["settings"]["use_autologin"];
    }

    public function getAutoLoginLifetimeInSeconds()
    {
        return $this->config["shopsys"]["shop_details"]["default"]["settings"]["autologin_lifetime_seconds"];
    }


    public function getMailNoReply()
    {
        return $this->config["shopsys"]["shop_details"]["default"]["email"]["no_reply"];
    }

    public function getMailGeneral()
    {
        return $this->config["shopsys"]["shop_details"]["default"]["email"]["general"];
    }

    public function getMailBulk()
    {
        return $this->config["shopsys"]["shop_details"]["default"]["email"]["bulk"];
    }

    public function getPasswordReqMinLength()
    {
        return $this->config["shopsys"]["shop_details"]["default"]["password"]["min_password_length"];
    }

    public function getPasswordReqNumber()
    {
        return $this->config["shopsys"]["shop_details"]["default"]["password"]["require_number"];
    }

    public function getPasswordReqSpecialChar()
    {
        return $this->config["shopsys"]["shop_details"]["default"]["password"]["require_special_char"];
    }

    public function getPasswordAllowUsernameInPassword()
    {
        return $this->config["shopsys"]["shop_details"]["default"]["password"]["allow_username_in_password"];
    }


    /* SHOP FRONT */

    public function getNewAccountsRequireAdminApproval()
    {
        return $this->config["shopsys"]["shop_details"]["default"]["shop_front"]["new_accounts_requires_admin_approval"];
    }

    public function getNewAccountsRequireEmailVerification()
    {
        return $this->config["shopsys"]["shop_details"]["default"]["shop_front"]["new_accounts_requires_email_verification"];
    }

    public function getUserLoginMaxLoginAttempts()
    {
        return $this->config["shopsys"]["shop_details"]["default"]["shop_front"]["max_login_attempts"];
    }

    public function getUserFailedLoginLockoutDurationInMinutes()
    {
        return $this->config["shopsys"]["shop_details"]["default"]["shop_front"]["lockout_duration_in_minutes"];
    }

    public function getUserAutoLoginDurationInSeconds()
    {
        return $this->config["shopsys"]["shop_details"]["default"]["shop_front"]["auto_login_duration_in_seconds"];
    }

    /* RECAPTCHA */

    public function getRecaptchaPublicKey()
    {
        return $this->config["shopsys"]["shop_details"]["default"]["recaptcha"]["public_key"];
    }


    public function getRecaptchaPrivateKey()
    {
        return $this->config["shopsys"]["shop_details"]["default"]["recaptcha"]["private_key"];
    }


    public function getRecaptchaUseOnLogin()
    {
        return $this->config["shopsys"]["shop_details"]["default"]["recaptcha"]["use_recaptcha_on_login"];
    }

    public function getRecaptchaUseWhenRegisteringNewAccounts()
    {
        return $this->config["shopsys"]["shop_details"]["default"]["recaptcha"]["use_recaptcha_when_registering_new_account"];
    }


    public function getRecaptchaUseOnXAmountOfFailedAttempts()
    {
        return $this->config["shopsys"]["shop_details"]["default"]["recaptcha"]["use_recaptcha_on_x_amount_of_failures"];
    }

}