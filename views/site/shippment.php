<?php $this->params['title'] = $GLOBALS['text']['Track_Your_Shipment_Title'];  ?>
<section class="shipment-serach Shipment-page pt-4">
    <div class="container">
        <form class="w-50" >
            <input type="search" name="search" placeholder="<?= $GLOBALS['text']['Search_Track_Number'] ?>" value="<?= @$_GET['search'] ?>">
        </form>
    </div>
</section>
<style>
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
    .gap-5{
        gap:1rem !important;
    }
    .form-control{
        color: #212529;
        background-color: #fff;
        outline: 0;
        border:none;
    }
    .gap-29{
        gap:29px;
    }
    .pl-40p{
        padding-left: 40px;
    }
    .tracking-headers {
        padding-right: 21.92%;
    }
    .active a{
        color:rgba(153, 27, 31, 1) !important;
    }
    .tracking-headers h3 a{
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif ;
        font-size: 24px;
        font-weight: 500;
        line-height: 36px;
        text-align: left;
        color: rgba(255, 255, 255, 1);
    }
    .track-filter .form-group label{
        color:white;
        font-size: 16px;
        /*font-family: Poppins-regular;*/
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif ;

    }
    .track-filter{
        font-size: 24px;
        font-weight: 500;
        line-height: 36px;
        text-align: left;
        color: #fff;
        width: max-content;
    }
    .track-filter span{
        color: rgba(153, 27, 31, 1);
    }
    .cont{
        padding:0 17.1875%;
        padding-top: 60px;
        padding-bottom: 100px;
        margin: auto;
    }

    .track-blocks {
        padding-top: 20px;
        z-index: 1;
        position: relative;
    }
    .block{
        padding:13px 18px 13px 13px;
        background: rgba(88,85,86,255);
        width: 48.711%;
        margin-top:30px;
    }
    .comment{
        background: rgba(0, 0, 0, 0.25);
    }
    .block p{
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif ;
        font-size: 12px;
        font-weight: 400;
        line-height: 18px;
        text-align: left;
        color:white;
    }
    .block span{
        font-family:  'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif ;/*Poppins-medium ;*/
        font-size: 12px;
        font-weight: 500;
        line-height: 18px;
        text-align: left;
        color: rgba(255, 255, 255, 1);

    }
    .block h5{
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif ;
        font-size: 20px;
        font-weight: 500;
        line-height: 30px;
        color: white;
    }
    .last-part{
        height: min-content;
    }
    .last-part h4{
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif ;
        font-size: 12px;
        font-weight: 600;
        line-height: 18px;
        text-align: left;
        color:white;
    }
    .circle{
        width: 20.03px;
        height: 20px;
        background: rgba(153, 27, 31, 1);
        border-radius: 50%;
    }
    .dashed-ver{
        width: 2px;
        /*height: 64px;*/
        height: 100%;
        border:dashed 1px rgba(153, 27, 31, 1);
    }
    textarea{
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif ;font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif ;
        background: rgba(59, 55, 56, 1);
        color:white;
    }
    .submit{
        padding: 7px 84px 7px 84px;
        border-radius: 8px;
        background: rgba(153, 27, 31, 1);
        color:white;
        text-align: center;
        font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", "Noto Sans", "Liberation Sans", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    }
    .background-map-tracking{
        background: url(../images/worldMup.png);
        background-repeat: no-repeat;
        width: 25%;
        height: 35%;
        right: 0px;
        top: 102%;
        background-size: cover;
        z-index: 0;
    }
    @media (max-width: 1750px){
        .track-blocks{
            gap:1rem;
        }

        .cont{
            padding:8.1875%
        }
    }
    @media (max-width: 1460px){
        .media-first-wrap{
            gap:20px !important;
            flex-wrap: wrap;
        }
    }
    @media (max-width: 1150px){
        .media-first-wrap{
            gap:20px !important;
            flex-wrap: wrap;
        }
        .block {
            width: 100%;
            /*            width: auto;*/
        }
        .track-blocks{
            justify-content: center !important;
        }
        .comment-form{
            width: 60% ;
        }
        .comment-form textarea{
            width: 100%;
        }
    }
    @media (max-width: 690px){
        .tracking-headers{
            flex-wrap:wrap;
        }
        .pl-40p{
            padding-left:10px;
        }
        .m-m-width170{
            max-width: 170px;
        }
        .gap-29{
            gap:5px;
        }
        .last-part{
            gap: 7px;
        }
        .cont {
            padding:3%;
        }
        .tracking-headers{
            padding-right:0;

        }
        .comment-form{
            width: 100% !important;
        }
    }

</style>
<?php $alphabet = range('A', 'Z'); ?>
<section class="container" style="">
    <div class="">
        <div class="d-flex flex-column gap-5" >
            <div class="track-filter" >
            </div>
        </div>
    </div>
    <?php if(isset($tracks) && !empty($tracks)){
        foreach ($tracks as $index => $track) { ?>
        <div class="track-blocks d-flex flex-wrap justify-content-between" >
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
                            <div style="width:59%; padding: 0 32px 0 0;">
                        <span>
                            Estimated unloading date
                            <p><?= himd($track['unloading_date'])  ?></p>
                        </span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div><img src="../images/tracking1.png" alt=""></div>
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
                        <div class="d-flex flex-column align-items-center" style="height: auto">
                            <div class="circle"></div>
                            <div class="dashed-ver"></div>
                            <div class="circle"></div>
                        </div>
                        <div class="d-flex flex-column">
                            <?php
                            if(isset($track['points']) && !empty($track['points'])){
                                foreach ($track['points'] as $index => $point) { ?>
                                    <div class="activePoints">
                                        <h4>POINT  <?= $alphabet[$index] ?></h4>
                                        <span><?= $point['city'] ?></span>
                                        <p><?= himd($point['date']) ?></p>
                                    </div>
                                <?php       }
                            }
                            ?>
                            <div class="w-100">
                                <div class="viewMore" data-id="<?= $track['id'] ?>">
                                    <img src="/Images/treangleDown.png" alt="">
                                </div>
                            </div>
                            <div class="moreInfo d-none">
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <h5>Service cordinator</h5>
                    </div>
                    <div class="d-flex align-items-center" style="gap:20px;padding-top:20px;">
                        <div>
                            <img src="../images/operator.png" alt="">
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
                    <form class="comment-form" style="padding-top: 35px; width: max-content">
                <textarea name="" id="" cols="42" rows="4" style="padding:15px 29px;">Comment
                </textarea>
                        <div class="submit">Add Comment</div>
                    </form>
                </div>
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
