<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class ChartjsAsset extends AssetBundle
{
    // public $baseUrl = '@web';
    public $soursePath = '@app/components/ChartJS';

    public $css = [
        '/css/Chart.min.css',
    ];
    public $js = [
        '/js/Chart.min.js'
    ];
    public $jsOptions = ['position' => View::POS_END];
    public $publishOptions = [
        'forceCopy'=>true
    ];
}
