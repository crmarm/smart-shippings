<style>
    .track-blocks .block span{
        display: block;
        width:max-content !important;
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
                    <div class="load-all d-flex w-100" style="justify-content: space-between; text-wrap: nowrap;">
                        <div class=" item-div d-flex justify-content-between align-items-center">
                            <div>
                                <img  style="margin-bottom: 10px;" src="../images/photo_shippment2.jpg" alt="">
                                <div class="last-part d-flex" style="gap:17px;">
                                    <div class="d-flex flex-column">
                                    <?php if(@$tracks['address']){ ?>
                                        <div class="activePoints">
                                            <h4>ADDRESS</h4>
                                            <span id="addressSpan" style="width: auto !important;"><?= @$tracks['address'] ?></span>
            <!--                                <p>--><?php //= himd($point['date']) ?><!--</p>-->
                                        </div>
                                    <?php }?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-grid justify-content-between" style="gap:8.09%">
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
                <!--<div>
                    <div>
                        <h5>Service cordinator</h5>
                    </div>
                    <div class="d-flex align-items-center" style="gap:40px;padding-top:20px;">
                        <div>
                            <img src="../images/photo_shippment1.jpg" alt="">
                        </div>
                        <div>
                            <span>Manager Name</span>
                            <p class="m-0"><?php /*= @$tracks['cordinator']['name'] */?></p>

                            <span>Manager Phone</span>
                            <p class="m-0"><?php /*= @$tracks['cordinator']['phone'] */?></p>

                            <span>Manager Mail</span>
                            <p class="m-0"><?php /*= @$tracks['cordinator']['mail'] */?></p>
                        </div>
                    </div>                   
                </div>-->
                <form class="comment-form " style="padding-top: 35px; width:100% !important; ">
                    <textarea placeholder="Comment" name="" id="" cols="42" rows="4" style="padding:10px 20px; width:100%;">
                    </textarea>
                    <div class="submit">Add Comment</div>
                </form>
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
    var addressSpan = document.getElementById("addressSpan");
    var addressText = addressSpan.textContent;

    for (var i = 0; i < addressText.length; ++i) {
        if (i == 20) {
            addressText = addressText.replace('|', '<br>|');
        }
    }

    addressSpan.innerHTML = addressText;
</script>

