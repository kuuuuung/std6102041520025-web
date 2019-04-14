<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Privateowner */

$this->title = 'Create Privateowner';
$this->params['breadcrumbs'][] = ['label' => 'Privateowners', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="privateowner-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
