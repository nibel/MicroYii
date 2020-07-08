<?php

namespace %APPNAME%\controllers;

use yii\console\Controller;
use Yii;

class SiteController extends Controller
{
    public function actionIndex()
    {
        return 'Hello World! %APPNAME%';
    }
}