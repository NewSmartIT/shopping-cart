<?php
use common\models\store\Product;
/* @var $this yii\web\View */
//$this->title = Yii::$app->name;
$bundle = \frontend\assets\FrontendAsset::register($this);
?>
<div class="row">
    <div class="space-30">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active">
                    <img src="<?=$this->assetManager->getAssetUrl($bundle, 'images/slide-show1.jpg')?>" alt="First slide">
                </div>
                <div class="item">
                    <img src="<?=$this->assetManager->getAssetUrl($bundle, 'images/slide-show2.jpg')?>" alt="First slide">
                </div>
                <div class="item">
                    <img src="<?=$this->assetManager->getAssetUrl($bundle, 'images/slide-show3.jpg')?>" alt="First slide">
                </div>
            </div>
            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </a>
        </div>
    </div>
    <!-- End slide Show -->
</div>
<!-- End row -->
<div class="products box-shadow space-30">
    <div class="col-md-2 cat-title">
        <h3>Big Cooling Days Offers</h3>
        <a href="#" title="View All">View All</a>
    </div>

    <?=
    \yii\widgets\ListView::widget([
        'dataProvider' => $listDataProvider,
        'options' => [
            'tag' => 'div',
            'class' => 'product-slide',
            'id' => 'list-wrapper',
        ],
        'layout' => "{items}",
        'itemView' => '_product_item',
    ]);
    ?>


</div>
<!-- End product -->

<!-- End catbox -->

<!-- End product -->


<!-- End product -->