<a  data-aos="fade-right" data-aos-duration="2000" class="go-to-up" href="#top">
    <button >
        <i class="bi bi-chevron-up"></i>
    </button>
</a>
<section class="Departure">
    <div class="container">
        <div class="Departure-div">
            <div class="first-div">
                <h2>
                    <?= @$GLOBALS['text']['From_Departure_'] ?>
                </h2>
                <p class="mb-3">
                    <?= @$GLOBALS['text']['Our_company_'] ?>
                </p>
                <p class="mb-3 second-p">
                    <?= @$GLOBALS['text']['Our_clients_'] ?>
                </p>
                <p class="mb-3">
                    <?= @$GLOBALS['text']['Want_to_know_'] ?>
                </p>
                <a href="/about">
                    <?= @$GLOBALS['text']['MORE_ABOUT_US_'] ?>
                </a>
            </div>
            <div class="second-div">
                <h5>
                    <?= @$GLOBALS['text']['Get_a_Free__'] ?>
                </h5>
                <p>
                    <?= @$GLOBALS['text']['Do_you_want_'] ?>
                </p>
                <a href="/quest-answer">
                    <button type="button">
                        <?= @$GLOBALS['text']['Start_a_Quote_'] ?>
                    </button>
                </a>
                <span class="licon-quote"></span>
            </div>
            <div class="third-div">
                <h5>
                    <?= @$GLOBALS['text']['Have_a_Question?'] ?>
                </h5>
                <p>
                    <?= @$GLOBALS['text']['Feel_free_'] ?>
                </p>
                <a href="/contact">
                    <button type="button">
                        <?= @$GLOBALS['text']['Contact_Us_'] ?>
                    </button>
                </a>
                <i class="bi bi-question-circle"></i>
            </div>
            <div class="fourth-div">
                <img src="../images/Departure-img.png" alt="">
            </div>
        </div>
    </div>
</section>
<section class="Our-Services-sec">
    <div class="container">
        <div class="Services">
            <div class="row title-div pb-4">
                <div class="col-lg-4">
                    <h6>
                        <?= @$GLOBALS['text']['WHAT_WE_OFFER_'] ?>
                    </h6>
                    <h2>
                        <?= @$GLOBALS['text']['Our_Services_'] ?>
                    </h2>
                </div>
                <div class="col-lg-8">
                    <p>
                        <?= @$GLOBALS['text']['We_are_always_'] ?>
                    </p>
                </div>
            </div>
            <div class=" iconsItems d-flex justify-content-between gap-4">
                    <div class="iconsItem" >
                        <div class="iconsItemChild">
                            <div>
                                <i class="bi bi-airplane"></i>
                                <h5>
                                    <?= @$GLOBALS['text']['Air_Freight'] ?>
                                </h5>
                                <p>
                                    <?= @$GLOBALS['text']['Our_Air_'] ?>
                                </p>
                                <a href="/airfreght" >
                                    <?= @$GLOBALS['text']['READ_MORE__'] ?>
                                </a>
                            </div>
                        </div>
                    </div>
                <div class="iconsItem  ">
                    <div class="iconsItemChild">
                        <div>
                            <i class='bx bxs-ship'></i>
                            <h5>
                                <?= @$GLOBALS['text']['Sea_Freight__'] ?>
                            </h5>
                            <p>
                                <?= @$GLOBALS['text']['Our_Sea_'] ?>
                            </p>
                            <a href="/seafreght">
                                <?= @$GLOBALS['text']['READ_MORE__'] ?>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="iconsItem  ">
                    <div class="iconsItemChild">
                        <div>
                            <i class='bx bx-train'></i>
                            <h5>
                                <?= @$GLOBALS['text']['Rail_Freight__'] ?>
                            </h5>
                            <p>
                                <?= @$GLOBALS['text']['When_rail_'] ?>
                            </p>
                            <a href="/railfreght">
                                <?= @$GLOBALS['text']['READ_MORE__'] ?>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="iconsItem ">
                    <div  class="iconsItemChild">
                        <div>
                            <i class="fa-solid fa-road"></i>
                            <h5>
                                <?= @$GLOBALS['text']['Road_Freight_'] ?>
                            </h5>
                            <p>
                                <?= @$GLOBALS['text']['Our_Road__'] ?>
                            </p>
                            <a href="roadfreght">
                                <?= @$GLOBALS['text']['READ_MORE__'] ?>
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
                                <?= @$GLOBALS['text']['Customs_Brokerage__'] ?>
                            </h5>                            
                            <p>
                                <?= @$GLOBALS['text']['Customs_Services_'] ?>
                            </p>
                            <a href="/customsbrokerage" >
                                <?= @$GLOBALS['text']['READ_MORE__'] ?>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="iconsItem">
                    <div class="iconsItemChild">
                        <div>
                            <i class="bi bi-shield-check"></i>
                            <h5>
                                <?= @$GLOBALS['text']['Cargo_Insurance_'] ?>
                            </h5>
                            <p>
                                <?= @$GLOBALS['text']['Our_Cargo__'] ?>
                            </p>
                            <a href="/cargoinsurance">
                                <?= @$GLOBALS['text']['READ_MORE__'] ?>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="iconsItem  ">
                    <div class="iconsItemChild">
                        <div>
                            <i class="bi bi-archive"></i>
                            <h5>
                                <?= @$GLOBALS['text']['Warehousing__'] ?>
                            </h5>
                            <p>
                                <?= @$GLOBALS['text']['Our_Warehousing__'] ?>
                            </p>
                            <a href="/warehousing">
                                <?= @$GLOBALS['text']['READ_MORE__'] ?>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="iconsItem  ">
                    <div class="iconsItemChild">
                        <div>
                            <i class="bi bi-gear"></i>
                            <h5>
                                <?= @$GLOBALS['text']['Project_Logistics_'] ?>
                            </h5>
                            <p>
                                <?= @$GLOBALS['text']['Our_Project__'] ?>
                            </p>
                            <a href="/project-logistics">
                                <?= @$GLOBALS['text']['READ_MORE__'] ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="Our-Clients">
    <div class="container">
        <div class="Clients-sec ">
            <div class="row title-div pb-4">
                <div class="col-lg-6">
                    <h6>
                        <?= @$GLOBALS['text']['TESTIMONIALS__'] ?>
                    </h6>
                    <h2>
                    <?= @$GLOBALS['text']['What_Our_Clients_'] ?>
                    </h2>
                </div>
            </div>
            <div class="swiper clients-slide   ">
                <div class="swiper-wrapper clientWrapper">
                    <div class="swiper-slide">
                        <div class="clientBox armen-box">
                            <div class="clinetDis">
                                <h6 class="text-white fs-5 pt-0 mt-0 pb-3">
                                    <?= @$GLOBALS['text']['Easy_and__'] ?>
                                </h6>
                                <p class="text-white" style="width: 570px;" >
                                    <?= @$GLOBALS['text']['We_were_previously_'] ?>
                                </p>
                            </div>
                            <div class="client-img-name d-flex align-items-center">
                                <img src="../images/armen-120x120.png" alt="">
                                <ul class="pt-3">
                                    <li class="text-white">
                                        <?= @$GLOBALS['text']['Armen_Karapetyan_'] ?>
                                    </li>
                                    <li class="clientsCity">
                                        <?= @$GLOBALS['text']['Yerevan_'] ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide " >
                        <div class="clientBox">
                            <div class="clinetDis ">
                                <h6 class="text-white fs-5 pt-0 pb-3">
                                    <?= @$GLOBALS['text']['Excellent_Service__'] ?>
                                </h6>
                                <p class="text-white">
                                    <?= @$GLOBALS['text']['Excellent_service_'] ?>
                                </p>
                            </div>
                            <div class="client-img-name d-flex align-items-center">
                                <img src="../images/ani-120x120.png" alt="">
                                <ul class="pt-3">
                                    <li class="text-white">
                                        <?= @$GLOBALS['text']['Ani_Harutyunyan_'] ?>
                                    </li>
                                    <li class="clientsCity">
                                        <?= @$GLOBALS['text']['Yerevan_'] ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="clientBox arimne-box">
                            <div class="clinetDis">
                                <h6 class="text-white fs-5 pt-0 pb-3">
                                    <?= @$GLOBALS['text']['High_Customer__'] ?>
                                </h6>
                                <p class="text-white">
                                    <?= @$GLOBALS['text']['I’ve_been__'] ?>
                                </p>
                            </div>
                            <div class="client-img-name d-flex align-items-center">
                                <img src="../images/armine-120x120.png" alt="">
                                <ul  class="pt-3">
                                    <li class="text-white">
                                        <?= @$GLOBALS['text']['Armine_Hovhannisyan_'] ?>
                                    </li>
                                    <li class="clientsCity">
                                        <?= @$GLOBALS['text']['Yerevan_'] ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide col-lg-6">
                        <div class="clientBox">
                            <div class="clinetDis">
                                <h6 class="text-white fs-5 pt-0 pb-3">
                                    <?= @$GLOBALS['text']['Highly_Recommend__'] ?>
                                </h6>
                                <p class="text-white ">
                                    <?= @$GLOBALS['text']['I_am_happy_to_'] ?>
                                </p>
                            </div>
                            <div class="client-img-name d-flex align-items-center">
                                <img src="../images/anna-120x120.png" alt="">
                                <ul class="pt-3">
                                    <li class="clientsName text-white">
                                        <?= @$GLOBALS['text']['Anna_Martirosyan_'] ?>
                                    </li>
                                    <li class="clientsCity">
                                        <?= @$GLOBALS['text']['Yerevan_'] ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clients-pagination d-flex justify-content-center align-items-end gap-2 "></div>
            </div>
        </div>
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
            <div class="advanList d-flex align-items-start gap-5">
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
</section>
<section class="question-answer-request">
    <div class="container">
        <div class="row question-answer-request-sec  ">
            <div class="question-answer-div col-lg-6 col-md-12 col-sm-12">
                <div class="title-div">
                    <h6>
                        <?= @$GLOBALS['text']['QUESTIONS_&_ANSWERS_'] ?>
                    </h6>
                    <h2>
                        <?= @$GLOBALS['text']['Frequently_Asked_'] ?>
                    </h2>
                </div>
                <div class="question-answer">
                    <div class="quest-ans-item">
                        <div class="question">
                            <span>
                                <?= @$GLOBALS['text']['How_I_should__'] ?>
                            </span>

                            <div class="plus">
                                <i class=" bi bi-plus-lg"></i>
                            </div>

                        </div>
                        <p class="answer">
                            <?= @$GLOBALS['text']['It_is_important_'] ?>
                        </p>
                    </div>

                    <div class="quest-ans-item">
                        <div class="question">
                            <span>
                                <?= @$GLOBALS['text']['What_should_I_'] ?>
                            </span>
                            <div class="plus">
                                <i class="bi bi-plus-lg"></i>
                            </div>
                        </div>  
                        <p class="answer">
                            <?= @$GLOBALS['text']['If_Good_Are_'] ?>
                        </p>
                    </div>

                    <div class="quest-ans-item">
                        <div class="question">
                            <span>
                                <?= @$GLOBALS['text']['How_long_will_'] ?>
                            </span>
                            <div class="plus">
                                <i class="bi bi-plus-lg"></i>
                            </div>
                        </div>
                        <p class="answer">
                            <?= @$GLOBALS['text']['The_Transit_Time_'] ?>
                        </p>
                    </div>

                    <div class="quest-ans-item">
                        <div class="question">
                            <span>
                                <?= @$GLOBALS['text']['How_can_I__'] ?>
                            </span>
                            <div class="plus">
                                <i class="bi bi-plus-lg"></i>
                            </div>
                        </div>
                        <p class="answer">
                            <?= @$GLOBALS['text']['Simply_Leave_Us_'] ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="request-div col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="requestForm ">
                    <?php 
                    if($_COOKIE['language'] == "am") {
                    ?>
                        <script data-b24-form="inline/18/gbwpq5" data-skip-moving="true">
                            (function(w,d,u){var s=d.createElement('script');
                                s.async=true;s.src=u+'?'+(Date.now()/180000|0);
                                var h=d.getElementsByTagName('script')[0];
                                h.parentNode.insertBefore(s,h);
                            })(window,document,'https://cdn-ru.bitrix24.ru/b27778314/crm/form/loader_18.js');
                        </script>
                    <?php 
                    } elseif ($_COOKIE['language'] == 'ru') {
                    ?>
                        <script data-b24-form="inline/20/yhrhyr" data-skip-moving="true">
                            (function(w,d,u){var s=d.createElement('script');
                                s.async=true;s.src=u+'?'+(Date.now()/180000|0);
                                var h=d.getElementsByTagName('script')[0];
                                h.parentNode.insertBefore(s,h);
                            })(window,document,'https://cdn-ru.bitrix24.ru/b27778314/crm/form/loader_20.js');
                        </script>
                    <?php 
                    } elseif ($_COOKIE['language'] == 'en') {
                    ?>
                        <script data-b24-form="inline/16/7h1b1h" data-skip-moving="true">
                            (function(w,d,u){var s=d.createElement('script');
                                s.async=true;s.src=u+'?'+(Date.now()/180000|0);
                                var h=d.getElementsByTagName('script')[0];
                                h.parentNode.insertBefore(s,h);
                            })(window,document,'https://cdn-ru.bitrix24.ru/b27778314/crm/form/loader_16.js');
                        </script>
                    <?php 
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="brands">
    <div class="container">
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
                    <img src="/images/warehouswTrade-img.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="swiper-button-next brands-swiper-arrow"></div>
    <div class="swiper-button-prev brands-swiper-arrow"></div>
</section>
<section class="Contact-Us">
    <div class="container">
        <div class=" contact-sec  d-flex justify-content-between">
            <div class="contact-dis " >
                <h3>
                    <?= @$GLOBALS['text']['Let_Us_Help'] ?>
                </h3>
                <p>
                    <?= @$GLOBALS['text']['Please_feel__'] ?>
                </p>
            </div>
            <div class="contact-info   " >
                <button>
                    <a href="/contact">
                        <?= @$GLOBALS['text']['Contact_Us_Now_'] ?>
                    </a>
                </button>
                <p><?= @$GLOBALS['text']['Or_Call_'] ?> <span>+374 91 919188</span></p>
            </div>
        </div>
    </div>
</section>

<!-- <script>
    AOS.init();
</script>
 -->
