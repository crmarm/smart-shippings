<style>
    #main{
        display: flex;
        justify-content: center;
    }
    .news-block {
        width: 49%;
        display: flex;
        flex-direction: column;
        gap: 20px;
        margin-top: 20px;
    }
    .item:hover {
        transform: translateY(-5px);
    }
    .news-block .news-img:hover {
        opacity:0.9;
        transform: scale(1.05);
    }
    .read-more-news a{
        font-size:15px;
        color:black;
    }
    .news-img-parent{
        max-width:100%;
        overflow:hidden;
        border-radius: 4px;
        background:#222;
    }
    .news-block .news-img{
        height:391px;
        width:100%;
        background-size:cover !important;
        background-repeat:no-repeat;
        border-radius: 4px;
    }
    .all-news {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        margin-top: 40px;
    }
    @media (max-width: 500px) {
        .news-block .news-img{
            height:280px;
        }
    }
</style>
<div class="fs-breadcrumbs-wrapper">
    <div class="fs-container">
        <ul class="fs-breadcrumbs-list">
            <li class="fs-breadcrumbs-el"><a href="/"><?=$GLOBALS['text']['__home__page__']?></a></li>
            <li class="fs-breadcrumbs-el" >/</li>
            <li class="fs-breadcrumbs-el"><?=$GLOBALS['text']['__news__']?></li>
        </ul>
    </div>
</div>
<?php $_COOKIE['language'] = 'am'; ?>
<section style="margin:50px 0">
    <div class="fs-container all-news">
        <?php
        if(isset($news) && !empty($news)) {
            foreach ($news as $index => $item) { ?>
                <div class="news-block">
                    <div class="news-img-parent">
                        <a href="news/<?= $item->url ?>"><div class="news-img" style="background:url('<?= $item->img ?>')"></div></a>
                    </div>
                    <div>
                        <h4 class="m-0">
                            <?= $_COOKIE['language'] === 'am' ? $item->page_name_am : (($_COOKIE['language'] === 'ru') ? $item->page_title_ru : $item->page_title_en) ?>
                        </h4>
                    </div>
                    <div class="about-news m-0">
                        <p>
                            <?= $_COOKIE['language'] === 'am' ? mb_substr($item->page_content_am, 0, 300) : (($_COOKIE['language'] === 'ru') ? mb_substr($item->page_content_ru, 0, 300) : mb_substr($item->page_title_ru, 0, 300)) ?>
                            <?= (strlen($item->page_content_am) > 300) ? '...' : ''; ?>
                        </p>
                    </div>
                    <div class="read-more-news m-0">
                        <a href="news/<?= $item->url ?>"><?= $GLOBALS['text']['__read__more__'] ?> <i class="fa fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
<?php       }
        } ?>
    </div>
</section>
