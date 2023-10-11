<?php

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;
//use yii\helpers\Html;
//use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Parentinfo $model */
/** @var ActiveForm $form */

$this->title = 'Enrollment';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="enrollment">
    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    Parent Information
                </div>
                <div class="card-body">
                    <!-- <?= $form->field($parentinfo, 'id') ?> -->
                    <?= $form->field($parentinfo, 'name') ?>
                    <?= $form->field($parentinfo, 'contactnumber') ?>
                    <?= $form->field($parentinfo, 'email') ?>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    Student Information
                </div>
                <div class="card-body">
                    <!-- <?= $form->field($studentinfo, 'id') ?> -->
                    <!-- <?= $form->field($studentinfo, 'studentid') ?> -->
                    <?= $form->field($studentinfo, 'name') ?>
                    <?= $form->field($studentinfo, 'birthdate') ?>
                    <!-- <?= $form->field($studentinfo, 'parentid') ?> -->
                    <?= $form->field($parentinfo, 'relation') ?>

                </div>
            </div>
        </div>
    </div>

    <div class="form-group mt-2">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div><!-- enrollment -->

$js=<<<JS

JS;