<?php
require __DIR__.'/../../vendor/autoload.php';

use App\Database\DbFactory;
use App\Helper\DatabasePlugin;
use App\Helper\File;

$file = new File();
$envConfig = $file->readFile("../../.env");

$dbFactory = new DbFactory();

$db = $dbFactory->getDb(DatabasePlugin::MySql);
//$db = $dbFactory->getDb(DatabasePlugin::Mongo);
//$db = $dbFactory->getDb(DatabasePlugin::Postgres);

echo $db->connect();