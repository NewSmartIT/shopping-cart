<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\store\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Product', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            //'category_id',
            [
                'attribute' => 'category_id',
                'format' => 'raw',
                'value' => function($model){

                    return isset($model->parentShow) ? $model->parentShow->cat_name : '';


                },

            ],
//            'slug',
            'price',
            // 'description',
//             'image_base_url:url',
//             'image_base_path',
//             'status',
            [
                'attribute' => 'status',
                'format' => 'raw',
                'value' => function($model){
                    return ($model->status ==1) ? '<span class="label label-success">Hoạt động</span>':'<span class="label label-danger">Bị Khóa</span>';
                },

            ],
            'created_at:dateTime',
//            'created_by',
            [
                'attribute' => 'created_by',
                'format' => 'raw',
                'value' => function($model){
                    return isset($model->created) ? $model->created->username : '';
                },

            ],

            'updated_at:dateTime',
//            'updated_by',
            [
                'attribute' => 'updated_by',
                'format' => 'raw',
                'value' => function($model){
                    return isset($model->updated) ? $model->updated->username : '';
                },

            ],

            [
                'class' => 'backend\grid\ActionColumn',
                'contentOptions'=> ["style"=>"width:100px;"],
                'template'=>'{view} {update} {delete}'
            ],
        ],
    ]); ?>
</div>
