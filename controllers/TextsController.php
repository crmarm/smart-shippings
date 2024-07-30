<?php

namespace app\controllers;

use app\models\Texts;
use app\models\TextsSearch;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TextsController implements the CRUD actions for Texts model.
 */
class TextsController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }


    public function beforeAction($action)
    {
        $type = @Yii::$app->user->identity->type;
        if(@$type !== 3){
            return $this->redirect(Yii::$app->urlManager->createUrl('login'));
        }
        setcookie('language', 'hy', time() ,'/'.$action->id);//for removing cookie from partial url
        if (!isset($_COOKIE['language']) || empty($_COOKIE['language'])) {
            setcookie('language', 'en', time() + (365 * 24 * 60 * 60) , '/');
            $this->refresh();
            Yii::$app->end();
            return false;
        }
        $lng = $_COOKIE['language'] ?? 'en';
        if($lng !== 'hy' && $lng !== 'ru' && $lng !== 'en'){
            setcookie('language', 'en', time() + (365 * 24 * 60 * 60) ,'/');
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
     * Lists all Texts models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TextsSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Texts model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Texts model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Texts();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Texts model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Texts model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Texts model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Texts the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Texts::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
