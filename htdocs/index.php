<?php

$autoloader = dirname(__FILE__) . '/../vendor/autoload.php';
$config     = dirname(__FILE__) . '/../config/main.php';

defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL', 3);

require_once $autoloader;

Yii::createWebApplication($config)->run();