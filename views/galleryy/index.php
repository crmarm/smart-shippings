<?php
use app\models\GaGallery;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
/** @var yii\web\View $this */
/** @var app\models\GaGallerySearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */
$this->title = 'Տեսադարան';
?>
<style>
    .pagination {
        list-style: none;
        padding: 0;
        text-align: center;
    }

    .pagination li {
        display: inline-block;
        margin: 0 5px;
    }

    .pagination li.disabled {
        pointer-events: none;
        color: #999;
    }

    .pagination li a {
        display: block;
        padding: 8px 12px;
        text-decoration: none;
        color: #333;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    .pagination li.active a {
        background-color: rgba(153, 27, 31, 1);
        color: #fff;
        border-color: rgba(153, 27, 31, 1);
    }

    .pagination li a:hover {
        background-color: #f5f5f5;
    }







    .lightbox-trigger {
        cursor: pointer;
        transition: transform 0.2s;
    }

    .lightbox {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7);
        z-index: 9999;
    }

    .lightbox-image {
        display: block;
        max-width: 90%;
        max-height: 90%;
        margin: auto;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    .close-button {
        color: #fff;
        font-size: 24px;
        position: absolute;
        top: 20px;
        right: 30px;
        cursor: pointer;
    }
</style>
<div class="ga-gallery-index container-fluid">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <a href="create/" class="btn btn-success">Ավելանել Նկար</a>
    </p>
    <div class="lightbox">
        <span class="close-button">&times;</span>
        <img src="" alt="" class="lightbox-image">
    </div>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'id',
            [
                'attribute' => 'img',
                'format' => 'html', // Ensures the HTML is rendered
                'value' => function ($model) {
                    return Html::img('/'.$model->img, ['width' => '100', 'class' => 'lightbox-trigger']); // Adjust the width as needed

                },
            ],
            [
                'class' => ActionColumn::className(),
//                'urlCreator' => function ($action, GaGallery $model, $key, $index, $column) {
//                    return Url::toRoute([$action, 'id' => $model->id]);
//                 }
                 'urlCreator' => function ($action, $model, $key, $index, $column) {
                                    if ($action === 'delete') {
                                        return Url::toRoute([$action, 'id' => $model->id]);
                                    }
                                    if ($action === 'view') {
                                        return Url::toRoute(['#', 'id' => $model->id]);
                                    }
                                    else {
                                        return Url::toRoute([$action, 'id' => $model->id]);
                                    }
                                },
                'buttons' => [
                    'update' => function ($url, $model, $key) {
                        return '';
                    },
                    'view' => function ($url, $model, $key) {
                        return '';
                    },
                ],
            ],

        ],
    ]); ?>


</div>
<script>
    $('body').on('click','.lightbox-trigger', function() {
        var imageSrc = $(this).attr('src');
        $('.lightbox-image').attr('src', imageSrc);
        $('.lightbox').fadeIn();
    });
    $('.close-button').click(function() {
        $('.lightbox').fadeOut();
    });

    $('.lightbox').click(function(event) {
        if (!$(event.target).hasClass('lightbox-image')) {
            $('.lightbox').fadeOut();
        }
    });
</script>