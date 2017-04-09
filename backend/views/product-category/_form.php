<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\store\ProductCategory;
//use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\store\ProductCategory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-category-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cat_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>

    <?php $cat = new ProductCategory; ?>
    <?= $form->field($model, 'parent')->dropDownList(
            $cat->getParent(),
            ['prompt'=>'-----Chọn danh mục cha-----']) ?>

    <?= $form->field($model, 'status')->checkbox() ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
