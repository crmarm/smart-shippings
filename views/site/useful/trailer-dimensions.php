<?php $this->params['title'] = $GLOBALS['text']['__Trailer__Dimensions__']; ?>
<?php $this->params['second'] =  $GLOBALS['text']['__USEFUL__INFORMATION__']; ?>
<?php $this->params['href'] = Yii::$app->urlManager->createUrl('useful') . '/' . $_COOKIE['language'] ?>

<style>
    thead tr th{
         background: #80c645 !important;
         color:white !important;
    }
    tbody tr img{
        /*position: absolute;*/
        /*left: 50%;*/
        /*top: 50%;*/
        /*transform: translate(-50%, -50%);*/
        display: block;
        margin: auto;
    }
    tbody tr td:first-child{
        /*position: relative;*/
        /*min-width: 300px;*/

    }
</style>
<section class="container mt-5 mb-5 overflow-auto w-100">
    <h4 class="text-center mb-5"><?= $GLOBALS['text']['__Truck__and__Trailer__'] ?></h4>
    <table  class="table table-bordered ">
        <thead>
            <tr class="row-1">
                <th colspan="2" >Type</th>
                <th>L</th>
                <th>W</th>
                <th>H</th>
                <th>m³</th>
            </tr>
        </thead>
        <tbody>
        <tr>
            <td rowspan="2" ><img  src="../images/cars/tad1.svg" alt="13,60 mt Tilt Trailer Straight Frame" width="255" height="62"></td>
            <td rowspan="2" >13,60mt Tilt<br>Trailer Straight Frame</td>
            <td >13,60 m</td>
            <td >2,42 m</td>
            <td >2,40 m</td>
            <td >79 m³</td>
        </tr>
        <tr >
            <td >13,60 m</td>
            <td >2,42 m</td>
            <td >2,60 m</td>
            <td >86 m³</td>
        </tr>
        <tr >
            <td rowspan="4" ><img  src="../images/cars/tad2.svg" alt="13,60 mt Jumbo Trailer" width="253" height="64"   ></td>
            <td rowspan="4" >13,60mt<br>Jumbo Trailer</td>
            <td >3,10 m</td>
            <td >2,42 m</td>
            <td >2,55 m</td>
            <td rowspan="2" >79 m³</td>
        </tr>
        <tr >
            <td >9,10 m</td>
            <td >2,42 m</td>
            <td >2,75 m</td>
        </tr>
        <tr >
            <td >3,50 m</td>
            <td >2,42 m</td>
            <td >2,45 m</td>
            <td rowspan="2" >83 m³</td>
        </tr>
        <tr >
            <td >8,70 m</td>
            <td >2,42 m</td>
            <td >2,50 m</td>
        </tr>
        <tr >
            <td rowspan="2" ><img  src="../images/cars/tad3.svg" alt="Road Train" width="253" height="59"   ></td>
            <td rowspan="2" >Road Train</td>
            <td >6,20 m</td>
            <td >2,42 m</td>
            <td >2,50 m</td>
            <td rowspan="2" >87 m³</td>
        </tr>
        <tr >
            <td >8,30 m</td>
            <td >2,42 m</td>
            <td >2,50 m</td>
        </tr>
        <tr >
            <td rowspan="2" ><img  src="../images/cars/tad4.svg" alt="Road Train 2" width="290" height="70"   ></td>
            <td rowspan="2" >Road Train</td>
            <td >7,80 m</td>
            <td >2,44 m</td>
            <td >2,85 m</td>
            <td rowspan="2" >110 m³</td>
        </tr>
        <tr >
            <td >8,10 m</td>
            <td >2,44 m</td>
            <td >2,85 m</td>
        </tr>
        <tr >
            <td ><img  src="../images/cars/tad5.svg" alt="Normal Open Truck" width="270" height="64"   ></td>
            <td >Normal Open Truck</td>
            <td >Up to<br>18 m</td>
            <td >2,44 m</td>
            <td >-</td>
            <td >-</td>
        </tr>
        <tr >
            <td ><img  src="../images/cars/tad5.svg" alt="Dumper Truck" width="137" height="60"   ></td>
            <td >Dumper Truck</td>
            <td >-</td>
            <td >-</td>
            <td >-</td>
            <td >Up to<br>25 m³</td>
        </tr>
        <tr >
            <td ><img  src="../images/cars/tad6.svg" alt="Jumbo Open Truck" width="253" height="52"   ></td>
            <td >Jumbo Open Truck</td>
            <td >Up to<br>18 m</td>
            <td >2,44 m</td>
            <td >-</td>
            <td >-</td>
        </tr>
        <tr >
            <td ><img  src="../images/cars/tad7.svg" alt="Lowbed Truck" width="263" height="54"   ></td>
            <td >Lowbed Truck</td>
            <td >-</td>
            <td >-</td>
            <td >-</td>
            <td >-</td>
        </tr>
        </tbody>
    </table>
</section>