<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';



//начало многосточной строки, можно использовать любые кавычки
$script = <<< JS
JS;
//маркер конца строки, обязательно сразу, без пробелов и табуляции
$this->registerJs($script, yii\web\View::POS_READY);
?>
<h1>Ей то заголовок</h1>
<iframe src='https://cdn.knightlab.com/libs/timeline3/latest/embed/index.html?source=1l0hGw_355Lp5u2aTlIUm037agRHCVVSNFt4dQkzYbT8&font=Default&lang=en&initial_zoom=2&height=650' width='100%' height='650' webkitallowfullscreen mozallowfullscreen allowfullscreen frameborder='0'></iframe>



