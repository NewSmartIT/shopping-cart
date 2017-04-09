<?php
use yii\helpers\Html;
$bundle = \frontend\assets\FrontendAsset::register($this);
?>
<div class="col-md-10">

        <div class="product">
            <div class="images">
                <a href="#" title="images"><img src="<?php echo $model->image_base_url.'/'.$model->image_base_path; ?>" alt="images"></a>
            </div>
            <div class="text">
                <a href="#" class="product-title" title="Chemistry"><?=$model->name?></a>
                <p class="price"><?=$model->price?></p>
            </div>
        </div>

</div>