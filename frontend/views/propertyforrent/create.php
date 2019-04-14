<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Propertyforrent */

$this->title = 'Create Propertyforrent';
$this->params['breadcrumbs'][] = ['label' => 'Propertyforrents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="propertyforrent-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
