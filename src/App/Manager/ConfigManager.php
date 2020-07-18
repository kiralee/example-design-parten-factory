<?php
namespace App\Manager;
use App\Config\Database;
class ConfigManager{

    protected $_fileConfig;

    public static function getConfig($plugin){
        $config = Database::get();
        return $config["connections"][strtolower($plugin)];
    }
}