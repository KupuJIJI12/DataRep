<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;


class ChartjsController extends Controller
{
   
    public function actionFirstchart()
    {
        return $this->render('firstchart');
    }
}
