<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1']);//, shrink-to-fit=no
//$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
//$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>
<div class="language-sec ">
    <div class="container position-relative ">
        <div class="d-flex justify-content-end hover-div   ">
            <div class="language position-fixed end-10 top-0 z-2   ">
                <div class="selected-lang ">
                    <div class="lang-item-child d-flex justify-content-between align-items-center gap-1 pb-2">
                        <img src="../images/en_US.png" alt="">
                        <span>English</span>
                    </div>
                </div>
                <div class="lang-list  z-3">

                    <div class="lang-item  selected">
                        <div class="lang-item-child d-flex justify-content-between align-items-center gap-1">
                            <img src="../images/en_US.png" alt="">
                            <span>English</span>
                        </div>
                    </div>

                    <div class="lang-item">
                        <div  class="lang-item-child d-flex justify-content-between align-items-center gap-1">
                            <img src="../Images/hy-img.png" width="50 " alt="">
                            <span>Armenian</span>
                        </div>
                    </div>

                    <div class="lang-item">
                        <div  class="lang-item-child d-flex justify-content-between align-items-center gap-1">
                            <img src="../Images/ru_RU.png" width="50" alt="">
                            <span>Russian</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<header>
    <div class="search-up d-flex align-items-center " id="searchUpForm">
        <div class="container ">
            <form class="input-group form-search w-50 my-3 m-auto d-flex justify-content-center"  >
                <input type="text" class="input-search w-100 p-2 border-0" placeholder="Search"  aria-describedby="button-addon2">
                <button class="submit-search border-0 bg-transparent " type="submit" id="button-addon2"><i class='bx bx-search'></i></button>
            </form>
        </div>
    </div>
    <nav>
        <div class="nav-up">
            <div class="container d-flex">
                <div class=" d-flex align-items-center justify-content-start pt-0 ">
                    <ul class="contact-info d-flex list-unstyled" >
                        <li>Phone:
                            <a class="text-decoration-none" href="#"> +37491919122</a>
                        </li>
                        <li>Email:
                            <a class="text-decoration-none" href="#"> h.hovhannisyan@smartshippings.com</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="nav-down d-flex align-items-center">
            <div class="container">
                <div class="navbar-div d-flex justify-content-between ">
                    <div class="logo">
                        <a href="/">
                            <img src="../images/smart-logo.png" alt="logo">
                        </a>
                    </div>
                    <div class="navbar-search">
                        <ul class="navbar d-flex">
                            <li class="nav-item">
                                <a class="nav-link" href="/">HOME</a>
                            </li>
                            <li class="nav-item d-flex align-items-center">
                                <a class="nav-link" href="/services">SERVICES</a>
                                <i class='bx bx-chevron-down'></i>
                                <div class="drop-div">
                                    <ul class="drop-menu">
                                        <li class="drop-item  pb-2 d-flex  justify-content-center" ><a class="drop-link" href="#" style="padding-right: 20px;">Freight Forwarding</a><i class='bx bx-chevron-right'></i>
                                            <div class="drop-div-2">
                                                <ul class="drop-menu-2">
                                                    <li class="drop-item-2">
                                                        <a href="/airfreght" class="drop-link-2">Air Freight</a>
                                                    </li>
                                                    <li class="drop-item-2 ">
                                                        <a href="/seafreght" class="drop-link-2">Sea Freght</a>
                                                    </li>
                                                    <li class="drop-item-2 ">
                                                        <a href="/railfreght" class="drop-link-2">Rail Freight</a>
                                                    </li>
                                                    <li class="drop-item-2">
                                                        <a href="/roadfreght" class="drop-link-2">Road Freight</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="drop-item pb-2 d-flex justify-content-center">
                                            <a class="drop-link" href="#" style="padding-right: 2px;">Value-added Services</a><i class='bx bx-chevron-right'></i>
                                            <div class="drop-div-3">
                                                <ul class="drop-menu-3">
                                                    <li class="drop-item-3 pb-1">
                                                        <a href="/customsbrokerage" class="drop-link-3">Customs Brokerage</a>
                                                    </li>
                                                    <li class="drop-item-3 pb-1">
                                                        <a href="/Cargoinsurance" class="drop-link-3">Cargo Insurance</a>
                                                    </li>
                                                    <li class="drop-item-3 pb-1">
                                                        <a href="/warehousing" class="drop-link-3">Warehousing& Distribution</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="drop-item d-flex pb-1"><a class="drop-link" href="/projectlogistics">Project Logistics</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/about">ABOUT US</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/gallery">GALLERY</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/contact">CONTACT US</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/shippment">TRACK YOUR SHIPPMENT</a>
                            </li>
                        </ul>
                        <div class="nav-menu">
                            <i class='bx bx-menu'  id="menuToggle"></i>
                        </div>
                        <div class="search d-flex justify-content-end" id="searchToggleIcon">
                            <button>
                                <i class='bx bx-search'></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sidebar" id="sidebar">

            <!-- Your navigation menu -->
            <ul class="navbar-mobile ">
                <li class="nav-mob-item">
                    <a class="nav-mob-link py-4" href="/home">HOME</a>
                </li>
                <li class="nav-mob-item " id="dropMobItem">
                    <a class="nav-mob-link py-4" href="/services">SERVICES</a>
                    <div class="drop-mob-div">
                        <ul class="drop-mob-menu">
                            <li class="drop-mob-item"><a class="drop-mob-link" href="#"><i class='bx bx-chevron-right'></i>Freight Forwarding</a>
                                <div class="drop-mob-div-2">
                                    <ul class="drop-mob-menu-2">
                                        <li class="drop-mob-item-2">
                                            <a href="/airfreght" class="drop-mob-link-2"><i class='bx bx-chevron-right'></i>Air Freight</a>
                                        </li>
                                        <li class="drop-mob-item-2 ">
                                            <a href="/Seafreght" class="drop-mob-link-2"><i class='bx bx-chevron-right'></i>Sea Freght</a>
                                        </li>
                                        <li class="drop-mob-item-2 ">
                                            <a href="/railfreight" class="drop-mob-link-2"><i class='bx bx-chevron-right'></i>Rail Freight</a>
                                        </li>
                                        <li class="drop-mob-item-2">
                                            <a href="/roadfreight" class="drop-mob-link-2"><i class='bx bx-chevron-right'></i>Road Freight</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="drop-mob-item "><a class="drop-mob-link" href="#"><i class='bx bx-chevron-right'></i>Value-added Services</a>
                                <div class="drop-mob-div-3">
                                    <ul class="drop-mob-menu-3">
                                        <li class="drop-mob-item-3 ">
                                            <a href="/customs" class="drop-mob-link-3"><i class='bx bx-chevron-right'></i>Customs Brokerage</a>
                                        </li>
                                        <li class="drop-mob-item-3 ">
                                            <a href="/customs" class="drop-mob-link-3"><i class='bx bx-chevron-right'></i>Cargo Insurance</a>
                                        </li>
                                        <li class="drop-mob-item-3">
                                            <a href="/warehousing" class="drop-mob-link-3"><i class='bx bx-chevron-right'></i>Warehousing& Distribution</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="drop-mob-item d-flex "><a class="drop-mob-link" href="/projectlogistics"><i class='bx bx-chevron-right'></i>Project Logistics</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-mob-item">
                    <a class="nav-mob-link" href="/about">ABOUT US</a>
                </li>
                <li class="nav-mob-item">
                    <a class="nav-mob-link" href="/gallery">GALLERY</a>
                </li>
                <li class="nav-mob-item">
                    <a class="nav-mob-link" href="/contact">CONTACT US</a>
                </li>
                <li class="nav-mob-item">
                    <a class="nav-mob-link" href="/shippment">TRACK YOUR SHIPPMENT</a>
                </li>
            </ul>
            <!-- Close button for sidebar -->
            <div class="close-btn">
                <i class="fa-sharp fa-solid fa-xmark" id="closeSidebar"></i>
            </div>
        </div>
    </nav>
    <?php
    $controller = Yii::$app->controller->id;
    $action = Yii::$app->controller->action->id;
    ?>
    <?php if($action === 'index' && $controller === 'site'){ ?>
        <div class="headerSlider">
            <div class="swiper  headerSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background-image: url(../images/header-slide-img1.jpg);">
                        <div class="container">
                            <div class="header-title header-title-1 d-flex flex-column align-items-end text-white ">
                                <h1 data-aos="fade-up" data-aos-duration="1000" class="first-h1 " >ACCELERATE</h1><br>
                                <h2 data-aos="fade-up" data-aos-duration="1500">YOUR FREGHIT WITH</h2><br>
                                <h1 data-aos="fade-up" data-aos-duration="2000" class="second-h1" >AIR FREIGHT!</h1>
                                <p data-aos="fade-up" data-aos-duration="2000">Trust us your air freight forwarding, it's fast<br>
                                    easy and convenient with us.
                                </p>
                                <button data-aos="fade-right" data-aos-duration="2500" type="button" class="btn-lg">
                                    Read More
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" style="background-image: url(../images/header-slide-img2.jpg);">
                        <div class="container">
                            <div class="header-title header-title-2 d-flex flex-column align-items-start text-white ">
                                <h1>SEA FREIGHTS</h1><br>
                                <h2>Global Solutions For Your Business</h2><br>
                                <p class=" pt-0 text-start">Are you looking for a cost-effective freight forwarding service, then<br>
                                    our sea freight service is for YOU!
                                </p>
                                <button type="button" class="btn-lg btn-animate">
                                    Read More
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" style="background-image: url(../images/header-slide-img3.jpg);">
                        <div class="container">
                            <div class="header-title header-title-3 d-flex flex-column align-items-end text-white ">
                                <h1>ROAD FREIGHT</h1><br>
                                <h2>Shortens Transit Times</h2><br>
                                <p class="text-end pt-0 mt-0">Choose our road freight service for your freight forwarding. It's fast,<br>
                                    flexible and cost-effective.
                                </p>
                                <button type="button" class="btn-lg  btn-animate">
                                    Read More
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next header-swiper-arrow"></div>
                <div class="swiper-button-prev header-swiper-arrow"></div>
            </div>
            <div class="header-pagination " style="z-index: 1;"></div>
        </div>
    <?php }else{ ?>
        <div class="Services-drop-pages-header">
            <div class="container">
                <div class="title-div">
                    <h1><?= $this->params['title'] ?> </h1>
                    <p><a href="/">Home</a><!-- / <span> Services</span>--></p>
                </div>
            </div>
        </div>
    <?php } ?>
</header>
<main id="main" class="flex-shrink-0" role="main">

        <?php if (!empty($this->params['breadcrumbs'])): ?>
            <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
        <?php endif ?>
        <?= Alert::widget() ?>
        <?= $content ?>
</main>

<footer>
    <div class="container">
        <div class="row">
            <div class="footer-con col-lg-6 col-md-6">
                <h6>CONTACT US</h6>
                <p>Smart Shippings LLC<br>
                    Address: 45/2 Margharyan str., 0078 <br>
                    Yerevan Armenia<br>
                    Working days: from Monday to Friday<br>
                    9.00 am to 18:00 pm
                </p>
                <ul class="footer-con-info">
                    <li class="phone-info">
                        <i class="bi bi-telephone"></i>
                        <a href="">+374919122</a>
                    </li>
                    <li class="email-info">
                        <i class="fa-sharp fa-thin fa-at"></i>
                        <a href="">h.hovhannisyan@smartshippings.com</a>
                    </li>
                </ul>
                <ul class="social-icons px-0 d-flex justify-content-start gap-2">
                    <li>
                        <a href="">
                            <i class='bx bxl-facebook'></i>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class='bx bxl-twitter' ></i>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class='bx bxl-google-plus'></i>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class='bx bxl-linkedin' ></i>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class='bx bx-envelope'></i>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="footer-serv col-lg-3 col-md-6 ">
                <h6>SERVICES</h6>
                <ul class="px-0">
                    <li>
                        <a href="/airfreght">
                            Air Freghit
                        </a>
                    </li>
                    <li>
                        <a href="/seafreght">
                            Sea Freghit
                        </a>
                    </li>
                    <li>
                        <a href="/roadfreght">
                            Raod Freight
                        </a>
                    </li>
                    <li>
                        <a href="/railfreght">
                            Rail Freghit
                        </a>
                    </li>
                    <li>
                        <a href="/customsbrokerage">
                            Customs Brokerage
                        </a>
                    </li>
                    <li>
                        <a href="/cargoinsurance">
                            Cargo Insurance
                        </a>
                    </li>
                    <li>
                        <a href="warehousing">
                            Warehousing & Distribution
                        </a>
                    </li>
                    <li>
                        <a href="/projectlogistics">
                            Project Logistics
                        </a>
                    </li>
                </ul>
            </div>

            <div class="footer-subcribe col-lg-3 col-md-6">
                <h6>SUBSCRIBE</h6>
                <p>Sign up to get exclusive offers
                    and news you wont find anywhere
                    else straight to your inbox!
                </p>
                <form class="d-flex flex-column align-items-start">
                    <input class="w-100"  placeholder="Enter your email addres">
                    <button  type="submit">Sign Up</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class=" footer-con-copyright col-lg-12">
                <p>
                    Copyright Expeditor © 2019. All Rights Reserved
                </p>
            </div>
        </div>
    </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!--<script  src="../script.js"></script>-->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
