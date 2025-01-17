<?php $this->params['title'] = $GLOBALS['text']['Gallery_Title']; ; ?>

<a  data-aos="fade-right" data-aos-duration="2000" class="go-to-up" href="#top">
    <button >
        <i class="bi bi-chevron-up"></i>
    </button>
</a>
<section class="gallery-figures">
    <div class="container">
        <div class="gallery-figures-sec d-flex flex-wrap justify-content-center gap-3 w-100 pt-4 pb-5">
            <?php foreach ($pictures as $index => $picture) { ?>
                <figure>
                    <img src="../<?= $picture['img'] ?>" alt="">
                </figure>
            <?php } ?>
            <!--<figure>
                <img src="../images/gallery-img-1.jpg" alt="">
            </figure>
            <figure>
                <img src="../images/gallery-img-2.jpg" alt="">
            </figure>
            <figure>
                <img src="../images/gallery-img-3.jpg" alt="">
            </figure>
            <figure>
                <img src="../images/gallery-img-4.jpg" alt="">
            </figure>
            <figure>
                <img src="../images/gallery-img-5.jpg" alt="">
            </figure>
            <figure>
                <img src="../images/gallery-img-6.jpg" alt="">
            </figure>
            <figure>
                <img src="../images/gallery-img-7.jpg" alt="">
            </figure>
            <figure>
                <img src="../images/gallery-img-8.jpg" alt="">
            </figure>
            <figure>
                <img src="../images/gallery-img-9.jpg" alt="">
            </figure>-->
        </div>
        <?= $this->renderFile('@app/views/site/pagination.php', ['total' => $total]) ?>
    </div>
</section>
