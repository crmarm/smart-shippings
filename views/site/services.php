<style>
    .hy .Services .iconsItem h5 {
        font-size: 18px;
        word-break: normal;
        word-wrap: normal;
    }
</style>
<?php $this->params['title'] = $GLOBALS['text']['Services_Title']; ?>
<a  data-aos="fade-right" data-aos-duration="2000" class="go-to-up" href="#top">
    <button >
        <i class="bi bi-chevron-up"></i>
    </button>
</a>
<section class="Our-Services-sec Services serv-page-first-sec">
    <div class="container">
        <div class="title-div">
            <h2>
                <?= $GLOBALS['text']['Services_Solution_'] ?>
            </h2>
            <p class="first-p" >
                <?= $GLOBALS['text']['We_Are_Always_Here'] ?>
            </p>
            <p class="second-p">
                <?= $GLOBALS['text']['You_Benefit_From'] ?>
            </p>
        </div>
        <div class=" iconsItems d-flex justify-content-evenly gap-4">
            <div class="iconsItem">
                <div class="iconsItemChild">
                    <div>
                        <i class="bi bi-airplane"></i>
                        <h5>
                            <?= $GLOBALS['text']['Air_Freight'] ?>
                        </h5>
                        <p>
                            <?= $GLOBALS['text']['Our_Air_'] ?>
                        </p>
                        <a href="<?= Yii::$app->urlManager->createUrl('airfreght') ?>/<?= $_COOKIE['language'] ?>" >
                            <?= $GLOBALS['text']['READ_MORE__'] ?>
                        </a>
                    </div>
                </div>
            </div>
            <div class="iconsItem">
                <div class="iconsItemChild">
                    <div>
                        <i class='bx bxs-ship'></i>
                        <h5>
                            <?= $GLOBALS['text']['Sea_Freight__'] ?>
                        </h5>
                        <p>
                            <?= $GLOBALS['text']['Our_Sea_'] ?>
                        </p>
                        <a href="<?= Yii::$app->urlManager->createUrl('seafreght') ?>/<?= $_COOKIE['language'] ?>">
                            <?= $GLOBALS['text']['READ_MORE__'] ?>
                        </a>
                    </div>
                </div>
            </div>
<!--            <div class="iconsItem  ">-->
<!--                <div class="iconsItemChild">-->
<!--                    <div>-->
<!--                        <i class='bx bx-train'></i>-->
<!--                        <h5>-->
<!--                            --><?php //= $GLOBALS['text']['Rail_Freight__'] ?>
<!--                        </h5>-->
<!--                        <p>-->
<!--                            --><?php //= $GLOBALS['text']['When_rail_'] ?>
<!--                        </p>-->
<!--                        <a href="--><?php //= Yii::$app->urlManager->createUrl('railfreght') ?><!--/--><?php //= $_COOKIE['language'] ?><!--">-->
<!--                            --><?php //= $GLOBALS['text']['READ_MORE__'] ?>
<!--                        </a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
            <div class="iconsItem ">
                <div class="iconsItemChild">
                    <div>
                        <i class="fa-solid fa-road"></i>
                        <h5>
                            <?= $GLOBALS['text']['Road_Freight_'] ?>
                        </h5>
                        <p>
                            <?= $GLOBALS['text']['Our_Road__'] ?>
                        </p>
                        <a href="<?= Yii::$app->urlManager->createUrl('roadfreght') ?>/<?= $_COOKIE['language'] ?>">
                            <?= $GLOBALS['text']['READ_MORE__'] ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="iconsItems d-flex justify-content-between   gap-4  pt-4">
            <div class=" iconsItem   ">
                <div class="iconsItemChild">
                    <div>
                        <i class="bi bi-cash-coin"></i>
                        <h5>
                            <?= $GLOBALS['text']['Customs_Brokerage__'] ?>
                        </h5>
                        <p>
                            <?= $GLOBALS['text']['Customs_Services_'] ?>
                        </p>
                        <a href="<?= Yii::$app->urlManager->createUrl('customsbrokerage') ?>/<?= $_COOKIE['language'] ?>" >
                            <?= $GLOBALS['text']['READ_MORE__'] ?>
                        </a>
                    </div>
                </div>
            </div>
            <div class="iconsItem">
                <div class="iconsItemChild">
                    <div>
                        <i class="bi bi-shield-check"></i>
                        <h5>
                            <?= $GLOBALS['text']['Cargo_Insurance_'] ?>
                        </h5>
                        <p>
                            <?= $GLOBALS['text']['Our_Cargo__'] ?>
                        </p>
                        <a href="<?= Yii::$app->urlManager->createUrl('cargoinsurance') ?>/<?= $_COOKIE['language'] ?>">
                            <?= $GLOBALS['text']['READ_MORE__'] ?>
                        </a>
                    </div>
                </div>
            </div>
            <div class="iconsItem  ">
                <div class="iconsItemChild">
                    <div>
                        <i class="bi bi-archive"></i>
                        <h5>
                            <?= $GLOBALS['text']['Warehousing__'] ?>
                        </h5>
                        <p>
                            <?= $GLOBALS['text']['Our_Warehousing__'] ?>
                        </p>
                        <a href="<?= Yii::$app->urlManager->createUrl('warehousing') ?>/<?= $_COOKIE['language'] ?>">
                            <?= $GLOBALS['text']['READ_MORE__'] ?>
                        </a>
                    </div>
                </div>
            </div>
            <div class="iconsItem  ">
                <div class="iconsItemChild">
                    <div>
                        <i class="bi bi-gear"></i>
                        <h5>
                            <?= $GLOBALS['text']['Project_Logistics_'] ?>
                        </h5>
                        <p>
                            <?= $GLOBALS['text']['Our_Project__'] ?>
                        </p>
                        <a href="<?= Yii::$app->urlManager->createUrl('projectlogistics') ?>/<?= $_COOKIE['language'] ?>">
                            <?= $GLOBALS['text']['READ_MORE__'] ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--<section class="brands">
    <div class="container">
        <div class="title-div">
            <h2>
                <?php /*= $GLOBALS['text']['Our_Partners'] */?>
            </h2>
        </div>
        <div class="swiper brandsSwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="/images/warehouswTrade-img.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="/images/brand-energobazic-img.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="/images/brand-computers-img.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="/images/brand-mukIt-img.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="/images/brand-WD-img.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="/images/warehouswTrade-img.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="/images/brand-energobazic-img.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="/images/brand-computers-img.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="/images/brand-mukIt-img.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="/images/brand-WD-img.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="/images/warehouswTrade-img.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="/images/brand-energobazic-img.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="/images/brand-computers-img.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="/images/brand-mukIt-img.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="/images/brand-WD-img.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="/images/brand-energobazic-img.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="/images/brand-bonPhram-img.png" alt="">
                </div>

            </div>
        </div>
    </div>
    <div class="swiper-button-next brands-swiper-arrow" style="padding-top: 38px;"></div>
    <div class="swiper-button-prev brands-swiper-arrow" style="padding-top: 38px;"></div>
</section>-->

<section class="Contact-Us ser-page-contact-us ">
    <div class="container">
        <div class=" contact-sec text-center ">
            <div class="contact-dis " >
                <h3>
                    <?= $GLOBALS['text']['Let_Us_Help'] ?>
                </h3>
                <p>
                    <?= $GLOBALS['text']['Please_feel__'] ?>
                </p>
            </div>
            <div class="contact-info   " >
                <button  type="submit">
                    <a href="<?= Yii::$app->urlManager->createUrl('quest-answer') ?>/<?= $_COOKIE['language'] ?>">
                        <?= $GLOBALS['text']['Get_a_Free_'] ?>
                    </a>
                </button>
                <button >
                    <a href="<?= Yii::$app->urlManager->createUrl('contact')  ?>/<?= $_COOKIE['language'] ?>">
                        <?= $GLOBALS['text']['Contact_Us_Now_'] ?>
                    </a>
                </button>
                <p ><?= $GLOBALS['text']['Or_Call_'] ?> <span>+374 91 919122</span></p>
            </div>
        </div>
    </div>
</section>



