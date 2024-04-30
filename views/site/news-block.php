<?php $this->params['title'] = @$GLOBALS['text']['News_Footer']; ?>
<?php $this->params['second'] =  @$GLOBALS['text']['__NEWS__']; ?>
<?php $this->params['href'] =  '/news' ?>

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
            <h2 class="m-0">
                <?= $_COOKIE['language'] === 'hy' ? $item->page_name_am : (($_COOKIE['language'] === 'ru') ? $item->page_title_ru : $item->page_title_en) ?>
            </h2>
        </div>
        <div class="uniq-news-more-block row d-flex justify-content-start  ">
            <div class="uniq-news-img-parent col-lg-6">
                <div class="uniq-news-img" style="background:url('../<?= $item->img ?>')"></div>
            </div>
            <div class="uniq-news-dis col-lg-6 ">
                <h4 class="m-0">
                    <?= $_COOKIE['language'] === 'am' ? $item->page_name_am : (($_COOKIE['language'] === 'ru') ? $item->page_title_ru : $item->page_title_en) ?>
                </h4>
                <div class="about-news py-3 w-100 ">
                    <p class="">
                        <?= $_COOKIE['language'] === 'hy' ? $item->page_content_am : (($_COOKIE['language'] === 'ru') ? $item->page_content_ru : $item->page_title_en) ?>
                        <?= $item->page_content_am  ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
