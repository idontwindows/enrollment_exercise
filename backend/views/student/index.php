<?php

use common\models\Studentinfo;
use yii\bootstrap5\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
//use yii\grid\GridView;
use kartik\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\StudentinfoSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Student';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="studentinfo-index">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <!-- <p>
        <?= Html::a('Create Studentinfo', ['create'], ['class' => 'btn btn-success']) ?>
    </p> -->

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'kartik\grid\SerialColumn'],

            // 'id',
            'studentid',
            'name',
            'birthdate',
            //'parentid',
            [
                'attribute' => 'parentid',
                'label' => 'Parent\'s Name',
                'width' => '310px',
                'value' => function ($model, $key, $index, $widget) {
                    return $model->parent->name;
                },
            ],
            [
                'attribute' => 'contact',
                'label' => 'Contact Number',
                'width' => '310px',
                'value' => function ($model, $key, $index, $widget) {
                    return $model->parent->contactnumber;
                },
            ],
            [
                'attribute' => 'email',
                'label' => 'Email',
                'width' => '310px',
                'value' => function ($model, $key, $index, $widget) {
                    return $model->parent->email;
                },
            ],
            [
                'attribute' => 'relation',
                'label' => 'Relation',
                'width' => '310px',
                'value' => function ($model, $key, $index, $widget) {
                    return $model->parent->relation;
                },
            ],
            // [
            //     'class' => ActionColumn::className(),
            //     'urlCreator' => function ($action, Studentinfo $model, $key, $index, $column) {
            //         return Url::toRoute([$action, 'id' => $model->id]);
            //      }
            // ],
        ],
        'panel' => [
            'heading' => Html::encode($this->title),
            'type' => 'primary',
            //'before' => Html::button('Assign', ['value' => Url::to(['group/assignpstc']), 'class' => 'btn btn-success button-view', 'id' => 'button-view', 'data-toggle' => 'tooltip', 'title' => 'Assign']),
            // 'before' => Helper::checkRoute('/functionalunit/create') ? Html::a('Create Service Unit', ['create'], ['class' => 'btn btn-success']) : '',
            // 'after'=>Html::a('<i class="fas fa-redo"></i> Reset Grid', ['index'], ['class' => 'btn btn-info']),
            //'footer'=>true
        ],
    ]); ?>


</div>