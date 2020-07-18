<?php
namespace App\Helper\Facades;
use App\Manager\ConfigManager;
class Config extends ConfigManager{

    public static function setAccessor(){
        return "Manager\ConfigManager";
    }
}