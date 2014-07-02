<?php

namespace SysConfig;


class SysConfig
{

    protected $config;

    public function __construct()
    {
        $this->config = $this->getConfig();
    }

    public function getConfig()
    {
        /*
        * Select the correct config file.
        * sysconfig.local.php is the preferred config file,
        * followed by sysconfig.global.php
        * and sysconfig.global.php.dist
        */
        $configFilesArrayMap = [];
        $folders = array(
            __DIR__ . "/../config/",
            __DIR__ . "/../../config/",
            __DIR__ . "/../../../../config/autoload/",
        );
        foreach ($folders as $folder) {
            $fileMap = [];
            if (is_dir($folder)) {
                $fileMap[] = preg_grep('~^sysconfig.*\.(dist|local|php)$~', scandir($folder));
                foreach ($fileMap as $fileArray) {
                    foreach ($fileArray as $file) {
                        $configFilesArrayMap[] = $folder . $file;
                    }
                }
            }
        }

        $configFilesArray = [];
        //find files by rank order
        $findFiles = preg_grep("/local.php.*/", $configFilesArrayMap);
        if (!empty($findFiles)) {
            foreach ($findFiles as $file) {
                $configFilesArray[] = $file;
            }
        }
        $findFiles = preg_grep("/global.php$/", $configFilesArrayMap);
        if (!empty($findFiles)) {
            foreach ($findFiles as $file) {
                $configFilesArray[] = $file;
            }
        }
        $findFiles = preg_grep("/php.dist$/", $configFilesArrayMap);
        if (!empty($findFiles)) {
            foreach ($findFiles as $file) {
                $configFilesArray[] = $file;
            }
        }
        return include $configFilesArray[0];
    }


}
