<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Html;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, maximum-scale=1, initial-scale=1']);//, shrink-to-fit=no
//$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
//$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
$lan_imgs = [];
$lan_imgs['am'] = '../images/hy-img.png';
$lan_imgs['ru'] = '../images/ru_RU.png';
$lan_imgs['en'] = '../images/en_US.png';

$lan_imgs['text']['am'] = 'Armenian';
$lan_imgs['text']['ru'] = 'Russian';
$lan_imgs['text']['en'] = 'English';

$controller = Yii::$app->controller->id;
$action = Yii::$app->controller->action->id;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100  <?= $_COOKIE['language'] ?>">
<?php $this->beginBody() ?>
<div class="language-sec">
    <div class="container position-relative">
        <div class="d-flex justify-content-end hover-div">
            <div class="language position-fixed end-10 top-0 z-2">
                <div class="selected-lang ">
                    <div class="lang-item-child d-flex justify-content-between align-items-center gap-1 pb-2">
                        <img src="<?= $lan_imgs[$_COOKIE['language']]  ?>" alt="">
                        <span> <?= $lan_imgs['text'][$_COOKIE['language']]  ?></span>
                    </div>
                </div>
                <div class="lang-list  z-3">
                    <div class="lang-item selected">
                        <div class="lang-item-child d-flex justify-content-between align-items-center gap-1">
                            <a href="/switch-language?lang=en">
                                <img src="../images/en_US.png" alt="">
                                <span>English</span>
                            </a>
                        </div>
                    </div>
                    <div class="lang-item">
                        <div  class="lang-item-child d-flex justify-content-between align-items-center gap-1">
                            <a href="/switch-language?lang=am" style="display: contents;">
                                <img src="../images/hy-img.png" width="50 " alt="">
                                <span>Armenian</span>
                            </a>
                        </div>
                    </div>
                    <div class="lang-item">
                        <div  class="lang-item-child d-flex justify-content-between align-items-center gap-1">
                            <a href="/switch-language?lang=ru" style="display: contents;">
                                <img src="../images/ru_RU.png" width="50" alt="">
                                <span>Russian</span>
                            </a>
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
            <form class="input-group form-search w-50 my-3 m-auto d-flex justify-content-center">   
                <input type="text" class="input-search w-100 p-2 border-0 text-white" placeholder="<?= $GLOBALS['text']['Search'] ?>"  aria-describedby="button-addon2">
                <button class="submit-search border-0 bg-transparent " type="submit" id="button-addon2"><i class='bx bx-search'></i></button>
            </form>
        </div>
    </div>
    <nav>
        <div class="nav-up">
            <div class="container d-flex">
                <div class=" d-flex align-items-center justify-content-start pt-0 ">
                    <ul class="contact-info d-flex list-unstyled" >
                        <li><?= $GLOBALS['text']['Phone__'] ?>:
                            <a class="text-decoration-none" href="tel:+374 91 919122"> +374 91 919122</a>
                        </li>
                        <li><?= $GLOBALS['text']['Email__'] ?>:
                            <a class="text-decoration-none" href="mailto:h.hovhannisyan@smartshippings.com"> h.hovhannisyan@smartshippings.com</a>
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
                        <ul class="navbar d-flex" style="<?php if ($_COOKIE['language'] == 'am') { echo "gap: 20px"; }?>" >
                        
                            <li class="nav-item d-flex align-items-center">
                                <a class="nav-link <?= $action === 'services' ? 'active-linkPage' : '' ?>" href="/services "><?= $GLOBALS['text']['__SERVICES__'] ?>
                                </a>
                                <i class='bx bx-chevron-down'></i>
                                
                                <div class="drop-div">
                                    <ul class="drop-menu">
                                        <li class="drop-item" >
                                            <a class="drop-link" href="#" 
                                            <?php if ($_COOKIE['language'] == 'en') {
                                                echo "padding-right: 30px !important";
                                            } ?>>
                                                <?= $GLOBALS['text']['Freight_Forwarding_'] ?>
                                                <i class='bx bx-chevron-right'></i>
                                            </a>
                                            
                                            <div class="drop-div-2">
                                                <ul class="drop-menu-2">
                                                    <li class="drop-item-2">
                                                        <a href="/airfreght" class="drop-link-2">
                                                          <?= $GLOBALS['text']['Air_Freight_'] ?>
                                                        </a>
                                                    </li>
                                                    <li class="drop-item-2 ">
                                                        <a href="/seafreght" class="drop-link-2">
                                                            <?= $GLOBALS['text']['Sea_Freight_'] ?>
                                                        </a>
                                                    </li>
                                                    <li class="drop-item-2 ">
                                                        <a href="/railfreght" class="drop-link-2">
                                                            <?= $GLOBALS['text']['Rail_Freight_'] ?>
                                                        </a>
                                                    </li>
                                                    <li class="drop-item-2">
                                                        <a href="/roadfreght" class="drop-link-2">
                                                            <?= $GLOBALS['text']['Road_Freight_'] ?>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="drop-item">
                                            <a class="drop-link" href="#" style="padding-right: 2px; <?php if (@$_COOKIE['language'] == 'ru'){echo "padding-right: 55px";} {
                                                // code...
                                            } ?>">
                                                <?= $GLOBALS['text']['Value_added_Services'] ?>
                                                <i class='bx bx-chevron-right'></i>
                                            </a>
                                            
                                            <div class="drop-div-3">
                                                <ul class="drop-menu-3">
                                                    <li class="drop-item-3 ">
                                                        <a href="/customsbrokerage" class="drop-link-3">
                                                            <?= $GLOBALS['text']['Customs_Brokerag_'] ?>
                                                        </a>
                                                    </li>
                                                    <li class="drop-item-3 ">
                                                        <a href="/cargoinsurance" class="drop-link-3">
                                                            <?= $GLOBALS['text']['Cargo_Insurance_'] ?>
                                                        </a>
                                                    </li>
                                                    <li class="drop-item-3 ">
                                                        <a href="/warehousing" class="drop-link-3">
                                                            <?= $GLOBALS['text']['Warehousing&_Distribution_'] ?>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="drop-item">
                                            <a class="drop-link" href="/projectlogistics">
                                                <?= $GLOBALS['text']['Project_Logistics_'] ?>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= $action === 'about' ? 'active-linkPage' : '' ?>" href="/about">
                                    <?= $GLOBALS['text']['ABOUT_US'] ?>
                                </a>
                            </li>
                             <li class="nav-item">
                                <a class="nav-link <?= $action === 'news' ? 'active-linkPage' : '' ?>" href="/news">
                                   <?= $GLOBALS['text']['__NEWS__'] ?>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= $action === 'gallery' ? 'active-linkPage' : '' ?>" href="/gallery">
                                    <?= $GLOBALS['text']['GALLERY_'] ?>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= $action === 'contact' ? 'active-linkPage' : '' ?>" href="/contact">
                                    <?= $GLOBALS['text']['CONTACT_'] ?>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= $action === 'shippment' ? 'active-linkPage' : '' ?>" href="/shippment">
                                    <?= $GLOBALS['text']['TRACK_YOUR_SHIPPMENT'] ?>
                                </a>
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
                <li class="nav-mob-item " id="dropMobItem">
                    <a class="nav-mob-link" href="/services">
                        <?= $GLOBALS['text']['__SERVICES__'] ?>
                    </a>
                    <div class="drop-mob-div">
                        <ul class="drop-mob-menu">
                            <li class="drop-mob-item">
                                <a class="drop-mob-link" href="#">
                                    <i class='bx bx-chevron-right'></i>
                                    <?= $GLOBALS['text']['Freight_Forwarding_'] ?>
                                </a>
                                <div class="drop-mob-div-2">
                                    <ul class="drop-mob-menu-2">
                                        <li class="drop-mob-item-2">
                                            <a href="/airfreght" class="drop-mob-link-2">
                                                <i class='bx bx-chevron-right'></i>
                                                <?= $GLOBALS['text']['Air_Freight_'] ?>
                                            </a>
                                        </li>
                                        <li class="drop-mob-item-2 ">
                                            <a href="/Seafreght" class="drop-mob-link-2">
                                                <i class='bx bx-chevron-right'></i>
                                                <?= $GLOBALS['text']['Sea_Freight_'] ?>
                                            </a>
                                        </li>
                                        <li class="drop-mob-item-2 ">
                                            <a href="/railfreight" class="drop-mob-link-2">
                                                <i class='bx bx-chevron-right'></i>
                                                <?= $GLOBALS['text']['Rail_Freight_'] ?>
                                            </a>
                                        </li>
                                        <li class="drop-mob-item-2">
                                            <a href="/roadfreight" class="drop-mob-link-2">
                                                <i class='bx bx-chevron-right'></i>
                                                <?= $GLOBALS['text']['Road_Freight_'] ?>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="drop-mob-item ">
                                <a class="drop-mob-link" href="#">
                                    <i class='bx bx-chevron-right'></i>
                                    <?= $GLOBALS['text']['Value_added_Services'] ?>
                                </a>
                                <div class="drop-mob-div-3">
                                    <ul class="drop-mob-menu-3">
                                        <li class="drop-mob-item-3 ">
                                            <a href="/customsbrokerage" class="drop-mob-link-3">
                                                <i class='bx bx-chevron-right'></i>
                                                <?= $GLOBALS['text']['Customs_Brokerag_'] ?>
                                            </a>
                                        </li>
                                        <li class="drop-mob-item-3 ">
                                            <a href="/cargoinsuranc" class="drop-mob-link-3">
                                                <i class='bx bx-chevron-right'></i>
                                                <?= $GLOBALS['text']['Cargo_Insurance_'] ?>
                                            </a>
                                        </li>
                                        <li class="drop-mob-item-3">
                                            <a href="/warehousing" class="drop-mob-link-3">
                                                <i class='bx bx-chevron-right'></i>
                                                <?= $GLOBALS['text']['Warehousing&_Distribution_'] ?>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="drop-mob-item d-flex ">
                                <a class="drop-mob-link" href="/projectlogistics">
                                    <i class='bx bx-chevron-right'></i>
                                     <?= $GLOBALS['text']['Project_Logistics_'] ?>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-mob-item">         
                    <a class="nav-mob-link" href="/about">
                        <?= $GLOBALS['text']['ABOUT_US'] ?>
                    </a>
                </li>
                <li class="nav-mob-item">      
                    <a class="nav-mob-link" href="/news">
                        <?= $GLOBALS['text']['__NEWS__'] ?>
                    </a>
                </li>
                <li class="nav-mob-item">    
                    <a class="nav-mob-link" href="/gallery">
                        <?= $GLOBALS['text']['GALLERY_'] ?>
                    </a>
                </li>
                <li class="nav-mob-item">        
                    <a class="nav-mob-link" href="/contact">
                        <?= $GLOBALS['text']['CONTACT_'] ?>
                    </a>       
                </li>
                <li class="nav-mob-item">
                    <a class="nav-mob-link" href="/shippment">
                        <?= $GLOBALS['text']['TRACK_YOUR_SHIPPMENT'] ?>
                    </a>              
                </li>
            </ul>
            <!-- Close button for sidebar -->
            <div class="close-btn">
                <i class="fa-sharp fa-solid fa-xmark" id="closeSidebar"></i>
            </div>
        </div>
    </nav>
    <?php if($action === 'index' && $controller === 'site'){ ?>
        <div class="headerSlider">
            <div class="swiper  headerSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background-image: url(../images/header-slide-img1.jpg);">
                        <div class="container">
                            <div class="header-title header-title-1 d-flex flex-column align-items-end text-white">
                                <h1 data-aos="fade-up" data-aos-duration="1000" class="first-h1 " >
                                    <?= $GLOBALS['text']['ACCELERATE_'] ?>
                                </h1>
                                <h2 data-aos="fade-up" data-aos-duration="1500">
                                    <?= $GLOBALS['text']['YOUR_FREGHIT_WITH'] ?>
                                </h2>
                                <h1 data-aos="fade-up" data-aos-duration="2000" class="second-h1">
                                     <?= $GLOBALS['text']['Title_Air_Freight_'] ?>
                                </h1>
                                <p data-aos="fade-up" data-aos-duration="2000">
                                    <?= $GLOBALS['text']['Trust_us_your_'] ?>       
                                </p>
                                <a href="/airfreght">
                                    <button data-aos="fade-right" data-aos-duration="2500" type="button" class="btn-lg">
                                        <?= $GLOBALS['text']['Read_More_'] ?>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" style="background-image: url(../images/header-slide-img2.jpg);">
                        <div class="container">
                            <div class="header-title header-title-2 d-flex flex-column align-items-start text-white ">
                                <h1>
                                    <?= $GLOBALS['text']['Sea_Freight_'] ?>
                                </h1>
                                <h2>
                                    <?= $GLOBALS['text']['Global_Solutions__'] ?>
                                </h2>
                                <p class=" pt-0 text-start">
                                    <?= $GLOBALS['text']['Are_you_looking'] ?>
                                </p>
                                <a href="/seafreght">
                                    <button type="button" class="btn-lg ">
                                        <?= $GLOBALS['text']['Read_More_'] ?>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" style="background-image: url(../images/header-slide-img3.jpg);">
                        <div class="container">
                            <div class="header-title header-title-3 d-flex flex-column align-items-end  text-white ">
                                <h1>
                                    <?= $GLOBALS['text']['Road_Freight_'] ?>
                                </h1>
                                <h2>
                                    <?= $GLOBALS['text']['Shortens_Transit__'] ?>
                                </h2>
                                <p class="text-end pt-0 mt-0">
                                    <?= $GLOBALS['text']['Choose_our_road'] ?>
                                </p>
                                <a href="roadfreght">
                                    <button type="button" class="btn-lg ">
                                        <?= $GLOBALS['text']['Read_More_'] ?>
                                    </button>
                                </a>
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
                    <p><a href="/"><?= $GLOBALS['text']['__home__'] ?></a>
                        <?php if(isset($this->params['second'])){ ?>
                        / <a href="<?= $this->params['href']  ?>"><span> <?= $this->params['second'] ?></span></a>
                        <?php } ?>
                    </p>
                    <?= '';//$_SERVER['REDIRECT_URL'] != '/services' ? 'asdfghgfd' : ''?>
                </div>
            </div>
        </div>
    <?php } ?>
</header>
<main id="main" class="flex-shrink-0" role="main">

        <?php if (!empty($this->params['breadcrumbs'])): ?>
            <?= ''// Breadcrumbs::widget(['links' => @$this->params['breadcrumbs']]) ?>
        <?php endif ?>
        <?= Alert::widget() ?>
        <?= $content ?>
</main>
<?php if($action !== 'shippment'){ ?>
    <footer>
        <div class="container">
            <div class="row">
                <div class="footer-con col-lg-3 col-md-6">
                    <h6>
                        <?= $GLOBALS['text']['CONTACT_US'] ?>
                    </h6>
                    <p>
                        <?= $GLOBALS['text']['Smart_Shippings_LLC_'] ?><br>
                        <?= $GLOBALS['text']['Address:__'] ?>
                        <?= $GLOBALS['text']['Working_days:_'] ?><br>
                        <?= $GLOBALS['text']['9.00_am_to_'] ?>
                    </p>
                    <ul class="footer-con-info">
                        <li class="phone-info">
                            <i class="bi bi-telephone"></i>
                            <a href="tel:+374 91 919122">+374 91 919122</a>
                        </li>
                        <li class="email-info">
                            <i class="fa-sharp fa-thin fa-at"></i>
                            <a href="mailto:h.hovhannisyan@smartshippings.com">h.hovhannisyan@smartshippings.com</a>
                        </li>
                    </ul>
                    <ul class="social-icons px-0 d-flex justify-content-start gap-2">
                        <li>
                            <a href="https://www.facebook.com/smartshippings/">
                                <i class='bx bxl-facebook'></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/smart.shippings/">
                                <i class='bx bxl-twitter' ></i>
                            </a>
                        </li>
                        </li>
                        <li>
                            <a href="https://am.linkedin.com/company/smartshippings">
                                <i class='bx bxl-linkedin' ></i>
                            </a>
                        </li>
                        <li>
                            <a href="mailto:info@smartshippings.com">
                                <i class='bx bx-envelope'></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="footer-serv col-lg-3 col-md-6" >
                    <h6>
                        <?= $GLOBALS['text']['__SERVICES__'] ?>
                    </h6>
                    <ul class="px-0">
                        <li>
                            <a href="/airfreght">
                                <?= $GLOBALS['text']['Air_Freight_'] ?>
                            </a>
                        </li>
                        <li>
                            <a href="/seafreght">
                                <?= $GLOBALS['text']['Sea_Freight_'] ?>
                            </a>
                        </li>
                        <li>
                            <a href="/roadfreght">
                                <?= $GLOBALS['text']['Road_Freight_'] ?>
                            </a>
                        </li>
                        <li>
                            <a href="/railfreght">
                                <?= $GLOBALS['text']['Rail_Freight_']?>
                        </li>
                        <li>
                            <a href="/customsbrokerage">
                                <?= $GLOBALS['text']['Customs_Brokerag_'] ?>
                            </a>
                        </li>
                        <li>
                            <a href="/cargoinsurance">
                                <?= $GLOBALS['text']['Cargo_Insurance_'] ?>
                            </a>
                        </li>
                        <li>
                            <a href="warehousing">
                                <?= $GLOBALS['text']['Air_Freight_'] ?>
                            </a>
                        </li>
                        <li>
                            <a href="/projectlogistics">
                                <?= $GLOBALS['text']['Warehousing&_Distribution_'] ?>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="footer-about-us col-lg-3 col-md-6">
                    <h6>
                        <?= $GLOBALS['text']['__COMPANY__'] ?>
                    </h6>
                    <ul>
                        <li>
                            <a href="/about">
                                <?= $GLOBALS['text']['About_Us_Footer'] ?>
                            </a>
                        </li>
                        <li>
                            <a href="/news">
                                <?= $GLOBALS['text']['News_Footer'] ?>
                            </a>
                        </li>
                        <li>
                            <a href="gallery">
                                <?= $GLOBALS['text']['Gallery_Footer'] ?>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="footer-subcribe col-lg-3 col-md-6">
                    <h6>
                        <?= $GLOBALS['text']['SUBSCRIBE__'] ?>
                    </h6>
                    <p>
                     <?= @$GLOBALS['text']['Sign_Up_to'] ?>
                    </p>
                    <form class="d-flex flex-column align-items-start">
                        <input class="w-100"  placeholder="<?= $GLOBALS['text']['Enter_your_email'] ?>">
                        <button  type="submit">
                            <?= $GLOBALS['text']['Sign_Up_'] ?>
                        </button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class=" footer-con-copyright col-lg-12">
                    <p>
                        <?= $GLOBALS['text']['Copyright_Expeditor_'] ?>
                    </p>
                </div>
            </div>
        </div>
    </footer>

<?php }  ?>
       <?php 
        if($_COOKIE['language'] == "am") {
        ?>
            <script>
                (function(w,d,u){
                    var s=d.createElement('script');
                    s.async=true;
                    s.src=u+'?'+(Date.now()/60000|0);
                    var h=d.getElementsByTagName('script')[0];
                    h.parentNode.insertBefore(s,h);
                })(window,document,'https://cdn-ru.bitrix24.ru/b27778314/crm/site_button/loader_6_m4suvh.js');
            </script>
        <?php 
        } elseif ($_COOKIE['language'] == 'ru') {
        ?>
            <script>
                (function(w,d,u){
                    var s=d.createElement('script');
                    s.async=true;
                    s.src=u+'?'+(Date.now()/60000|0);
                    var h=d.getElementsByTagName('script')[0];
                    h.parentNode.insertBefore(s,h);
                })(window,document,'https://cdn-ru.bitrix24.ru/b27778314/crm/site_button/loader_2_muyflr.js');
            </script>
        <?php 
        } elseif ($_COOKIE['language'] == 'en') {
        ?>
            <script>
                (function(w,d,u){
                    var s=d.createElement('script');
                    s.async=true;
                    s.src=u+'?'+(Date.now()/60000|0);
                    var h=d.getElementsByTagName('script')[0];
                    h.parentNode.insertBefore(s,h);
                })(window,document,'https://cdn-ru.bitrix24.ru/b27778314/crm/site_button/loader_4_1bahbi.js');
            </script>
        <?php 
        }
        ?>


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
