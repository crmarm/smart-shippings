<style>
    .second-title-news a{
        color:#000000;
        font-size: 15px;
        font-weight: 500;
    }
</style>
<?php $this->params['title'] = @$GLOBALS['text']['News_Footer']; ?>
<a data-aos="fade-right" data-aos-duration="2000" class="go-to-up" href="#top">
    <button >
        <i class="bi bi-chevron-up"></i>
    </button>
</a>
<div class="fs-breadcrumbs-wrapper">
    <div class="fs-container">
        <ul class="fs-breadcrumbs-list">
            <li class="fs-breadcrumbs-el"><a href="/"><?=@$GLOBALS['text']['__home__page__']?></a></li>
            <li class="fs-breadcrumbs-el" ></li>
            <li class="fs-breadcrumbs-el"><?=@$GLOBALS['text']['__news__']?></li>
        </ul>
    </div>
</div>
<section class="news-sec" style="margin:50px 0">
    <div class="container ">
        <div class="title-div">
            <h2>
                <?= @$GLOBALS['text']['Latest_News_'] ?>
            </h2>                          
            <p>
               <?= @$GLOBALS['text']['Get_An_Owerveiw_'] ?>
            </p>                
        </div>
        <div class="all-news ">
        <?php
        if(isset($news) && !empty($news)) {
            foreach ($news as $index => $item) { ?>
                <div class="news-block d-flex flex-column gap-3">
                    <div class="news-img-parent">
                        <a href="<?= Yii::$app->urlManager->createUrl('../news/'. $item->url) ?>/<?= $_COOKIE['language'] ?>">
                            <img class="news-img" src="../<?= $item->img ?>" alt="Image">
                        </a>
                    </div>
                    <div class="news-dis">
                        <?= $_COOKIE['language'] === 'hy' ? $item->page_name_am : (($_COOKIE['language'] === 'ru') ? $item->page_name_ru : $item->page_name_en) ?>
                        <h4 class="mt-3 second-title-news">
                            <a href="<?= Yii::$app->urlManager->createUrl('news/'. $item->url) ?>/<?= $_COOKIE['language'] ?>">
                                <?= $_COOKIE['language'] === 'hy' ? $item->page_title_am : (($_COOKIE['language'] === 'ru') ? $item->page_title_ru : $item->page_title_en) ?>
                            </a>
                        </h4>
                         <div class="about-news m-0" >
                            <p>
                                <?= $_COOKIE['language'] === 'hy' ? mb_substr($item->page_content_am, 0, 100) : (($_COOKIE['language'] === 'ru') ? mb_substr($item->page_content_ru, 0, 100) : mb_substr($item->page_content_en, 0, 100)) ?>
                                <?= (strlen($item->page_content_am) > 100) ? '...' : ''; ?>
                            </p>
                        </div>
                    </div>
                    <div class="read-more-news ">
                        <a href="<?= Yii::$app->urlManager->createUrl('news/'. $item->url) ?>/<?= $_COOKIE['language'] ?>">
                            <button>
                                <?= @$GLOBALS['text']['READ_MORE__'] ?>
                            </button>
                        </a>
                    </div>
                </strong>
                </div>
            </s>                                          
        <?php  }
            } ?>
        </div>
    </div>
</section>
