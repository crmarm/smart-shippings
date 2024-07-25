<?php $this->params['title'] = $GLOBALS['text']['__USEFUL__INFORMATION__'];  ?>
<style>
    figcaption{
        color:#80c645;
        font-weight:800;
        text-align: center;
        font-size: 20px;
        padding-top: 30px;
    }
    .blog{
        width: 30%;
    }
    .blog img{
        width: 260px;
        height: 260px;
    }
    .btn{
        background: #80c644 !important;
        border:#80c644 !important;
        width: 153px;
        height: 58px;
        font-size: 18px;
        letter-spacing: 6px;
        text-transform: uppercase;
        margin-top: 30px;
        min-width:max-content;
    }
    @media (max-width: 650px){
        .bBlock{
            justify-content: center !important;
            align-items: center !important;
        }
        .blog{
            width: 100% !important;
            max-width: 100% !important;
            min-width: 100% !important;
        }
    }
</style>
<section class='d-flex justify-content-evenly container mt-5 mb-5 flex-wrap bBlock' style="row-gap: 50px" >
    <div class="blog d-flex align-items-center flex-column">
        <figure>
            <img src="../images/us1.webp" alt="Trulli" style="width:100%">
            <figcaption><?= $GLOBALS['text']['__Trailer__Dimensions__'] ?></figcaption>
        </figure>
        <a href="<?= Yii::$app->urlManager->createUrl('trailer-dimensions') ?>/<?= $_COOKIE['language'] ?>" ><button class="btn btn-success"><?= $GLOBALS['text']['__to_view__'] ?></button></a>
    </div>

    <div class="blog d-flex align-items-center flex-column">
        <figure>
            <img src="../images/us2.webp" alt="Trulli" style="width:100%">
            <figcaption><?= $GLOBALS['text']['__Track__Dimensions__'] ?></figcaption>
        </figure>
        <a href="<?= Yii::$app->urlManager->createUrl('truck-dimensions') ?>/<?= $_COOKIE['language'] ?>" ><button class="btn btn-success"><?= $GLOBALS['text']['__to_view__'] ?></button></a>
    </div>
    <div class="blog d-flex align-items-center flex-column">
        <figure>
            <img src="../images/us3.webp" alt="Trulli" style="width:100%">
            <figcaption><?= $GLOBALS['text']['__Container__Dimensions__'] ?></figcaption>
        </figure>
        <a href="<?= Yii::$app->urlManager->createUrl('container-dimensions') ?>/<?= $_COOKIE['language'] ?>" ><button class="btn btn-success"><?= $GLOBALS['text']['__to_view__'] ?></button></a>
    </div>
    <div class="blog d-flex align-items-center flex-column">
        <figure>
            <img src="../images/us4.webp" alt="Trulli" style="width:100%">
            <figcaption><?= $GLOBALS['text']['__Palet__Dimensions__'] ?></figcaption>
        </figure>
        <a href="<?= Yii::$app->urlManager->createUrl('pallet-dimensions') ?>/<?= $_COOKIE['language'] ?>" ><button class="btn btn-success"><?= $GLOBALS['text']['__to_view__'] ?></button></a>
    </div>

    <div class="blog d-flex align-items-center flex-column">
        <figure>
            <img src="../images/airplane.avif" alt="Trulli" style="width:100%">
            <figcaption><?= $GLOBALS['text']['__aircraft-specification__'] ?></figcaption>
        </figure>
        <a href="<?= Yii::$app->urlManager->createUrl('aircraft-specification') ?>/<?= $_COOKIE['language'] ?>" ><button class="btn btn-success"><?= $GLOBALS['text']['__to_view__'] ?></button></a>
    </div>
</section>