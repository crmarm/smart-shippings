<?php $this->params['title'] = $GLOBALS['text']['Contact-Us_Title']; ?>
<a  data-aos="fade-right" class="go-to-up" href="#top">
    <button >
        <i class="bi bi-chevron-up"></i>
    </button>
</a>

<section class="con-page-form-img">
    <div class="container">
        <div class="con-page-form-img-sec d-flex justify-content-between">
            <div class="con-page-form">
                <?php 
                    if($_COOKIE['language'] == "am") {
                ?>
                    <script data-b24-form="inline/14/h29flh" data-skip-moving="true">
                         (function(w,d,u){
                            var s=d.createElement('script');
                            s.async=true;
                            s.src=u+'?'+(Date.now()/180000|0);
                            var h=d.getElementsByTagName('script')[0];
                            h.parentNode.insertBefore(s,h);
                            })(window,document,'https://cdn-ru.bitrix24.ru/b27778314/crm/form/loader_14.js');
                    </script>
                <?php 
                     } elseif ($_COOKIE['language'] == 'ru') {
                ?>
                            <script data-b24-form="inline/12/a8kmpb" data-skip-moving="true">
                                (function(w,d,u){
                                    var s=d.createElement('script');
                                    s.async=true;
                                    s.src=u+'?'+(Date.now()/180000|0);
                                    var h=d.getElementsByTagName('script')[0];
                                    h.parentNode.insertBefore(s,h);
                                })(window,document,'https://cdn-ru.bitrix24.ru/b27778314/crm/form/loader_12.js');
                            </script>
                    <?php 
                        } elseif ($_COOKIE['language'] == 'en') {
                    ?>
                            <script data-b24-form="inline/2/t0gdke" data-skip-moving="true">
                                (function(w,d,u){
                                    var s=d.createElement('script');
                                    s.async=true;
                                    s.src=u+'?'+(Date.now()/180000|0);
                                    var h=d.getElementsByTagName('script')[0];
                                    h.parentNode.insertBefore(s,h);
                                })(window,document,'https://cdn-ru.bitrix24.ru/b27778314/crm/form/loader_2.js');
                            </script>
                    <?php 
                        }
                    ?>
            </div>
            <div class="con-page-img">
                <img src="../images/contact-page-img.png" alt="">
            </div>
        </div>
    </div>
</section>

<section class="Map">
    <div style="background-color: #f8f9fa;">
        <div class="container">
            <div  class="con-page-info-smart">
                <h5><?= $GLOBALS['text']['Smart_Shippings_LLC_'] ?></h5>
                <p>
                    <?= $GLOBALS['text']['Smart_Shippings_LLC_'] ?><br>
                    <?= $GLOBALS['text']['Address:__'] ?>
                    <?= $GLOBALS['text']['Working_days:_'] ?><br>
                    <?= $GLOBALS['text']['9.00_am_to_'] ?>
                </p>
                <ul class="phone-email d-flex px-0 gap-4">
                    <li class="phone-info">
                        <i class="bi bi-telephone"></i>
                        <a href="callto:+374 91 919122">+374 91 919122</a>
                    </li>
                    <li class="email-info">
                        <i class="fa-sharp fa-thin fa-at"></i>
                        <a href="mailto:h.hovhannisyan@smartshippings.com">h.hovhannisyan@smartshippings.com</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <iframe style="width: 100%; height: 400px;" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=791&amp;height=507&amp;hl=en&amp;q=Margaryan%2045/2%20St%20Yerevan+()&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
</section>
