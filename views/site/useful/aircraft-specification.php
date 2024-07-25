<?php $this->params['title'] = $GLOBALS['text']['__aircraft-specification__']; ?>
<?php $this->params['second'] =  $GLOBALS['text']['__USEFUL__INFORMATION__']; ?>
<?php $this->params['href'] = Yii::$app->urlManager->createUrl('useful') . '/' . $_COOKIE['language'] ?>

<style>
    thead tr th{
        background: #80c645 !important;
        color:white !important;
    }
    tbody tr img{
        display: block;
        margin: auto;
        width: 100%;
    }
    tbody tr td:first-child{
        padding:0px;
    }
</style>
<section class="container mt-5 mb-5 overflow-auto w-100">
    <h4 class="text-center mb-5"><?= $GLOBALS['text']['__aircraft-specification__'] ?></h4>
    <table  class="table table-bordered" >
        <thead>
            <tr>
                <th class="text-center"></th>
                <th class="text-center"><?= $GLOBALS['text']['__Aircraft__type__'] ?></th>
                <th class="text-center"><?= $GLOBALS['text']['__Max__load__tonnes__'] ?><br>tonnes</th>
                <th class="text-center"><?= $GLOBALS['text']['__Cargo__hold__'] ?> <br>(LxWxH) <span >(cm)</span></th>
                <th class="text-center"><?= $GLOBALS['text']['__Door__size__'] ?> <br>(WxH) <span >(cm)</span></th>
                <th class="text-center"><?= $GLOBALS['text']['__Load__valume__'] ?>Load valume <br>(Cubic m)</th>
            </tr>
        </thead>
        <tbody>
        <tr>
            <td class="text-center pt-3"><i class="fa-solid fa-plane" style="color: #80c645;font-size:30px ;"></i></td>
            <td ><p>AN 12</p></td>
            <td ><p>18</p></td>
            <td ><p>1355 x 350 x 247</p></td>
            <td ><p>285 x 235</p></td>
            <td ><p>85</p></td>
        </tr>
        <tr>
            <td class="text-center pt-3"><i class="fa-solid fa-plane" style="color: #80c645;font-size:30px ;"></i></td>
            <td ><p>IL-76</p></td>
            <td ><p>48</p></td>
            <td ><p>1850 x 340 x 325</p></td>
            <td ><p>345x325</p></td>
            <td ><p>180</p></td></tr>
        <tr>
            <td class="text-center pt-3"><i class="fa-solid fa-plane" style="color: #80c645;font-size:30px ;"></i></td>
            <td ><p>AN124</p></td>
            <td ><p>120</p></td>
            <td ><p>3648 x 640 x 440</p></td>
            <td ><p>640 x 440</p></td>
            <td ><p>750</p></td></tr>
        <tr>
            <td class="text-center pt-3"><i class="fa-solid fa-plane" style="color: #80c645;font-size:30px ;"></i></td>
            <td ><p>AN 225</p></td>
            <td ><p>250</p></td>
            <td ><p>4535 x 640 x 440</p></td>
            <td ><p>640 x 440</p></td>
            <td ><p>1100</p></td></tr>
        <tr>
            <td class="text-center pt-3"><i class="fa-solid fa-plane" style="color: #80c645;font-size:30px ;"></i></td>
            <td ><p>B 737-500</p></td>
            <td ><p>20,4</p></td>
            <td ><p>2440 x 319 x 214</p></td>
            <td ><p>340 x 210</p></td>
            <td ><p>154</p></td></tr>
        <tr>
            <td class="text-center pt-3"><i class="fa-solid fa-plane" style="color: #80c645;font-size:30px ;"></i></td>
            <td ><p>B757-200</p></td>
            <td ><p>36</p></td>
            <td ><p>3327 x 353 x 213</p></td>
            <td ><p>340 x 218</p></td>
            <td ><p>238</p></td></tr>
        <tr>
            <td class="text-center pt-3"><i class="fa-solid fa-plane" style="color: #80c645;font-size:30px ;"></i></td>
            <td ><p>B 767-300</p></td>
            <td ><p>5S</p></td>
            <td ><p>3890 x 442 x 250</p></td>
            <td ><p>340 x 250</p></td>
            <td ><p>450</p></td></tr>
        <tr>
            <td class="text-center pt-3"><i class="fa-solid fa-plane" style="color: #80c645;font-size:30px ;"></i></td>
            <td ><p>B747-200</p></td>
            <td ><p>111,5</p></td>
            <td ><p>4800 x 486 x 304</p></td>
            <td ><p>340 x 312</p></td>
            <td ><p>759</p></td></tr>
        <tr>
            <td class="text-center pt-3"><i class="fa-solid fa-plane" style="color: #80c645;font-size:30px ;"></i></td>
            <td ><p>B 757-400</p></td>
            <td ><p>120</p></td>
            <td ><p>4800 x 486 x 304</p></td>
            <td ><p>350 x 312</p></td>
            <td ><p>735</p></td></tr>
        <tr>
            <td class="text-center pt-3"><i class="fa-solid fa-plane" style="color: #80c645;font-size:30px ;"></i></td>
            <td><p>MD <span >11</span></p></td>
            <td><p>85</p></td>
            <td><p>5500 x 488 x ZS4</p></td>
            <td><p>356 x 259</p></td>
            <td><p>575</p></td></tr>
        <tr>
            <td class="text-center pt-3"><i class="fa-solid fa-plane" style="color: #80c645;font-size:30px ;"></i></td>
            <td><p>A 300 B4</p></td>
            <td><p>444</p></td>
            <td><p>3550 x 477 x 255</p></td>
            <td><p>318 x 244</p></td>
            <td><p>300</p></td>
        </tr>

    </tbody>
</table>

</section>