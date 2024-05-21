<?php if($urls){ ?>
    <style>
        .links-new{
            display: -webkit-box !important;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
            overflow: hidden;
            text-overflow: ellipsis;a
        }
    </style>
    <div class="m-auto" >
        <?php foreach ($urls as $index => $url) { ?>
            <a class="links-new form-control border d-flex align-items-center justify-content-left" href="<?= Yii::$app->urlManager->createUrl($url['page'])  . '/' . $_COOKIE['language'] ?>">
                <?= $url['text_'.$_COOKIE['language']] ?>
                <i class="bx bx-chevron-right"></i>
            </a>
        <?php } ?>
    </div>
<?php } ?>

