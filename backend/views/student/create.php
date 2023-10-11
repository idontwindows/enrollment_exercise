<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Studentinfo $model */

$this->title = 'Create Studentinfo';
$this->params['breadcrumbs'][] = ['label' => 'Studentinfos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="studentinfo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
