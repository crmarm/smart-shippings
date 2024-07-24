<?php

namespace app\controllers;

use app\models\GaGallery;
use app\models\JoinReq;
use app\models\SmNews;
use app\models\Texts;
use app\models\Tracking;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\Crest;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }


    public function beforeAction($action){
        setcookie('language', 'hy', time() ,'/'.$action->id);
        //var_dump(Yii::$app->request->referrer);
        if (!isset($_COOKIE['language']) || empty($_COOKIE['language'])) {
            setcookie('language', 'hy', time() + (30 * 24 * 60 * 60),'/');
            $this->refresh();
            Yii::$app->end();
            return false;
        }
        $lng = $_COOKIE['language'] ?? 'hy';
        if($lng !== 'hy' && $lng !== 'ru' && $lng !== 'en'){
            setcookie('language', 'hy', time() + (30 * 24 * 60 * 60),'/');
            $this->refresh();
            Yii::$app->end();
            return false;
        }
        $txt = Texts::find()->select(['text_'.$lng.' as text'])->asArray()->indexBy('slug')->column();
        $GLOBALS['text'] = $txt;
        $this->enableCsrfValidation = false;
        return parent::beforeAction($action);
    }

    public function pagination($model , $tableName){
        $total_count = clone $model;
        $total_count = $total_count->select("count($tableName.id)");
        $total_count->asArray();
        $total_count = $total_count->one();
        $total_count = $total_count["count($tableName.id)"];
        if(@intval($_GET['page'])){
            if($_GET['page'] !== 'all') {
                $pageSize = 20;
                $model->limit(20);
                $offset = ($_GET['page']) * $pageSize;
                $model->offset($offset);
            }
        }else{
            $model->limit(20);
        }
        $model = $model->all();
        return ['count' => $total_count,'model' => $model];
    }

    public function actionSwitchLanguage($lang)
    {
        setcookie('language', $lang, time() + (30 * 24 * 60 * 60),"/");
        return $this->goBack(Yii::$app->request->referrer);
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionGetUrls($text = null){
        if($text) {
            $urls = Texts::find()
                ->where(['like','text_'.$_COOKIE['language'] , $text])
                ->andWhere(['!=','page' , 'all'])
                ->andWhere(['is not','page' , null])
                ->groupBy('page')
                ->asArray()
                ->all();
            return $this->renderAjax('search-file', ['urls' => $urls]);
        }
    }
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        $model = new LoginForm();
        if($_POST){
            $model->load(Yii::$app->request->post(), '');
            if($model->login()){
                return $this->redirect('admin/news/');
            }else{
                return $this->redirect('login');
            }
        }
        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */


    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        if($_POST){
            $joinUs = new JoinReq();
            $joinUs->name = $_POST['name'];
            $joinUs->lastname = $_POST['lastName'];
            $joinUs->email = $_POST['email'];
            $joinUs->department = $_POST['text'];
            $joinUs->message = $_POST['message'];
            $joinUs->save();
            return $this->goBack(Yii::$app->request->referrer);
        }
        return $this->render('about');
    }
    public function actionServices(){
        return $this->render('services');
    }
    public function actionGallery()
    {
        $pictures = GaGallery::find()->asArray();
        $resp = $this->pagination($pictures,'ga_gallery');
        $pictures = @$resp['model'];
        $total = $resp['count'];
        return $this->render('gallery',['pictures' => $pictures,'total' => $total]);
    }
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }
    public function actionShippment(){
//        $users = Crest::call('user.search');
//        var_dump($users);
//        die;
        $tracks = '';
        $cordinatior = '';
//        $_GET['search'] = 'IMP-A-1/24';
//        $_GET['search'] = "IMP-A-2/24";
//        $_GET['search'] = "IMP-O-3/24";
//        $_GET['search'] = "IMP-A-38/24";
        if(@$_GET['search']){
            $tracks = Crest::call('crm.deal.list',[
                'filter'=>['UF_CRM_1709904415487'=> $_GET['search']],
                'select'=>['UF_*','*'],
            ]);
            
            $user = Crest::call('user.get',[
                'filter'=>['UF_CRM_1709904415487'=> $_GET['search']],
                'select'=>['UF_*','*'],
            ]);
//            echo '<pre>';
//            var_dump($user);
//            var_dump($tracks);
//            die;
            if(count($tracks['result'])) {
                $tracks = $tracks['result']['0'];
                $tracks['loadingDate'] = $tracks['UF_CRM_6570260E0B783'];
                $tracks['unloadinDate'] = $tracks['UF_CRM_6570260E3DF23'];
                $tracks['weight'] = $tracks['UF_CRM_1711031316'];
                $tracks['item'] = $tracks['UF_CRM_65BA6BF941C4B'];

                $tracks['origin_country'] = $tracks['UF_CRM_1711095727'];//start point
                $tracks['origin_city'] = $tracks['UF_CRM_1706774843'];
                $tracks['origin_address'] = $tracks['UF_CRM_6570260E2BC67'];

                $tracks['destination_country'] = $tracks['UF_CRM_1711794595']; //end point
                $tracks['destination_city'] = $tracks['UF_CRM_1706774890'];
                $tracks['destination_address'] = $tracks['UF_CRM_65BA026CA0250'];
                if(@$tracks['ASSIGNED_BY_ID']){
                    $cordinatior = Crest::call('user.get',[
                        'filter'=>['ID'=> $tracks['ASSIGNED_BY_ID']],
                        'select'=>['UF_*','*'],
                    ]);
                    $cordinatior = @$cordinatior['result'][0];
                }
                if(!empty($tracks['UF_CRM_1715768153'])){
                    $tracks['address'] = $tracks['UF_CRM_1711089287'][count($tracks['UF_CRM_1711089287']) - 1];
                }else{
                    $tracks['address'] = '';
                }
                $tracks['parameters'] = $tracks['UF_CRM_1711031413'];
                $tracks['history'] = $tracks['UF_CRM_1717056875642'];//history addresses where the item was
            }else{
                $tracks = [];
            }

        }
        return $this->render('shippment',['tracks' => $tracks , 'cordinatior' => $cordinatior]);
    }
    public function actionAirfreght()
    {
        return $this->render('airfreght');
    }
    public function actionSeafreght()
    {
        return $this->render('seafreght');
    }
    public function actionConditions()
    {
        return $this->render('railfreght');
    }
    public function actionRoadfreght()
    {
        return $this->render('roadfreght');
    }
    public function actionCustomsbrokerage()
    {
        return $this->render('customs-brokerage');
    }

    public function actionCargoinsurance()
    {
        return $this->render('cargo-insurance');
    }
    public function actionWarehousing()
    {
        return $this->render('warehousing');
    }
    public function actionProjectlogistics()
    {
        return $this->render('project-logistics');
    }
    public function actionUseful()
    {
        return $this->render('useful');
    }
    public function actionTrailerDimensions()
    {
        return $this->render('useful/trailer-dimensions');
    }
    public function actionTruckDimensions()
    {
        return $this->render('useful/truck-dimensions');
    }
    public function actionPalletDimensions()
    {
        return $this->render('useful/pallet-dimensions');
    }
    public function actionContainerDimensions()
    {
        return $this->render('useful/container-dimensions');
    }


    public function actionNews($url = null)
    {
        if($url){
            $news = SmNews::find()->where(['url'=>$url])->one();
            return $this->render('news-block', ['item' => $news]);
        }else{
            $news = SmNews::find()->all();
            return $this->render('news', ['news' => $news]);
        }
    }
   public function actionQuestAnswer()
   {
       return $this->render('quest-answer');
   }


    public function actionTracking(){
        $data = Crest::call('crm.deal.list',[
            'filter'=>['UF_CRM_1709904415487'=>'IMP-A-1/24'],
            'select'=>['UF_*','*'],
        ]);
        //IMP-A-1/24    CRM job number  / Site tracking number
        //$data  tracking info 
        echo  '<pre>';
        var_dump($data);die();

    }
}
