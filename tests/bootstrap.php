<?php

defined('YII_ENABLE_EXCEPTION_HANDLER') or define('YII_ENABLE_EXCEPTION_HANDLER',false);
defined('YII_ENABLE_ERROR_HANDLER') or define('YII_ENABLE_ERROR_HANDLER',false);

require_once dirname(__DIR__) . '/framework/yii.php';

Yii::import('system.test.CTestCase');
Yii::import('system.test.CDbTestCase');

$config = dirname(__DIR__) . '/config/test.php';
Yii::createWebApplication($config);
