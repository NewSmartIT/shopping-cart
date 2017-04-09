<?php
/* @var $this \yii\web\View */
use yii\helpers\ArrayHelper;
use yii\widgets\Breadcrumbs;

/* @var $content string */

$this->beginContent('@frontend/views/layouts/base.php');
$bundle = \frontend\assets\FrontendAsset::register($this);
?>
<body>
    <div class="wrappage">
        <header id="header">
            <div id="shopping-navbar">
                <div class="container">
                    <div class="row row1">
                        <ul class="largenav pull-right">
                            <li class="upper-links"><a class="links" href="https://github.com/chawlaaditya8/snippets">Man</a></li>
                            <li class="upper-links"><a class="links" href="https://github.com/chawlaaditya8/snippets">Woman</a></li>
                            <li class="upper-links"><a class="links" href="https://github.com/chawlaaditya8/snippets">kids</a></li>
                            <li class="upper-links"><a class="links" href="https://github.com/chawlaaditya8/snippets">Shoes</a></li>
                            <li class="upper-links"><a class="links" href="https://github.com/chawlaaditya8/snippets">Link 5</a></li>
                            <li class="upper-links"><a class="links" href="https://github.com/chawlaaditya8/snippets">Link 6</a></li>
                            <li class="upper-links">
                                <a class="links" href="https://github.com/chawlaaditya8/snippets">
                                    <svg class="" width="16px" height="12px" style="overflow: visible;">
                                        <path d="M8.037 17.546c1.487 0 2.417-.93 2.417-2.417H5.62c0 1.486.93 2.415 2.417 2.415m5.315-6.463v-2.97h-.005c-.044-3.266-1.67-5.46-4.337-5.98v-.81C9.01.622 8.436.05 7.735.05 7.033.05 6.46.624 6.46 1.325v.808c-2.667.52-4.294 2.716-4.338 5.98h-.005v2.972l-1.843 1.42v1.376h14.92v-1.375l-1.842-1.42z" fill="#fff"></path>
                                    </svg>
                                </a>
                            </li>
                            <li class="upper-links dropdown"><a class="links" href="https://github.com/chawlaaditya8/snippets">My Account</a>
                                <ul class="dropdown-menu">
                                    <li class="profile-li"><a class="profile-links" href="https://github.com/chawlaaditya8/snippets"> My Order</a></li>
                                    <li class="profile-li"><a class="profile-links" href="https://github.com/chawlaaditya8/snippets">Gift Card</a></li>
                                    <li class="profile-li"><a class="profile-links" href="https://github.com/chawlaaditya8/snippets">Change Password </a></li>
                                    <li class="profile-li"><a class="profile-links" href="https://github.com/chawlaaditya8/snippets">logout</a></li>

                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="row row2">
                        <div class="col-sm-2">
                            <h2 style="margin:0px;"><span class="smallnav menu" onclick="openNav()">☰ Owen</span></h2>
                            <h1 style="margin:0px;"><span class="largenav">Owen</span></h1>
                        </div>
                        <div class="shopping-navbar-search smallsearch col-sm-8 col-xs-11">
                            <div class="row">
                                <input class="shopping-navbar-input col-xs-11" type="" placeholder="Search for Products, Brands and more" name="">
                                <button class="shopping-navbar-button col-xs-1">
                                    <svg width="15px" height="15px">
                                        <path d="M11.618 9.897l4.224 4.212c.092.09.1.23.02.312l-1.464 1.46c-.08.08-.222.072-.314-.02L9.868 11.66M6.486 10.9c-2.42 0-4.38-1.955-4.38-4.367 0-2.413 1.96-4.37 4.38-4.37s4.38 1.957 4.38 4.37c0 2.412-1.96 4.368-4.38 4.368m0-10.834C2.904.066 0 2.96 0 6.533 0 10.105 2.904 13 6.486 13s6.487-2.895 6.487-6.467c0-3.572-2.905-6.467-6.487-6.467 "></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="cart largenav col-sm-2">
                            <a class="cart-button">
                                <svg class="cart-svg " width="16 " height="16 " viewBox="0 0 16 16 ">
                                    <path d="M15.32 2.405H4.887C3 2.405 2.46.805 2.46.805L2.257.21C2.208.085 2.083 0 1.946 0H.336C.1 0-.064.24.024.46l.644 1.945L3.11 9.767c.047.137.175.23.32.23h8.418l-.493 1.958H3.768l.002.003c-.017 0-.033-.003-.05-.003-1.06 0-1.92.86-1.92 1.92s.86 1.92 1.92 1.92c.99 0 1.805-.75 1.91-1.712l5.55.076c.12.922.91 1.636 1.867 1.636 1.04 0 1.885-.844 1.885-1.885 0-.866-.584-1.593-1.38-1.814l2.423-8.832c.12-.433-.206-.86-.655-.86 " fill="#fff "></path>
                                </svg> Link
                                <span class="item-number ">0</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="mySidenav" class="sidenav">
                <div class="container" style="background-color: #2874f0; padding-top: 10px;">
                    <span class="sidenav-heading">Home</span>
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                </div>
                <a href="https://github.com/chawlaaditya8/snippets">Link</a>
                <a href="https://github.com/chawlaaditya8/snippets">Link</a>
                <a href="https://github.com/chawlaaditya8/snippets">Link</a>
                <a href="https://github.com/chawlaaditya8/snippets">Link</a>
            </div>
            <div class="container">
                <nav class="navbar space-0">
                    <div class="navbar-header">
                        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div class="collapse navbar-collapse js-navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li class="dropdown mega-dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Men <span class="caret"></span></a>
                                <ul class="dropdown-menu mega-dropdown-menu">
                                    <li class="col-sm-3">
                                        <ul>
                                            <li class="dropdown-header">Features</li>
                                            <li><a href="#">Auto Carousel</a></li>
                                            <li><a href="#">Carousel Control</a></li>
                                            <li><a href="#">Left & Right Navigation</a></li>
                                            <li><a href="#">Four Columns Grid</a></li>
                                            <li class="divider"></li>
                                            <li class="dropdown-header">Fonts</li>
                                            <li><a href="#">Glyphicon</a></li>
                                            <li><a href="#">Google Fonts</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-3">
                                        <ul>
                                            <li class="dropdown-header">Features</li>
                                            <li><a href="#">Auto Carousel</a></li>
                                            <li><a href="#">Carousel Control</a></li>
                                            <li><a href="#">Left & Right Navigation</a></li>
                                            <li><a href="#">Four Columns Grid</a></li>
                                            <li class="divider"></li>
                                            <li class="dropdown-header">Fonts</li>
                                            <li><a href="#">Glyphicon</a></li>
                                            <li><a href="#">Google Fonts</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-3">
                                        <ul>
                                            <li class="dropdown-header">Plus</li>
                                            <li><a href="#">Navbar Inverse</a></li>
                                            <li><a href="#">Pull Right Elements</a></li>
                                            <li><a href="#">Coloured Headers</a></li>
                                            <li><a href="#">Primary Buttons & Default</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-3">
                                        <ul>
                                            <li class="dropdown-header">Much more</li>
                                            <li><a href="#">Easy to Customize</a></li>
                                            <li><a href="#">Calls to action</a></li>
                                            <li><a href="#">Custom Fonts</a></li>
                                            <li><a href="#">Slide down on Hover</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown mega-dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Women <span class="caret"></span></a>
                                <ul class="dropdown-menu mega-dropdown-menu">
                                    <li class="col-sm-3">
                                        <ul>
                                            <li class="dropdown-header">Features</li>
                                            <li><a href="#">Auto Carousel</a></li>
                                            <li><a href="#">Carousel Control</a></li>
                                            <li><a href="#">Left & Right Navigation</a></li>
                                            <li><a href="#">Four Columns Grid</a></li>
                                            <li class="divider"></li>
                                            <li class="dropdown-header">Fonts</li>
                                            <li><a href="#">Glyphicon</a></li>
                                            <li><a href="#">Google Fonts</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-3">
                                        <ul>
                                            <li class="dropdown-header">Plus</li>
                                            <li><a href="#">Navbar Inverse</a></li>
                                            <li><a href="#">Pull Right Elements</a></li>
                                            <li><a href="#">Coloured Headers</a></li>
                                            <li><a href="#">Primary Buttons & Default</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-3">
                                        <ul>
                                            <li class="dropdown-header">Much more</li>
                                            <li><a href="#">Easy to Customize</a></li>
                                            <li><a href="#">Calls to action</a></li>
                                            <li><a href="#">Custom Fonts</a></li>
                                            <li><a href="#">Slide down on Hover</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-3">
                                        <ul>
                                            <li class="dropdown-header">Much more</li>
                                            <li><a href="#">Easy to Customize</a></li>
                                            <li><a href="#">Calls to action</a></li>
                                            <li><a href="#">Custom Fonts</a></li>
                                            <li><a href="#">Slide down on Hover</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">Store locator</a></li>
                        </ul>
                    </div><!-- /.nav-collapse -->
                </nav>
            </div>
            <!-- End container -->
        </header>
        <!-- End header -->
        <div class="container container-full">
         <?=$content ?>
            <div class="products box-shadow space-30 padding-tb-10">
                <div class="title-text">
                    <h3>Featured Brands</h3>
                </div>
                <div class="col-md-3">
                    <a class="hover-zoom" href="#" title="catbox">
                        <img class="img-responsive" src="<?=$this->assetManager->getAssetUrl($bundle, 'images/cat-box.jpg')?>" alt="images">
                    </a>
                </div>
                <!-- End col-md-3 -->
                <div class="col-md-3">
                    <a class="hover-zoom" href="#" title="catbox">
                        <img class="img-responsive" src="<?=$this->assetManager->getAssetUrl($bundle, 'images/cat-box2.jpg')?>" alt="images">
                    </a>
                </div>
                <!-- End col-md-3 -->
                <div class="col-md-3">
                    <a class="hover-zoom" href="#" title="catbox">
                        <img class="img-responsive" src="<?=$this->assetManager->getAssetUrl($bundle, 'images/cat-box3.jpg')?>" alt="images">
                    </a>
                </div>
                <!-- End col-md-3 -->
                <div class="col-md-3">
                    <a class="hover-zoom" href="#" title="catbox">
                        <img class="img-responsive" src="<?=$this->assetManager->getAssetUrl($bundle, 'images/cat-box4.jpg')?>" alt="images">
                    </a>
                </div>
                <!-- End col-md-3 -->
            </div>
        </div>
        <!-- End container -->
        <footer id="footer">
            <div class="container container-full">
                <div class="col-md-4">
                    <h3>HELP</h3>
                    <ul class="menu-footer">
                        <li><a href="#" title="Payment">Payment</a></li>
                        <li><a href="#" title="Saved Cards">Saved Cards</a></li>
                        <li><a href="#" title="Shipping">Shipping</a></li>
                        <li><a href="#" title="Cancellation & Returns">Cancellation & Returns</a></li>
                        <li><a href="#" title="FAQ">FAQ</a></li>
                        <li><a href="#" title="Report Infringement">Report Infringement</a></li>
                    </ul>
                </div>
                <!-- End col-md-4 -->
                <div class="col-md-4">
                    <h3>Shop</h3>
                    <ul class="menu-footer">
                        <li><a href="#" title="Payment">Payment</a></li>
                        <li><a href="#" title="Saved Cards">Saved Cards</a></li>
                        <li><a href="#" title="Shipping">Shipping</a></li>
                        <li><a href="#" title="Cancellation & Returns">Cancellation & Returns</a></li>
                        <li><a href="#" title="FAQ">FAQ</a></li>
                        <li><a href="#" title="Report Infringement">Report Infringement</a></li>
                    </ul>
                </div>
                <!-- End col-md-4 -->
                <div class="col-md-4 last">
                    <h3>MISC</h3>
                    <ul class="menu-footer">
                        <li><a href="#" title="Payment">Payment</a></li>
                        <li><a href="#" title="Saved Cards">Saved Cards</a></li>
                        <li><a href="#" title="Shipping">Shipping</a></li>
                        <li><a href="#" title="Cancellation & Returns">Cancellation & Returns</a></li>
                        <li><a href="#" title="FAQ">FAQ</a></li>
                        <li><a href="#" title="Report Infringement">Report Infringement</a></li>
                    </ul>
                </div>
                <!-- End col-md-4 -->
            </div>
        </footer>
        <!-- End footer -->
    </div>
</body>
<?php $this->endContent() ?>