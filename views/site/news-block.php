<style>
    .uniq-news-page h2{
        font-weight: bolder;
        font-size: 40px;
        line-height: 47.95px;
        font-family: 'Geometric Bold';
        color: rgb(121, 187, 67) ;
    }
    .uniq-news-more-block .date{
        font-family: 'Poppins-medium';
        font-size: 24px;
        font-weight: 400;
        line-height: 36px;
        text-align: left;
        color: rgb(121, 187, 67) ;
    }
    .uniq-news-more-block h4{
        color: rgb(121, 187, 67) ;
        font-family: 'Geometric Bold';
        font-size: 32px;
        font-weight: 600;
        line-height: 60px;
        text-align: left;
    }
    .uniq-news-more-block ul{
        padding-left: 0;
        display: flex;
        flex-direction: column;gap:15px;
    }
    .uniq-news-page .uniq-news-img-parent .uniq-news-img{
        width:auto;
        max-height:360px;
    }
    @media(max-width:767px) {
        .headerand-image{
            flex-direction:column ;
        }
    }
</style>
<?php $this->params['title'] = @$GLOBALS['text']['News_Footer']; ?>
<?php $this->params['second'] =  @$GLOBALS['text']['__NEWS__']; ?>
<?php $this->params['href'] =  Yii::$app->urlManager->createUrl('news') . '/' . $_COOKIE['language'] ?>
<div class="fs-breadcrumbs-wrapper">
    <div class="fs-container">
        <ul class="fs-breadcrumbs-list">
            <li class="fs-breadcrumbs-el"><a  href="/"><?=@$GLOBALS['text']['__home__page__']?></a></li>
            <li class="fs-breadcrumbs-el" ></li>
            <li class="fs-breadcrumbs-el"><?=@$GLOBALS['text']['__news__']?></li>
        </ul>
    </div>
</div>
<section class="uniq-news-page py-5">
    <div class="container">
        <div class="">
            <h2 class="mb-3">
                <?= $_COOKIE['language'] === 'hy' ? $item->page_name_am : (($_COOKIE['language'] === 'ru') ? $item->page_name_ru : $item->page_name_en) ?>
            </h2>
        </div>
        <div class="uniq-news-more-block d-flex justify-content-between column-gap-5 mt-5">
            <div class="uniq-news-dis">
                <div class="d-flex align-items-center headerand-image" style="gap:30px;">
                    <div class="d-flex flex-column">
                        <p class="date"><?= date('Y-m-d', strtotime($item['create_date'])); ?></p>
                        <h4 class="m-0 title">
                            <?= $_COOKIE['language'] === 'hy' ? $item->page_title_am : (($_COOKIE['language'] === 'ru') ? $item->page_title_ru : $item->page_title_en) ?>
                        </h4>
                    </div>
                    <div class="uniq-news-img-parent">
                        <img class="uniq-news-img" src="../../<?= $item->img ?>" alt="">
                    </div>
                </div>
                <div class="about-news py-3 w-100 ">
                    <p class="">
                        <?= $_COOKIE['language'] === 'hy' ? $item->page_content_am : (($_COOKIE['language'] === 'ru') ? $item->page_content_ru : $item->page_content_en) ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
