<?php

namespace App\Database;

use App\Interfaces\InterfaceDb;
use App\Helper\Facades\Config;
use App\Helper\DatabasePlugin;
class MySql implements InterfaceDb{

    protected $_host = "";
    protected $_userName = "";
    protected $_password = "";
    protected $_dbName = "";
    protected $_connect = null;
    protected $_pluginName = DatabasePlugin::MYSQL;

    /**
     * Connect Function
     *
     * @return Mysql
     */
    public function connect(){
        try{
            $dbConfig = Config::getConfig($this->_pluginName);
            // Create connection
            $this->_host = $dbConfig['host'];
            $this->_userName = $dbConfig['username'];
            $this->_password = $dbConfig['password'];
            $this->_dbName = $dbConfig['database'];
            //FIX ME [Code] ko catch được khi ko kết nối dc
            $this->_connect = new \PDO("mysql:host=$this->_host;dbname=$this->_dbName",$this->_userName,$this->_password);
            return $this;
        }catch(\PDOException  $e){
            return $e->getMessage();
        }    
    }

    
}
