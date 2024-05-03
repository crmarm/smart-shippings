<?php $this->params['title'] = $GLOBALS['text']['Track_Your_Shipment_Title'];  ?>
<section class="shipment-serach Shipment-page pt-4">
    <div class="container">
        <form class="w-50" >
            <input type="search" name="search" placeholder="<?= $GLOBALS['text']['Search_Track_Number'] ?>" value="<?= @$_GET['search'] ?>">
        </form>
    </div>
</section>
<?php $alphabet = range('A', 'Z'); ?>
<section class="container">
    <?php if(isset($tracks) && !empty($tracks)){
        foreach ($tracks as $index => $track) { ?>
        <div class="track-blocks " >
            <div class="block">
                <div>
                    <h5>Load Details</h5>
                </div>
                <div class="d-flex media-first-wrap gap-29" >
                    <div>
                        <div class="d-flex justify-content-between" style="gap:8.09%">
                            <div>
                                <span>
                                    Loading date
                                    <p><?= himd($track['loading_date'])  ?></p>
                                </span>
                            </div>
                            <div class="Estimated" style="width:59%; padding: 0 32px 0 0;">
                                <span style="width:100%;">
                                    Estimated unloading date
                                    <p><?= himd($track['unloading_date'])  ?></p>
                                </span>
                            </div>
                        </div>
                        <div class=" item-div d-flex justify-content-between align-items-center">
                            <div><img src="../images/photo_shippment2.jpg" alt=""></div>
                            <div class="pl-40p m-m-width170">
                                <div>
                                    <span>Item Description</span>
                                    <p><?= $track['item']['description'] ?></p>
                                </div>
                                <div>
                                    <span>Item Weight</span>
                                    <p><?= $track['item']['weight'] ?></p>
                                </div>
                                <div>
                                    <span>Item Parameters</span>
                                    <p><?= $track['item']['parameters'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="last-part d-flex" style="gap:17px;">
                        <div class="d-flex flex-column">
                            <?php
                            if(isset($track['points']) && !empty($track['points'])){
                                foreach ($track['points'] as $index => $point) { ?>
                                    <div class="activePoints">
                                        <h4>POINT</h4>
                                        <span><?= $point['city'] ?></span>
                                        <p><?= himd($point['date']) ?></p>
                                    </div>
                                <?php       }
                            }
                            ?>
                            <!-- <div class="w-100">
                                <div class="viewMore" data-id="<?= $track['id'] ?>">
                                    <img src="/Images/treangleDown.png" alt="">
                                </div>
                            </div> -->
                            <div class="moreInfo d-none">
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <h5>Service cordinator</h5>
                    </div>
                    <div class="d-flex align-items-center" style="gap:40px;padding-top:20px;">
                        <div>
                            <img src="../images/photo_shippment1.jpg" alt="">
                        </div>
                        <div>
                            <span>Manager Name</span>
                            <p class="m-0"><?= $track['cordinator']['name'] ?></p>

                            <span>Manager Phone</span>
                            <p class="m-0"><?= $track['cordinator']['phone'] ?></p>

                            <span>Manager Mail</span>
                            <p class="m-0"><?= $track['cordinator']['mail'] ?></p>
                        </div>
                    </div>                   
                </div>
                <form class="comment-form " style="padding-top: 35px; width:100% !important; ">
                <textarea placeholder="Comment" name="" id="" cols="42" rows="4" style="padding:10px 20px; width:100%;">
                </textarea>
                        <div class="submit">Add Comment</div>
                </form>
            </div>
        </div>
<?php   }
    } ?>
    <div class="position-absolute background-map-tracking"></div>
</section>
<div class="TrackInfos">

</div>

<?php
function himd($date){
    $date = new DateTime($date);
    return $date->format('d M Y');
} ?>
