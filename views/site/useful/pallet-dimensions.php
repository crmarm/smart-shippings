<?php $this->params['title'] = $GLOBALS['text']['__Palet__Dimensions__']; ?>
<?php $this->params['second'] =  $GLOBALS['text']['__Palet__Dimensions__']; ?>
<?php $this->params['href'] = Yii::$app->urlManager->createUrl('useful') . '/' . $_COOKIE['language'] ?>

<style>
    .mw-max{
        min-width: max-content;
    }
    .max-w-100{
        max-width: 100%;
    }
    tbody tr img{
        display: block;
        margin: auto;
    }
</style>
<section class="container mt-5 mb-5 overflow-auto">
    <h4 class="text-center text-uppercase"><?= $GLOBALS['text']['__Container__Dimensions__Table__']  ?></h4>
    <h4 class="mt-5 mb-5"><?= $GLOBALS['text']['__PALLET__TYPES__AND__DIMENSIONS__'] ?></h4>
    <span style="font-size: 18px; font-weight: bolder">
        <?=  $GLOBALS['text']['__EURO__PALLET__'] ?><br>( 800 x 1200 mm )
    </span>
    <div class="d-flex justify-content-between flex-wrap">
        <div class="w-50 miw-max">
            <img  class="w-auto max-w-100" src="../images/cars/pd1.webp" height="auto"  >
        </div>
        <div class="w-50 miw-max d-flex flex-column">
            <img  class="max-w-100 w-auto" src="../images/cars/pd2.webp" height="auto"  >
            <img  class="max-w-100 w-auto" src="../images/cars/pd3.webp" height="auto"  >
        </div>
    </div>




    <table  class="table table-bordered ">
        <thead>
            <tr>
                <th class="text-center" colspan="2"><?= $GLOBALS['text']['__EURO__PALLET__type__'] ?></th>
                <th class="text-center"><?= $GLOBALS['text']['__Dimensions__'] ?> (mm)<br>(<?= $GLOBALS['text']['__can__vary__'] ?>)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <img  class="w-auto" src="../images/cars/pd4.webp" height="auto"  >
                </td>
                <td>EURO Pallet (standard)	</td>
                <td>800 x 1200 <br>(It goes through many doors. It is widely used in Europe and Asia.)</td>
            </tr>
            <tr>
                <td>
                    <img  class="w-auto" src="../images/cars/pd5.webp" height="auto"  >
                </td>
                <td>EURO 2 Pallet	</td>
                <td>1200 x 1000</td>
            </tr>
            <tr>
                <td>
                    <img  class="w-auto" src="../images/cars/pd6.webp" height="auto"  >
                </td>
                <td>EURO 3 Pallet	</td>
                <td>1000 x 1200</td>
            </tr>
            <tr>
                <td>
                    <img  class="w-auto" src="../images/cars/pd7.webp" height="auto"  >
                </td>
                <td>EURO 6 Pallet ( 1/2 Pallet )	</td>
                <td>800 x 600</td>
            </tr>
        </tbody>
    </table>
    <div class="d-flex flex-column mt-5">
        <span style="font-size: 18px; font-weight: bolder">
            <?= $GLOBALS['text']['__american__PALLET__'] ?><br>( 1200 x 1000 x 150 mm )
        </span>
        <img  class="w-auto" src="../images/cars/pd8.webp" height="auto"  >
    </div>

</section>