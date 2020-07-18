<?php
require __DIR__.'/../vendor/autoload.php';
use App\Helper\HelloPattern;

$hello = new HelloPattern();
$hello->show();