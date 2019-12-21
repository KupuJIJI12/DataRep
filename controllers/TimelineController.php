<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;


class TimelineController extends Controller
{
   
    public function actionTimeline()
    {
        return $this->render('Timelinechart');
    }
}