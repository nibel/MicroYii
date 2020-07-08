<?php
// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require(__DIR__ . '/../../vendor/autoload.php');
require(__DIR__ . '/../../vendor/yiisoft/yii2/Yii.php');
require(__DIR__ . '/../../common/config/bootstrap.php');

if(YII_DEBUG){
    $config = yii\helpers\ArrayHelper::merge(
        require(__DIR__ . '/../../common/config/config.dev.php'),
        require(__DIR__ . '/../config/config.php')
    );
}else{
    $config = yii\helpers\ArrayHelper::merge(
        require(__DIR__ . '/../../common/config/config.prod.php'),
        require(__DIR__ . '/../config/config.php')
    );
}


(new yii\web\Application($config))->run();
