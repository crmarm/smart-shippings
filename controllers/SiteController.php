<?php

namespace app\controllers;

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


    public function beforeAction($action)
    {
        if (!isset($_COOKIE['language']) || empty($_COOKIE['language'])) {
            setcookie('language', 'am', time() + (365 * 24 * 60 * 60));
            $this->refresh();
            Yii::$app->end();
            return false;
        }
        $lng = $_COOKIE['language'] ?? 'am';
        if($lng !== 'am' && $lng !== 'ru' && $lng !== 'en'){
            setcookie('language', 'am', time() + (365 * 24 * 60 * 60));
            $this->refresh();
            Yii::$app->end();
            return false;
        }
        $txt = Texts::find()->select(['text_'.$lng.' as text'])->asArray()->indexBy('slug')->column();
        $GLOBALS['text'] = $txt;
        $this->enableCsrfValidation = false;
        return parent::beforeAction($action);
    }

    public function actionSwitchLanguage($lang)
    {
        setcookie('language', $lang, time() + (365 * 24 * 60 * 60),"/");
        return $this->goBack(Yii::$app->request->referrer);
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
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
                return $this->redirect('index');
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
        return $this->render('about');
    }
    public function actionServices()
    {
        return $this->render('services');
    }
    public function actionGallery()
    {
        return $this->render('gallery');
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
        $tracks = '';
        if(@$_GET['search']){
            $type = ['=','tracking.id',$_GET['search']];
            $tracks = Tracking::find()
                ->joinWith(['points' => function ($query){
                    $query->onCondition(['or',
                        ['track_points.id' => $query->min('track_points.id')],
                    ]);
                },'item','cordinator']);
            if(@$type){
                $tracks->andWhere($type);
            }
            $tracks = $tracks->asArray()->all();
        }
        return $this->render('shippment',['tracks' => $tracks]);
    }
    public function actionAirfreght()
    {
        return $this->render('airfreght');
    }
    public function actionSeafreght()
    {
        return $this->render('seafreght');
    }
    public function actionRailfreght()
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
}
