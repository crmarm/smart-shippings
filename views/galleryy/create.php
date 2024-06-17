<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\GaGallery $model */

$this->title = 'Ավելացնել նկար';
//$this->params['breadcrumbs'][] = ['label' => 'Ga Galleries', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ga-gallery-create container">
    <h1><?= Html::encode($this->title) ?></h1>
    <h6>(Նախըտրելի նկարի չափ "360 x 262")</h6>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
