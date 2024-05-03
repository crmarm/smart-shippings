<?php

namespace app\controllers;

use app\models\SmNews;
use app\models\Texts;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class AdminController extends Controller
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
                    'logout' => ['post'],
                ],
            ],
        ];
    }
    public function beforeAction($action)
    {
        if(!Yii::$app->user->identity->id) {
            return $this->redirect('/');
        }
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
    public function actionNews(){
        $post = Yii::$app->request->post();
        if ($post && $post['add']) {
            $blog = new SmNews();
            $blog->load($post);
            $blog->url =  $this->transLateURRL($blog->page_name_am);
            if (!empty($_FILES['img']) && $_FILES['img']['tmp_name']) {
                $tmp_name = $_FILES["img"]["tmp_name"];
                $name = time() . basename($_FILES["img"]["name"]);
                move_uploaded_file($tmp_name, "uploads/$name");
                $blog->img = "uploads/$name";
            }
            $blog->save(false);
            $this->redirect(['news', 'success' => 'true', 'id' => 'key' .$blog->id]);
        }
        else if ($post && $post['edite']) {
            $blog = SmNews::findOne(['id' => intval($post['id']) ]);
            $blog->load($post);
            $blog->url =  $this->transLateURRL($blog->page_name_am);
            $blog->save(false);
            $this->redirect(['news', 'success' => 'true', 'id' => 'key' .  $blog->id]);
        }
        $blogs = SmNews::find()->orderBy(['order_num' => SORT_ASC])->all();
        return $this->render('news', ['blogs' => $blogs]);
    }
    
    public function actionNewsEdite() {
        $id = intval($_GET['id']);
        $blog = SmNews::findOne(['id' => $id]);
        return $this->renderAjax('blog-edite-popup', ['blog' => $blog,'categories'=>$categories]);
    }


    public  function  transLateURRL($rdata){
        $rdata = str_replace(' ', '-', $rdata);
        $rdata = str_replace('×', '_', $rdata);
        $rdata = str_replace('^', '_', $rdata);
        $rdata = str_replace('%', '_', $rdata);
        $rdata = str_replace('(', '_', $rdata);
        $rdata = str_replace(')', '_', $rdata);
        $rdata = str_replace('/', '_', $rdata);
        $rdata = str_replace('\\', '_', $rdata);
        $rdata = str_replace('#', '_', $rdata);
        $rdata = str_replace('՝', '', $rdata);
        $rdata = str_replace('։', '_', $rdata);
        $rdata = str_replace(',', '_', $rdata);
        $rdata = str_replace('-', '_', $rdata);
        $rdata = str_replace('$', '_', $rdata);
        $rdata = str_replace('@', '_', $rdata);
        $rdata = str_replace('&', '_', $rdata);
        $rdata = str_replace('=', '_', $rdata);
        $rdata = str_replace(',', '_', $rdata);
        $rdata = str_replace('«', '', $rdata);
        $rdata = str_replace('»', '', $rdata);
        $rdata = str_replace('֊', '_', $rdata);
        $rdata = str_replace('__', '_', $rdata);
        $rdata = str_replace('+', '_', $rdata);
        $rdata = str_replace('"', '_', $rdata);
        $rdata = str_replace("'", '_', $rdata);
        /*$cyr = [
            'ա','բ','վ','գ','դ','ե','ժ','զ','ի','յ','կ','լ','մ','ն','օ','պ',
            'ռ','ս','տ','ու','փ','խ','ց','չ','շ','է','ը','ո','ր','և','ք','ջ','ծ','ղ','հ','ճ','թ','ֆ','ձ','ւ',
            'Ա','Բ','Վ','Գ','Դ','Ե','Ժ','Զ','Ի','Յ','Կ','Լ','Մ','Ն','Օ','Պ',
            'Ռ','Ս','Տ','ՈՒ','Փ','Խ','Ց','Չ','Շ','Է','Ը','Ո','Ր','և','Ք','Ջ','Ծ','Ղ','Հ','Ճ','Թ','Ֆ','Ձ'
        ];

        $lat = [
            'a','b','v','g','d','e','zh','z','i','y','k','l','m','n','o','p',
            'r','s','t','u','ph','x','ts','ch','sh','e','y','o','r','ev','q','j','ts','x','h','j','t','f','zh','v',
            'A','B','V','G','D','E','ZH','Z','I','Y','K','L','M','N','O','P',
            'R','S','T','U','PH','X','TS','CH','SH','E','Y','VO','R','EV','Q','J','TS','X','H','J','T','F','ZH'
        ];
        $rdata = str_replace($cyr, $lat, $rdata);
        return strtolower($rdata);
        */

        $cyr_lower = [
            'ա','բ','վ','գ','դ','ե','ժ','զ','ի','յ','կ','լ','մ','ն','օ','պ',
            'ռ','ս','տ','ու','փ','խ','ց','չ','շ','է','ը','ո','ր','և','ք','ջ','ծ','ղ','հ','ճ','թ','ֆ','ձ','ւ',
            'а','б','в','г','д','е','ж','з','и','й','к','л','м','н','о','п',
            'р','с','т','у','ф','х','ц','ч','ш','щ','ы','э','ю','я','ё','ъ','ь','і','ї','є','ґ'
        ];

        $lat_lower = [
            'a','b','v','g','d','e','zh','z','i','y','k','l','m','n','o','p',
            'r','s','t','u','ph','x','ts','ch','sh','shch','yi','e','yu','ya','yo','ie','i','i','i','i','ye','g',
            'a','b','v','g','d','e','zh','z','i','y','k','l','m','n','o','p',
            'r','s','t','u','f','kh','ts','ch','sh','shch','y','e','yu','ya','yo','i','i','i','i','i','ye','g'
        ];

        $cyr_upper = [
            'Ա','Բ','Վ','Գ','Դ','Ե','Ժ','Զ','Ի','Յ','Կ','Լ','Մ','Ն','Օ','Պ',
            'Ռ','Ս','Տ','ՈՒ','Փ','Խ','Ց','Չ','Շ','Է','Ը','Ո','Ր','և','Ք','Ջ','Ծ','Ղ','Հ','Ճ','Թ','Ֆ','Ձ',
            'А','Б','В','Г','Д','Е','Ж','З','И','Й','К','Л','М','Н','О','П',
            'Р','С','Т','У','Ф','Х','Ц','Ч','Ш','Щ','Ы','Э','Ю','Я','Ё','Ъ','Ь','І','Ї','Є','Ґ'
        ];

        $lat_upper = [
            'A','B','V','G','D','E','ZH','Z','I','Y','K','L','M','N','O','P',
            'R','S','T','U','PH','X','TS','CH','SH','SHCH','YI','E','YU','YA','YO','IE','I','I','I','I','YE','G',
            'A','B','V','G','D','E','ZH','Z','I','Y','K','L','M','N','O','P',
            'R','S','T','U','F','KH','TS','CH','SH','SHCH','Y','E','YU','YA','YO','I','I','I','I','I','YE','G'
        ];



        $rdata = str_replace($cyr_lower, $lat_lower, $rdata);
        $rdata = str_replace($cyr_upper, $lat_upper, $rdata);

        return strtolower($rdata);
    }
}