<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Propertyforrent */

$this->title = 'Update Propertyforrent: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Propertyforrents', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="propertyforrent-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
