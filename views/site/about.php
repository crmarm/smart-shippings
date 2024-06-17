<?php $this->params['title'] = @$GLOBALS['text']['About_Us_Title']; ?>
<a  data-aos="fade-right" data-aos-duration="2000" class="go-to-up" href="#top">
    <button >
        <i class="bi bi-chevron-up"></i>
    </button>
</a>
<section class="who-we-are">
    <div class="container" >
        <div class="who-we-are-sec d-flex justify-content-between">
            <div class="who-we-are-dis w-50">
                <h2>
                    <?= @$GLOBALS['text']['Who_We_Are_'] ?>
                </h2>
                <p>
                    <?= @$GLOBALS['text']['Our_company_is_'] ?>
                </p>
                <p>
                    <?= @$GLOBALS['text']['Our_clients_also_'] ?>
                </p>
                <p>
                    <?= @$GLOBALS['text']['Trust_us__'] ?>
                </p>
                <p>
                    <?= @$GLOBALS['text']['Our_mission_is_to_provide_'] ?>
                </p>
            </div>
            <div class="who-we-are-img">
                <img  src="../images/aboutImg.png" alt="">
            </div>
        </div>
    </div>
    <div class="who-we-are-img-2 ">
        <img  src="../images/aboutImg.png" alt="">
    </div>
</section>

<section class="Our-Advantages d-flex align-items-between">
    <div class="container">
        <div class="advantages-sec d-flex justify-content-start  ">
            <div class="title-div">
                <h6>
                    <?= @$GLOBALS['text']['WHY_CHOOSE_US_'] ?>
                </h6>
                <h2>
                    <?= @$GLOBALS['text']['Our_Advantages__'] ?>
                </h2>
            </div>
            <div class="advanList d-flex align-items-start">
                <div>
                    <div class="advanItem ">
                        <i class="fas fa-hand-holding-usd fs-1 text-white"></i>
                        <p>
                           <?= @$GLOBALS['text']['cost_effective__'] ?>
                        </p>
                    </div>
                    <div class="advanItem">
                        <i class="fas fa-user-shield fs-1 text-white"></i>
                        <p>
                            <?= @$GLOBALS['text']['safe_and_secure_'] ?>
                        </p>
                    </div>
                </div>
                <div>
                    <div class="advanItem">
                        <i class="fas fa-shipping-fast fs-1 text-white"></i>
                        <p>
                            <?= @$GLOBALS['text']['fast_and_convenient_'] ?>
                        </p>
                    </div>
                    <div class="advanItem">
                        <i class="fas fa-headset fs-1 text-white"></i>
                        <p>
                            <?= @$GLOBALS['text']['high_quality_service_'] ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-careers">
    <div class="container">
        <div class="about-careers-sec d-flex justify-content-between">
            <div class="careers-dis">
                <h6 >
                    <?= @$GLOBALS['text']['CAREERS__'] ?>
                </h6>
                <h2>
                    <?= @$GLOBALS['text']['Interested_join'] ?>
                </h2>
                <p>
                    <?= @$GLOBALS['text']['Would_you_like'] ?>
                </p>
                <p>
                    <?= @$GLOBALS['text']['Then_hurry_up_to'] ?>
                </p>
                <p>
                    <?= @$GLOBALS['text']['If_we_have_free_vacancies'] ?>
                </p>
            </div>
            <div class="careers-form">
                <form class="d-flex flex-column gap-3" method="post">
                    <div class="name-lastname d-flex gap-3">
                        <input type="text" name="name" placeholder="<?= @$GLOBALS['text']['first-name'] ?>">
                        <input type="text" name="lastName" placeholder="<?= @$GLOBALS['text']['last-name'] ?>">
                    </div>
                    <div class="email">
                        <input type="email" name="email" required placeholder="<?= @$GLOBALS['text']['email'] ?>">
                    </div>
                    <div class="department">
                        <input type="text" name="text" placeholder="<?= @$GLOBALS['text']['department'] ?>">
                    </div>
                    <div class="message">
                        <textarea name="message" rows="4" placeholder="<?= @$GLOBALS['text']['Message'] ?>"></textarea>
                    </div>
                    <button type="submit">
                        <?= @$GLOBALS['text']['Submit'] ?>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="Contact-Us about-page-contact-us">
    <div class="container">
        <div class="contact-sec  d-flex justify-content-between">
            <div class="contact-dis " >
                <h3>
                    <?= @$GLOBALS['text']['Let_Us_Help'] ?>
                </h3>
                <p>
                    <?= @$GLOBALS['text']['Please_feel__'] ?>
                </p>
            </div>
            <div class="contact-info">
                <button>
                    <a href="<?= Yii::$app->urlManager->createUrl('contact')  ?>/<?= $_COOKIE['language'] ?>">
                        <?= @$GLOBALS['text']['Contact_Us_Now_'] ?>
                    </a>
                </button>
                <p ><?= @$GLOBALS['text']['Or_Call_'] ?> <span>+374 91 919122</span></p>
            </div>
        </div>
    </div>
</section>
