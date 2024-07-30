<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Html;
use yii\helpers\Url;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, maximum-scale=1, initial-scale=1']);//, shrink-to-fit=no
//$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
//$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
$lan_imgs = [];
$lan_imgs['hy'] = '/../images/hy-img.png';
$lan_imgs['ru'] = '/../images/ru_RU.png';
$lan_imgs['en'] = '/../images/en_US.png';
$lan_imgs['text']['hy'] = 'Armenian';
$lan_imgs['text']['ru'] = 'Russian';
$lan_imgs['text']['en'] = 'English';

$controller = Yii::$app->controller->id;
$action = Yii::$app->controller->action->id;
if(!@$_COOKIE['language']){
    $_COOKIE['language'] = 'hy';
}
switch (@$_COOKIE['language']) {
    case 'en':
        $regionCode = 'US';
        $placeName = 'New York';
        break;
    case 'hy':
        $regionCode = 'AM';
        $placeName = 'Yerevan';
        break;
    case 'ru':
        $regionCode = 'RU';
        $placeName = 'Moscow';
        break;
    default:
        $regionCode = 'AM';
        $placeName = 'Yerevan';
        break;
}
$meteRegion = '<meta name="geo.region" content="' . $regionCode . '">';
$metePName = '<meta name="geo.placename" content="' . $placeName . '">';

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?></title>

    <?= $meteRegion ?>
    <?= $metePName ?>
    <meta name="description" lang="<?= $_COOKIE['language'] ?>" content="Welcome to SmartShipping, a leading logistics company providing reliable transportation, warehousing, and supply chain solutions. We specialize in warehouseing, shipping, rail, road, sea , offering efficient delivery, cost-effective storage, and streamlined logistics management. Contact us today to optimize your supply chain and enhance your business operations.">
    <meta name="keywords" content="SmartShipping, logistics, transportation, warehousing, supply chain, shipping, freight, rail, cargo, delivery, logistics services">

    <meta property="og:title" content="SmartShipping">
    <meta property="og:description" content="Ваше мета-описание">
    <meta property="og:image" content="../x/SmartShipping_s_logo.png">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.facebook.com/smartshippings/">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="SmartShipping">
    <meta name="twitter:description" content="Welcome to SmartShipping, a leading logistics company providing reliable transportation, warehousing, and supply chain solutions. We specialize in warehousing, shipping, rail, road, sea , offering efficient delivery, cost-effective storage, and streamlined logistics management. Contact us today to optimize your supply chain and enhance your business operations.">
    <meta name="twitter:image" content="x.png">

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
                        <img src="/../<?= $lan_imgs[$_COOKIE['language']]  ?>" alt="">
                        <span> <?= $lan_imgs['text'][$_COOKIE['language']]  ?></span>
                    </div>
                </div>
                <div class="lang-list  z-3">
                    <div class="lang-item selected">
                        <div class="lang-item-child d-flex justify-content-between align-items-center gap-1">
                            <a href="<?= Yii::$app->urlManager->createUrl('switch-language') ?>?lang=en">
                                <img src="/../images/en_US.png" alt="">
                                <span>English</span>
                            </a>
                        </div>
                    </div>
                    <div class="lang-item">
                        <div  class="lang-item-child d-flex justify-content-between align-items-center gap-1">
                            <a href="<?= Yii::$app->urlManager->createUrl('switch-language') ?>?lang=am" style="display: contents;">
                                <img src="/../images/hy-img.png" width="50 " alt="">
                                <span>Armenian</span>
                            </a>
                        </div>
                    </div>
                    <div class="lang-item">
                        <div  class="lang-item-child d-flex justify-content-between align-items-center gap-1">
                            <a href="<?= Yii::$app->urlManager->createUrl('switch-language') ?>?lang=ru" style="display: contents;">
                                <img src="/../images/ru_RU.png" width="50" alt="">
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
    <div class="search-up d-flex align-items-center  position-relative" id="searchUpForm" style="overflow:unset !important;">
        <div class="container ">
            <form class="input-group form-search w-50 my-3 m-auto d-flex justify-content-center">
                <input type="text" class="input-search w-100 p-2 border-0 text-white" placeholder="<?= @$GLOBALS['text']['Search'] ?>"  aria-describedby="button-addon2">
                <button class="submit-search border-0 bg-transparent " type="submit" id="button-addon2"><i class='bx bx-search'></i></button>

            </form>
        </div>
    </div>
    <div class="urlsInfo position-absolute d-none" style="padding: 40px;width: 40%;height: max-content;background: white;top: 60px;left: 30%;z-index: 2;margin: auto;}">
    </div>
    <nav>
        <div class="nav-up">
            <div class="container d-flex">
                <div class=" d-flex align-items-center justify-content-start pt-0 ">
                    <ul class="contact-info d-flex list-unstyled" >
                        <li><?= @$GLOBALS['text']['Phone__'] ?>:
                                <a class="text-decoration-none" href="tel:+374 91 919122"> +374 91 919122</a>
                        </li>
                        <li><?= @$GLOBALS['text']['Email__'] ?>:
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
                            <img src="/../images/smart-logo.png" alt="logo">
                        </a>
                    </div>
                    <div class="navbar-search">
                        <ul class="navbar d-flex" style="<?php if ($_COOKIE['language'] == 'hy') { echo "gap: 20px"; }?>" >

                            <li class="nav-item d-flex align-items-center">
                                <a class="nav-link <?= $action === 'services' ? 'active-linkPage' : '' ?>" href="<?= Yii::$app->urlManager->createUrl('services') ?>/<?= $_COOKIE['language'] ?>"><?= @$GLOBALS['text']['__SERVICES__'] ?>
                                </a>
                                <i class='bx bx-chevron-down'></i>

                                <div class="drop-div <?= $_COOKIE['language'] ?>">
                                    <ul class="drop-menu">
                                        <li class="drop-item" >
                                            <a class="drop-link" href="#"
                                                <?php if ($_COOKIE['language'] == 'en') {
                                                    echo "padding-right: 30px !important";
                                                } ?>>
                                                <?= @$GLOBALS['text']['Freight_Forwarding_'] ?>
                                                <i class='bx bx-chevron-right'></i>
                                            </a>

                                            <div class="drop-div-2">
                                                <ul class="drop-menu-2">
                                                    <li class="drop-item-2">
                                                        <a href="<?= Yii::$app->urlManager->createUrl('airfreght') ?>/<?= $_COOKIE['language'] ?>" class="drop-link-2">
                                                            <?= @$GLOBALS['text']['Air_Freight_'] ?>
                                                        </a>
                                                    </li>
                                                    <li class="drop-item-2 ">
                                                        <a href="<?= Yii::$app->urlManager->createUrl('seafreght') ?>/<?= $_COOKIE['language'] ?>" class="drop-link-2">
                                                            <?= @$GLOBALS['text']['Sea_Freight_'] ?>
                                                        </a>
                                                    </li>
                                                    <li class="drop-item-2">
                                                        <a href="<?= Yii::$app->urlManager->createUrl('roadfreght') ?>/<?= $_COOKIE['language'] ?>" class="drop-link-2">
                                                            <?= @$GLOBALS['text']['Road_Freight_'] ?>
                                                        </a>
                                                    </li>

                                                    
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="drop-item">
                                            <a class="drop-link" href="#" style="padding-right: 2px; <?php if (@$_COOKIE['language'] == 'ru'){echo "padding-right: 55px";} {
                                                // code...
                                            } ?>">
                                                <?= @$GLOBALS['text']['Value_added_Services'] ?>
                                                <i class='bx bx-chevron-right'></i>
                                            </a>

                                            <div class="drop-div-3">
                                                <ul class="drop-menu-3">
                                                    <li class="drop-item-3 ">
                                                        <a href="<?= Yii::$app->urlManager->createUrl('customsbrokerage') ?>/<?= $_COOKIE['language'] ?>" class="drop-link-3">
                                                            <?= @$GLOBALS['text']['Customs_Brokerag_'] ?>
                                                        </a>
                                                    </li>
                                                    <li class="drop-item-3 ">
                                                        <a href="<?= Yii::$app->urlManager->createUrl('cargoinsurance') ?>/<?= $_COOKIE['language'] ?>" class="drop-link-3">
                                                            <?= @$GLOBALS['text']['Cargo_Insurance_'] ?>
                                                        </a>
                                                    </li>
                                                    <li class="drop-item-3 ">
                                                        <a href="<?= Yii::$app->urlManager->createUrl('warehousing') ?>/<?= $_COOKIE['language'] ?>" class="drop-link-3">
                                                            <?= @$GLOBALS['text']['Warehousing&_Distribution_'] ?>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="drop-item">
                                            <a class="drop-link" href="<?= Yii::$app->urlManager->createUrl('projectlogistics') ?>/<?= $_COOKIE['language'] ?>">
                                                <?= @$GLOBALS['text']['Project_Logistics_'] ?>
                                            </a>
                                        </li>


                                        <li class="drop-item">
                                            <a class="drop-link" href="<?= Yii::$app->urlManager->createUrl('useful') ?>/<?= $_COOKIE['language'] ?>">
                                                <?= @$GLOBALS['text']['__USEFUL__INFORMATION__'] ?>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= $action === 'about' ? 'active-linkPage' : '' ?>" href="<?= Yii::$app->urlManager->createUrl('about') ?>/<?= $_COOKIE['language'] ?>">
                                    <?= @$GLOBALS['text']['ABOUT_US'] ?>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= $action === 'news' ? 'active-linkPage' : '' ?>" href="<?= Yii::$app->urlManager->createUrl('news') ?>/<?= $_COOKIE['language'] ?>">
                                    <?= @$GLOBALS['text']['__NEWS__'] ?>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= $action === 'gallery' ? 'active-linkPage' : '' ?>" href="<?= Yii::$app->urlManager->createUrl('gallery') ?>/<?= $_COOKIE['language'] ?>">
                                    <?= @$GLOBALS['text']['GALLERY_'] ?>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= $action === 'contact' ? 'active-linkPage' : '' ?>" href="<?= Yii::$app->urlManager->createUrl('contact') ?>/<?= $_COOKIE['language'] ?>">
                                    <?= @$GLOBALS['text']['CONTACT_US_'] ?>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= $action === 'shippment' ? 'active-linkPage' : '' ?>" href="<?= Yii::$app->urlManager->createUrl('shippment') ?>/<?= $_COOKIE['language'] ?>">
                                    <?= @$GLOBALS['text']['TRACK_YOUR_SHIPPMENT'] ?>
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
                    <a class="nav-mob-link" href="<?= Yii::$app->urlManager->createUrl('services') ?>/<?= $_COOKIE['language'] ?>">
                        <?= @$GLOBALS['text']['__SERVICES__'] ?>
                    </a>
                    <div class="drop-mob-div">
                        <ul class="drop-mob-menu">
                            <li class="drop-mob-item">
                                <a class="drop-mob-link" href="#">
                                    <i class='bx bx-chevron-right'></i>
                                    <?= @$GLOBALS['text']['Freight_Forwarding_'] ?>
                                </a>
                                <div class="drop-mob-div-2">
                                    <ul class="drop-mob-menu-2">
                                        <li class="drop-mob-item-2">
                                            <a href="<?= Yii::$app->urlManager->createUrl('airfreght') ?>/<?= $_COOKIE['language'] ?>" class="drop-mob-link-2">
                                                <i class='bx bx-chevron-right'></i>
                                                <?= @$GLOBALS['text']['Air_Freight_'] ?>
                                            </a>
                                        </li>
                                        <li class="drop-mob-item-2 ">
                                            <a href="<?= Yii::$app->urlManager->createUrl('seafreght') ?>/<?= $_COOKIE['language'] ?>" class="drop-mob-link-2">
                                                <i class='bx bx-chevron-right'></i>
                                                <?= @$GLOBALS['text']['Sea_Freight_'] ?>
                                            </a>
                                        </li>
                                        <li class="drop-mob-item-2">
                                            <a href="<?= Yii::$app->urlManager->createUrl('roadfreght') ?>/<?= $_COOKIE['language'] ?>" class="drop-mob-link-2">
                                                <i class='bx bx-chevron-right'></i>
                                                <?= @$GLOBALS['text']['Road_Freight_'] ?>
                                            </a>
                                        </li>
                                    </ul> 
                                </div>
                            </li>
                            <li class="drop-mob-item ">
                                <a class="drop-mob-link" href="#">
                                    <i class='bx bx-chevron-right'></i>
                                    <?= @$GLOBALS['text']['Value_added_Services'] ?>
                                </a>
                                <div class="drop-mob-div-3">
                                    <ul class="drop-mob-menu-3">
                                        <li class="drop-mob-item-3 ">
                                            <a href="<?= Yii::$app->urlManager->createUrl('customsbrokerage') ?>/<?= $_COOKIE['language'] ?>" class="drop-mob-link-3">
                                                <i class='bx bx-chevron-right'></i>
                                                <?= @$GLOBALS['text']['Customs_Brokerag_'] ?>
                                            </a>
                                        </li>
                                        <li class="drop-mob-item-3 ">
                                            <a href="<?= Yii::$app->urlManager->createUrl('cargoinsurance') ?>/<?= $_COOKIE['language'] ?>" class="drop-mob-link-3">
                                                <i class='bx bx-chevron-right'></i>
                                                <?= @$GLOBALS['text']['Cargo_Insurance_'] ?>
                                            </a>
                                        </li>
                                        <li class="drop-mob-item-3">
                                            <a href="<?= Yii::$app->urlManager->createUrl('warehousing') ?>/<?= $_COOKIE['language'] ?>" class="drop-mob-link-3">
                                                <i class='bx bx-chevron-right'></i>
                                                <?= @$GLOBALS['text']['Warehousing&_Distribution_'] ?>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="drop-mob-item d-flex ">
                                <a class="drop-mob-link" href="<?= Yii::$app->urlManager->createUrl('projectlogistics') ?>/<?= $_COOKIE['language'] ?>">
                                    <i class='bx bx-chevron-right'></i>
                                    <?= @$GLOBALS['text']['Project_Logistics_'] ?>
                                </a>
                            </li>
                            <li class="drop-mob-item d-flex ">
                                <a class="drop-mob-link" href="<?= Yii::$app->urlManager->createUrl('useful') ?>/<?= $_COOKIE['language'] ?>">
                                    <i class='bx bx-chevron-right'></i>
                                    <?= @$GLOBALS['text']['__USEFUL__INFORMATION__'] ?>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-mob-item">
                    <a class="nav-mob-link" href="<?= Yii::$app->urlManager->createUrl('about') ?>/<?= $_COOKIE['language'] ?>">
                        <?= @$GLOBALS['text']['ABOUT_US'] ?>
                    </a>
                </li>
                <li class="nav-mob-item">
                    <a class="nav-mob-link" href="<?= Yii::$app->urlManager->createUrl('news') ?>/<?= $_COOKIE['language'] ?>">
                        <?= @$GLOBALS['text']['__NEWS__'] ?>
                    </a>
                </li>
                <li class="nav-mob-item">
                    <a class="nav-mob-link" href="<?= Yii::$app->urlManager->createUrl('gallery') ?>/<?= $_COOKIE['language'] ?>">
                        <?= @$GLOBALS['text']['GALLERY_'] ?>
                    </a>
                </li>
                <li class="nav-mob-item">
                    <a class="nav-mob-link" href="<?= Yii::$app->urlManager->createUrl('contact') ?>/<?= $_COOKIE['language'] ?>">
                        <?= @$GLOBALS['text']['CONTACT_US_'] ?>
                    </a>
                </li>
                <li class="nav-mob-item">
                    <a class="nav-mob-link" href="<?= Yii::$app->urlManager->createUrl('shippment') ?>/<?= $_COOKIE['language'] ?>">
                        <?= @$GLOBALS['text']['TRACK_YOUR_SHIPPMENT'] ?>
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
                                <h1 data-aos="fade-up" data-aos-duration="1000" class="first-h1 " style="text-transform:uppercase;">
                                    <?= @$GLOBALS['text']['new_ACCELERATE_'] ?>
                                </h1>
                                <h2 data-aos="fade-up" data-aos-duration="1500">
                                    <?= @$GLOBALS['text']['new_YOUR_FREGHIT_WITH'] ?>
                                </h2>
                                <h1 data-aos="fade-up" data-aos-duration="2000" class="second-h1">
                                    <?= @$GLOBALS['text']['__new_Title_Air_Freight_'] ?>
                                </h1>
                                <p data-aos="fade-up" data-aos-duration="2000">
                                    <?= @$GLOBALS['text']['Trust_us_your_'] ?>
                                </p>
                                <a href="<?= Yii::$app->urlManager->createUrl('airfreght') ?>/<?= $_COOKIE['language'] ?>">
                                    <button data-aos="fade-right" data-aos-duration="2500" type="button" class="btn-lg">
                                        <?= @$GLOBALS['text']['Read_More_'] ?>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" style="background-image: url(../images/header-slide-img2.jpg);">
                        <div class="container">
                            <div class="header-title header-title-2 d-flex flex-column align-items-start text-white ">
                                <h1>
                                    <?= @$GLOBALS['text']['Sea_Freight_'] ?>
                                </h1>
                                <h2>
                                    <?= @$GLOBALS['text']['Global_Solutions__'] ?>
                                </h2>
                                <p class=" pt-0 text-start">
                                    <?= @$GLOBALS['text']['Are_you_looking'] ?>
                                </p>
                                <a href="<?= Yii::$app->urlManager->createUrl('seafreght') ?>/<?= $_COOKIE['language'] ?>">
                                    <button type="button" class="btn-lg ">
                                        <?= @$GLOBALS['text']['Read_More_'] ?>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" style="background-image: url(../images/header-slide-img3.jpg);">
                        <div class="container">
                            <div class="header-title header-title-3 d-flex flex-column align-items-end  text-white ">
                                <h1>
                                    <?= @$GLOBALS['text']['Road_Freight_'] ?>
                                </h1>
                                <h2>
                                    <?= @$GLOBALS['text']['Shortens_Transit__'] ?>
                                </h2>
                                <p class="text-end pt-0 mt-0">
                                    <?= @$GLOBALS['text']['Choose_our_road'] ?>
                                </p>
                                <a href="<?= Yii::$app->urlManager->createUrl('roadfreght') ?>/<?= $_COOKIE['language'] ?>">
                                    <button type="button" class="btn-lg ">
                                        <?= @$GLOBALS['text']['Read_More_'] ?>
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
                    <h1><?= @$this->params['title'] ?> </h1>
                    <p><a href="<?= Yii::$app->urlManager->createUrl('"') ?>/<?= $_COOKIE['language'] ?>"><?= @$GLOBALS['text']['__home__'] ?></a>
                        <?php if(isset($this->params) && isset($this->params['second'])){ ?>
                            / <a href="<?= @$this->params['href']  ?>"><span class="text-uppercase"> <?= @$this->params['second'] ?></span></a>
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
                        <?= @$GLOBALS['text']['Contact_Us_'] ?>
                    </h6>
                    <p>
                        <?= @$GLOBALS['text']['Smart_Shippings_LLC_'] ?><br>
                        <?= @$GLOBALS['text']['Address:__'] ?>
                        <?= @$GLOBALS['text']['Working_days:_'] ?><br>
                        <?= @$GLOBALS['text']['9.00_am_to_'] ?>
                    </p>
                    <ul class="footer-con-info">
                        <li class="phone-info">
                            <i class="bi bi-telephone"></i>
                            <a href="tel:+374 91 919122">+374 91 919122</a>
                        </li>
                        <li class="phone-info">
                            <i class="bi bi-telephone"></i>
                            <a href="tel:+374 91 516231"> +374 91 516231</a>
                        </li>
                        <li class="email-info">
                            <i class="fa-sharp fa-thin fa-at"></i>
                            <a href="mailto:h.hovhannisyan@smartshippings.com">h.hovhannisyan@smartshippings.com</a>
                        </li>
                        <li class="email-info">
                            <i class="fa-sharp fa-thin fa-at"></i>
                            <a  href="mailto:info@smartshippings.com"> info@smartshippings.com</a>
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
                                <i class='bx bxl-instagram'></i>
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
                        <?= @$GLOBALS['text']['__SERVICES__'] ?>
                    </h6>
                    <ul class="px-0">
                        <li>
                            <a href="<?= Yii::$app->urlManager->createUrl('airfreght') ?>/<?= $_COOKIE['language'] ?>">
                                <?= @$GLOBALS['text']['Air_Freight_'] ?>
                            </a>
                        </li>
                        <li>
                            <a href="<?= Yii::$app->urlManager->createUrl('seafreght') ?>/<?= $_COOKIE['language'] ?>">
                                <?= @$GLOBALS['text']['Sea_Freight_'] ?>
                            </a>
                        </li>
                        <li>
                            <a href="<?= Yii::$app->urlManager->createUrl('roadfreght') ?>/<?= $_COOKIE['language'] ?>">
                                <?= @$GLOBALS['text']['Road_Freight_'] ?>
                            </a>
                        </li>

                        <li>
                            <a href="<?= Yii::$app->urlManager->createUrl('customsbrokerage') ?>/<?= $_COOKIE['language'] ?>">
                                <?= @$GLOBALS['text']['Customs_Brokerag_'] ?>
                            </a>
                        </li>
                        <li>
                            <a href="<?= Yii::$app->urlManager->createUrl('cargoinsurance') ?>/<?= $_COOKIE['language'] ?>">
                                <?= @$GLOBALS['text']['Cargo_Insurance_'] ?>
                            </a>
                        </li>
                        <li>
                            <a href="warehousing">
                                <?= @$GLOBALS['text']['Air_Freight_'] ?>
                            </a>
                        </li>
                        <li>
                            <a href="<?= Yii::$app->urlManager->createUrl('projectlogistics') ?>/<?= $_COOKIE['language'] ?>">
                                <?= @$GLOBALS['text']['Warehousing&_Distribution_'] ?>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="footer-about-us col-lg-3 col-md-6">
                    <h6>
                        <?= @$GLOBALS['text']['__COMPANY__'] ?>
                    </h6>
                    <ul>
                        <li>
                            <a href="<?= Yii::$app->urlManager->createUrl('about') ?>/<?= $_COOKIE['language'] ?>">
                                <?= @$GLOBALS['text']['About_Us_Footer'] ?>
                            </a>
                        </li>
                        <li>
                            <a href="<?= Yii::$app->urlManager->createUrl('news') ?>/<?= $_COOKIE['language'] ?>">
                                <?= @$GLOBALS['text']['News_Footer'] ?>
                            </a>
                        </li>
                        <li>
                            <a href="<?= Yii::$app->urlManager->createUrl('gallery') ?>/<?= $_COOKIE['language'] ?>">
                                <?= @$GLOBALS['text']['Gallery_Footer'] ?>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="footer-subcribe col-lg-3 col-md-6">
                    <h6>
                        <?= @$GLOBALS['text']['SUBSCRIBE__'] ?>
                    </h6>
                    <p>
                        <?= @@$GLOBALS['text']['Sign_Up_to'] ?>
                    </p>
                    <form class="d-flex flex-column align-items-start">
                        <input class="w-100"  placeholder="<?= @$GLOBALS['text']['Enter_your_email'] ?>">
                        <button  type="submit">
                            <?= @$GLOBALS['text']['Sign_Up_'] ?>
                        </button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class=" footer-con-copyright col-lg-12">
                    <a href="https://codewave.am/" target="_blank">
                        <p>
                            <?= @$GLOBALS['text']['Copyright_Expeditor_'] ?>
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </footer>

<?php }  ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!--<script  src="../script.js"></script>-->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
<?php $this->endBody() ?>
<?php
if($_COOKIE['language'] == "hy") {
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

</body>
</html>
<?php $this->endPage() ?>