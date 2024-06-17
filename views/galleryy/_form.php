<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
/** @var yii\web\View $this */
/** @var app\models\GaGallery $model */
/** @var yii\widgets\ActiveForm $form */
?>
<style>
    .file-input-container {
        position: relative;
        display: inline-block;
        overflow: hidden;
        cursor: pointer;
    }

    .file-input-container input[type="file"] {
        position: absolute;
        top: 0;
        right: 0;
        margin: 0;
        padding: 0;
        font-size: 20px;
        cursor: pointer;
        opacity: 0;
        filter: alpha(opacity=0);
    }

    .file-input-label {
        display: inline-block;
        background-color: rgb(22, 119, 74);
        color: white;
        padding: 10px 20px;
        font-size: 16px;
        border-radius: 4px;
        text-align: center;
        transition: background-color 0.3s;
        cursor: pointer;
    }

    #file-input{
        width:0;
    }
    .file-input-text {
        margin-left: 10px;
        font-size: 16px;
        display: none;
    }
</style>
<div class="ga-gallery-form">
    <?php $form = ActiveForm::begin([
        'options' => ['enctype' => 'multipart/form-data'],
    ]); ?>
    <div class="file-input-container d-flex flex-column gap-3">
        <label class="file-input-label btn-primary w-25">
            Ավելացնել Նկար
            <input type="file" name="img[]" id="file-input" multiple>
        </label>
        <span id="file-input-text" class="file-input-text">No file chosen</span>
    </div>
    <div class="form-group mt-3">
        <?= Html::submitButton('Պահպանել', ['class' => 'btn btn-success']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>

