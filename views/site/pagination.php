<?php use yii\helpers\Url; ?>
<style>
    .pagination{
        display:flex;
        flex-wrap:wrap;
        list-style:none;
        margin-top:20px;
        padding-left:0px;
        gap:8px;
        justify-content: center;
        margin-top: 50px;
    }
    .pagination a{
        font-size:18px;
        text-decoration:none;
        color:black;
    }
    .pagination li.active a{
        background:#80c645;
        color:white !important;
        border:none;
    }
    .pagination li.active a{
        color:white;
    }
    .page-item{
        border:none;
        border-radius: 4px;
    }
    .page-link{
        border:none;
        border-radius: 4px;
    }
    .pagination .page-link .sr-only{
        color:black !important;
    }
    .pagination span{
        display:inline !important;
        color:black;
        display: inline !important;
    }
</style>
<?php
$request = Yii::$app->request;
$currentUrl = Url::to($request->url, true);
$path = parse_url($currentUrl)['path'];
$and = '?';
$parsedCurrentUrl = parse_url($currentUrl);
if(@$parsedCurrentUrl['query']){
    $path .= '?'.parse_url($currentUrl)['query'];
    $and = '&';
}
$path = preg_replace('/&page=\d+/', '', $path);
?>
<ul class="pagination w-100">
    <?php $pages = ceil(intval($total)/20); ?>
    <?php if(isset($_GET['page']) && intval($_GET['page'] )>0){ ?>
        <li class="page-item">
            <a class="page-link" href="<?= Yii::$app->urlManager->createUrl([$path]) ?><?= $and ?>page=<?php echo intval($_GET['page'])-1;?>" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
            </a>
        </li>
    <?php } ?>
    <?php
    if(!isset($_GET['page'])){
        $_GET['page'] = 0;
    }
    for ($i = 1; $i <= $pages; $i++){
        if( $i == (intval($_GET['page'])+2) || $i == (intval($_GET['page'])+3) || $i == (intval($_GET['page'])-1)  ||  $i == (intval($_GET['page'])) ||  $i == intval($_GET['page'])+1) {
            $class = '';
            if($i == intval($_GET['page'])+1 && $_GET['page'] !== 'all'){
                $class = 'active';
            }
            echo '<li class="page-item '.$class.'"><a class="page-link" href="'.Yii::$app->urlManager->createUrl([$path]).$and.'page=' . ($i-1).'">' . $i.'</a></li>';
        }
    } ?>
    <?php if(isset($_GET['page']) && (intval($_GET['page'] )+1) < $pages){ ?>
        <li class="page-item">
            <a class="page-link" href="<?= Yii::$app->urlManager->createUrl([$path]) ?><?= $and ?>page=<?php echo (intval($_GET['page'] )+1);?>" aria-label="Next">
                <span class="sr-only">Next</span>
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
    <?php } ?>
<!--    <li class="page-item --><?php //= $_GET['page'] === 'all' ? 'active' : ''?><!--"><a class="page-link" href="--><?php //= Yii::$app->urlManager->createUrl([$path]) ?><!----><?php //= $and ?><!--page=?all">Տեսնել ամբողջը</a></li>-->
</ul>


