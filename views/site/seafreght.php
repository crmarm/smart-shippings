<?php $this->params['title'] = @$GLOBALS['text']['Sea_Freight_'] ; ?>
<?php $this->params['second'] =  @$GLOBALS['text']['__SERVICES__']; ?>
<?php $this->params['href'] =  Yii::$app->urlManager->createUrl('services')  . '/' . $_COOKIE['language'] ?>

<a  data-aos="fade-right" data-aos-duration="2000" class="go-to-up" href="#top">
    <button >
        <i class="bi bi-chevron-up"></i>
    </button>
</a>
<section class="Services-drop-pages ">
    <div class="container">
        <div class="services-drop-pages-sec d-flex gap-4">
            <div class="border-div">
                <div class="first-div">
                    <div class="img-div">
                        <img src="../images/Sea-Freight-img.jpg" alt="">
                    </div>
                    <div class="p-under-img">
                        <p>
                           <?= @$GLOBALS['text']['Smart_Shippings_is_'] ?>
                        </p>
                        <p>
                           <?= @$GLOBALS['text']['__sea__text__2__'] ?>
                        </p>
                    </div>
                    <div class="green-box text-white d-flex justify-content-between ">
                        <div class="green-box-item">
                            <h5>
                                <?= @$GLOBALS['text']['Easy_&_Convenient__'] ?>
                            </h5>
                            <p>
                                <?= @$GLOBALS['text']['You’ll_find__'] ?>
                            </p>
                        </div>
                        <div class="green-box-item">
                            <h5>
                                <?= @$GLOBALS['text']['Save_Secure'] ?>
                            </h5>
                            <p>
                                <?= @$GLOBALS['text']['You_benefit_from_'] ?>
                            </p>
                        </div>
                    </div>
                    <div class="services-include">
                        <h4>
                        <?= @$GLOBALS['text']['Our_Sea_Freight_'] ?>
                        </h4>
                        <ul class="px-0">
                            <li class="d-flex align-items-center gap-4">
                                <i class="bi bi-check-circle"></i>
                                <p>
                                    <?= @$GLOBALS['text']['__sea_li_t_1__'] ?>
                                </p>
                            </li>
                            <li class="d-flex align-items-center gap-4">
                                <i class="bi bi-check-circle"></i>
                                <p>
                                    <?= @$GLOBALS['text']['__sea_li_t_2__'] ?>
                                </p>
                            </li>
                            <li class="d-flex align-items-center gap-4">
                                <i class="bi bi-check-circle"></i>
                                <p>
                                    <?= @$GLOBALS['text']['__sea_li_t_3__'] ?>
                                </p>
                            </li>

                            <li class="d-flex align-items-center gap-4">
                                <i class="bi bi-check-circle"></i>
                                <p>
                                    <?= @$GLOBALS['text']['__sea_li_t_4__'] ?>
                                </p>
                            </li>
                            <li class="d-flex align-items-center gap-4">
                                <i class="bi bi-check-circle"></i>
                                <p>
                                    <?= @$GLOBALS['text']['__sea_li_t_5__'] ?>
                                </p>
                            </li>
                            <li class="d-flex align-items-center gap-4">
                                <i class="bi bi-check-circle"></i>
                                <p>
                                    <?= @$GLOBALS['text']['__sea_li_t_6__'] ?>
                                </p>
                            </li>

                        </ul>
                        <button class="border-0"  type="submit">
                            <a href="<?= Yii::$app->urlManager->createUrl('contact')  ?>/<?= $_COOKIE['language'] ?>">
                                <?= $GLOBALS['text']['Contact_Us_Title'] ?>
                            </a>
                        </button>
                    </div>
                </div>
            </div>
            <div class="second-div">
                <h5>
                    <?= @$GLOBALS['text']['Contact-Us_Title'] ?>
                </h5>
                <h6>
                    <a href="#">
                        <?= @$GLOBALS['text']['Smart_Shippings_LLC_'] ?>
                    </a>
                </h6>
                <ul class="phone-email  px-0 gap-4">
                    <li class="phone-info">
                        <i class="bi bi-telephone"></i>
                        <a href="tel:+374 91 919122">+374 91 919122</a>
                    </li>
                    <li class="email-info">
                        <i class="fa-sharp fa-thin fa-at"></i>
                        <a href="mailto:h.hovhannisyan@smartshippings.com">h.hovhannisyan@smartshippings.com</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
