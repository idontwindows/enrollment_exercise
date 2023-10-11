<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Studentinfo $model */

$this->title = 'Update Studentinfo: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Studentinfos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="studentinfo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
