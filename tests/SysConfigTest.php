<?php
/**
 * Unit Test For SysConfig
 *
 * @author Sven Anders Robbestad <robbestad@gmail.com>
 */


namespace SysConfig\tests;

use SysConfig\SysConfig;

require __DIR__ . '/../src/SysConfig/SysConfig.php';

class SysConfigTest extends \PHPUnit_Framework_TestCase
{

    protected $config;

    public function __construct()
    {
        $SysConfig = new SysConfig();
        $this->config = $SysConfig->getConfig();
    }

    public function testCanGetConfig()
    {
        $this->assertInternalType('array', $this->config["shopsys"]);
    }

    public function testCanGetShopName()
    {
        $SysConfig = new SysConfig();
        $this->assertInternalType('string', $SysConfig->getShopName());
    }

    public function testCanGetShopUrl()
    {
        $SysConfig = new SysConfig();
        $this->assertInternalType('string', $SysConfig->getShopUrl());
    }

    public function testCanGetDefaultLanguage()
    {
        $SysConfig = new SysConfig();
        $this->assertInternalType('string', $SysConfig->getDefaultLanguage());
    }

    public function testCanGetDebugSettings()
    {
        $SysConfig = new SysConfig();
        $this->assertInternalType('bool', $SysConfig->getShopDebugMode());
    }

    public function testGetSSLSettings()
    {
        $SysConfig = new SysConfig();
        $this->assertInternalType('bool', $SysConfig->getUseSSL());
    }

    public function testGetCookieSettings()
    {
        $SysConfig = new SysConfig();
        $this->assertInternalType('bool', $SysConfig->getUseCookies());
    }

    public function testGetAutologinSettings()
    {
        $SysConfig = new SysConfig();
        $this->assertInternalType('bool', $SysConfig->getUseAutoLogin());
    }

    public function testGetAutologinLifetimeInMS()
    {
        $SysConfig = new SysConfig();
        $this->assertInternalType('int', $SysConfig->getAutologinLifetimeInMS());
    }

    public function testCanGetTimeLimits()
    {
        $SysConfig = new SysConfig();
        $this->assertInternalType('int', $SysConfig->getTimeLimitActions());
        $this->assertInternalType('int', $SysConfig->getTimeLimitDefault());
    }

    /* EMAIL SETTINGS */


    public function testCanGetEmailNoreply()
    {
        $SysConfig = new SysConfig();
        $this->assertInternalType('string', $SysConfig->getMailNoReply());
    }

    public function testCanGetEmailGeneral()
    {
        $SysConfig = new SysConfig();
        $this->assertInternalType('string', $SysConfig->getMailGeneral());
    }


    public function testCanGetEmailBulk()
    {
        $SysConfig = new SysConfig();
        $this->assertInternalType('string', $SysConfig->getMailBulk());
    }


    /* PASSWORD SETTINGS */

    public function testCanGetPasswordReqMinLength()
    {
        $SysConfig = new SysConfig();
        $this->assertInternalType('int', $SysConfig->getPasswordReqMinLength());
    }

    public function testCanGetPasswordReqNumber()
    {
        $SysConfig = new SysConfig();
        $this->assertInternalType('bool', $SysConfig->getPasswordReqNumber());
    }

    public function testCanGetPasswordReqSpecialChar()
    {
        $SysConfig = new SysConfig();
        $this->assertInternalType('bool', $SysConfig->getPasswordReqSpecialChar());
    }

    public function testCanGetPasswordAllowUsernameInPassword()
    {
        $SysConfig = new SysConfig();
        $this->assertInternalType('bool', $SysConfig->getPasswordAllowUsernameInPassword());
    }


    /* SHOP FRONT */
    public function testCanGetNewAccountsRequireAdminApproval()
    {
        $SysConfig = new SysConfig();
        $this->assertInternalType('bool', $SysConfig->getNewAccountsRequireAdminApproval());
    }

    public function testCanGetNewAccountsRequireEmailVerification()
    {
        $SysConfig = new SysConfig();
        $this->assertInternalType('bool', $SysConfig->getNewAccountsRequireEmailVerification());
    }

    public function testCanGetUserLoginMaxLoginAttempts()
    {
        $SysConfig = new SysConfig();
        $this->assertInternalType('int', $SysConfig->getUserLoginMaxLoginAttempts());
    }

    public function testCanGetUserFailedLoginLockoutDurationInMinutes()
    {
        $SysConfig = new SysConfig();
        $this->assertInternalType('int', $SysConfig->getUserFailedLoginLockoutDurationInMinutes());
    }

    public function testCanGetUserAutoLoginDurationInSeconds()
    {
        $SysConfig = new SysConfig();
        $this->assertInternalType('int', $SysConfig->getUserAutoLoginDurationInSeconds());
    }

    /* RECAPTCHA */


    public function testCanGetRecaptchaPublicKey()
    {
        $SysConfig = new SysConfig();
        $this->assertInternalType('string', $SysConfig->getRecaptchaPublicKey());
    }


    public function testCanGetRecaptchaPrivateKey()
    {
        $SysConfig = new SysConfig();
        $this->assertInternalType('string', $SysConfig->getRecaptchaPrivateKey());
    }

    public function testCanGetRecaptchaUseOnLogin()
    {
        $SysConfig = new SysConfig();
        $this->assertInternalType('bool', $SysConfig->getRecaptchaUseOnLogin());
    }

    public function testCanGetRecaptchaUseWhenRegisteringNewAccounts()
    {
        $SysConfig = new SysConfig();
        $this->assertInternalType('bool', $SysConfig->getRecaptchaUseWhenRegisteringNewAccounts());
    }

    public function testCanGetRecaptchaUseOnXAmountOfFailedAttempts()
    {
        $SysConfig = new SysConfig();
        $this->assertInternalType('int', $SysConfig->getRecaptchaUseOnXAmountOfFailedAttempts());
    }


}
