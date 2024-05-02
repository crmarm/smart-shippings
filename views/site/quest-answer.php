<?php $this->params['title'] = $GLOBALS['text']['Frequently_Asked_']; ?>
<a  data-aos="fade-right" data-aos-duration="2000" class="go-to-up" href="#top">
    <button >
        <i class="bi bi-chevron-up"></i>
    </button>
</a>
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
