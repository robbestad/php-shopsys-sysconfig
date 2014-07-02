<?php
/**
 * Unit Test For SysConfig
 *
 * @author Sven Anders Robbestad <robbestad@gmail.com>
 */


namespace SysConfig\tests;

use SysConfig\SysConfig;

require __DIR__.'/../src/SysConfig/SysConfig.php';

class SysConfigTest extends \PHPUnit_Framework_TestCase
{

    protected $config;

    public function __construct()
    {
        $SysConfig= new SysConfig();
        $this->config = $SysConfig->getConfig();
    }

    public function testCanGetConfig()
    {
        $this->assertInternalType('array', $this->config["shopsys"]);
    }

    public function testCanGetShopName()
    {
        $SysConfig= new SysConfig();
        $this->assertInternalType('string', $SysConfig->getShopName());
    }

    public function testCanGetShopUrl()
    {
        $SysConfig= new SysConfig();
        $this->assertInternalType('string', $SysConfig->getShopUrl());
    }

    public function testCanGetDebugSettings()
    {
        $SysConfig= new SysConfig();
        $this->assertInternalType('bool', $SysConfig->getShopDebugMode());
    }


}
