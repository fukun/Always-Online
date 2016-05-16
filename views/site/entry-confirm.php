<?php
/**
 * Created by PhpStorm.
 * User: kun
 * Date: 16-5-13
 * Time: 下午4:37
 */
use yii\helpers\Html;
?>

<p>你提交了下面的信息:</p>

<ul>
    <li><label>Name</label>:<?= Html::encode($model->name) ?></li>
    <li><label>Email</label>:<?= Html::encode($model->email) ?></li>
</ul>
