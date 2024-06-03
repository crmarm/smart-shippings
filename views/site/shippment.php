<style>
    .track-blocks .block p{
        white-space: break-spaces;
    }
    .activePoints p{
        color: white;
        width: 101%;
        display: block;
        word-wrap: break-word;
        overflow-wrap: break-word;
        white-space: normal;

    }
    .track-blocks .block span{
        display: block;
        width:max-content !important;
    }
    .track-blocks .block{
        width:auto;
    }
    .load-part1{
        padding-top: 5px;
    }
    .circle{
        width: 20.03px;
        height: 20px;
        background: rgba(153, 27, 31, 1);
        border-radius: 50%;
    }
    .dashed-ver{
        width: 2px;
        height: 100%;
        border:dashed 1px rgba(153, 27, 31, 1);
    }
    @media (max-width:530px) {
        .shipment-serach .container{
            padding:0 !important;
        }
        .shipment-serach form{
            width:100% !important;
        }

    }
    .viewMore{
        width: 20.1px;
        height: 9.77px;
        border-radius: 2px;
        background: rgba(59, 55, 56, 1);
        margin: auto;
        position:relative;
        cursor:pointer;
    }
    .viewMore img{
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
    }
</style>
<?php $this->params['title'] = $GLOBALS['text']['Track_Your_Shipment_Title'];  ?>
<section class="shipment-serach Shipment-page pt-4">
    <div class="container">
        <form class="w-50" >
            <input type="search" name="search" placeholder="<?= $GLOBALS['text']['Search_Track_Number'] ?>" value="<?= @$_GET['search'] ?>">
        </form>
    </div>
</section>
<?php $alphabet = range('A', 'Z'); ?>
<section class="container" style="padding-bottom: 50px !important; ">
    <?php if(isset($tracks) && !empty($tracks)){ ?>
        <div class="track-blocks" >
            <div class="block">
                <div class="h5">
                    <h5>Load Details</h5>
                </div>
                <div class="d-flex media-first-wrap gap-29" >
                    <div class="load-all d-flex w-100" style="justify-content: space-between; text-wrap: nowrap; gap:10px;">
                        <div class="item-div d-flex flex-column justify-content-start  gap-4">
                            <div class="d-flex flex-column gap-1">
                                <label style="color:white">Shipping direction</label>
                                <span style="font-size:15px;">- <?= $tracks['origin_city'] ?></span>
                                <span style="font-size:15px;">- <?= $tracks['destination_city'] ?></span>
                            </div>
                            <div>
                                <img  style="margin-bottom: 10px;" src="../images/photo_shippment2.jpg" alt="">
                                <div class="last-part d-flex" style="gap:17px;">
                                    <div class="d-flex flex-column">
                                    <?php if(@$tracks['address']){ ?>
                                        <div class="">
                                            <h4>ADDRESS</h4>
                                            <span id="addressSpan" style="width: auto !important;"><?= @$tracks['address'] ?></span>
                                        </div>
                                    <?php }?>
                                    </div>
                                </div>
                                <?php if(@$tracks['history']){ ?>
                                    <div class="d-flex flex-column">
                                        <label style="color:white">Shipping Location</label>
                                        <div class="last-part d-flex mt-2" style="gap:17px;">
                                            <div class="d-flex flex-column align-items-center" style="height: auto">
                                                <div class="circle"></div>
                                                <div class="dashed-ver"></div>
                                                <div class="circle"></div>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <div class="activePoints">
                                                    <?php foreach ($tracks['history'] as $index => $places) { ?>
                                                        <?php $place = explode('/',$places ); ?>
                                                                <p style="color:white" class="m-0 <?= $index != 0 && $index != count($tracks['history']) - 1 ? 'd-none Toggler' : '' ?>"><?= $place[0] ?></p>
                                                                <p class="<?= $index != 0 && $index != count($tracks['history']) - 1 ? 'd-none Toggler' : '' ?>"><?= $place[1] ?></p>
                                                    <?php } ?>
                                                </div>
                                                <div class="w-100">
                                                    <div class="viewMore" data-id="2566">
                                                        <img src="/Images/treangleDown.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="moreInfo d-none">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>



                            </div>
                        </div>
                        <div class="d-grid justify-content-between" >
                            <div class="load-part1">
                                <div>
                                    <span>
                                        Loading date
                                        <p><?= himd($tracks['BEGINDATE'])  ?></p>
                                    </span>
                                </div>
                                <div class="Estimated" style="width:59%; padding: 0 32px 0 0;">
                                    <span style="width:100%;">
                                        Estimated unloading date
                                        <p><?= himd($tracks['CLOSEDATE'])  ?></p>
                                    </span>
                                </div>
                            </div>    
                            <div class="load-part2">    
                                <div>
                                    <span>Item Description</span>
                                    <p><?= $tracks['item'] ?></p>
                                </div>
                                <div>
                                    <span>Item Weight</span>
                                    <p><?= $tracks['weight'] ?></p>
                                </div>
                                <div>
                                    <span>Item Parameters</span>
                                    <p><?= @$tracks['parameters'] ?></p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <div>
                        <h5>Service cordinator</h5>
                    </div>
                    <div class="d-flex align-items-center" style="gap:40px;padding-top:20px;">
                        <div>
                            <img src="../images/photo_shippment1.jpg" alt="">
                        </div>
                        <div>
                            <span>Manager Name</span>
                            <p class="m-0"><?= @$cordinatior['NAME'] . ' ' . @$cordinatior['LAST_NAME'] ?></p>

                            <span>Manager Phone</span>
                            <a href="tel:<?= @$cordinatior['PERSONAL_MOBILE'] ?>"><p class="m-0"><?= @$cordinatior['PERSONAL_MOBILE'] ?></p></a>

                            <span>Manager Mail</span>
                            <a href="mailto:<?= @$cordinatior['EMAIL'] ?>"><p class="m-0"><?= @$cordinatior['EMAIL'] ?></p></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
<?php } ?>
    <div class="position-absolute background-map-tracking"></div>
</section>

<?php
function himd($date){
    $date = new DateTime($date);
    return $date->format('d M Y');
} ?>
<script>
    // var addressSpan = document.getElementById("addressSpan");
    // var addressText = addressSpan.textContent;
    //
    // for (var i = 0; i < addressText.length; ++i) {
    //     if (i == 20) {
    //         addressText = addressText.replace('|', '<br>|');
    //     }
    // }

    // addressSpan.innerHTML = addressText;
    // $(window).on('load', function() {
    //     $('body').on('click', '.viewMore', function (){
    //
    //         $('body').find('.Toggler').toggleClass('d-none d-block');
    //     })
    // })
</script>

