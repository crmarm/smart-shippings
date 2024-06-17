<?php

namespace app\controllers;

use app\models\GaGallery;
use app\models\GaGallerySearch;
use app\models\Texts;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * GalleryyController implements the CRUD actions for GaGallery model.
 */
class GalleryyController extends Controller
{
    /**
     * @inheritDoc
     */
//    public $layout = 'admin';
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

    /**
     * Lists all GaGallery models.
     *
     * @return string
     */
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
    
    public function waterMarker($img)
    {
//        $stamp = imagecreatefrompng('images/smart-logo.png');
//        $stamp = imagecreatefrompng('images/brand-bonPhram-img.png');
//         Load the stamp image
        $stamp = imagecreatefrompng('images/smart.png');

        // Get the image extension
        $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));

        // Load the image based on the extension
        switch ($ext) {
            case 'jpg':
            case 'jpeg':
                $im = imagecreatefromjpeg($img);
                break;
            case 'png':
                $im = imagecreatefrompng($img);
                break;
            case 'gif':
                $im = imagecreatefromgif($img);
                break;
            default:
                echo 'Unsupported image format';
                return;
        }

        if (!$im) {
            echo 'Failed to load image';
            return;
        }

        // Get dimensions of both images
        $im_width = imagesx($im);
        $im_height = imagesy($im);
        $stamp_width = imagesx($stamp);
        $stamp_height = imagesy($stamp);

        // Calculate the scaled watermark size (if needed)
        $scale = 2.5; // Adjust the scale as needed
        $new_stamp_width = $stamp_width * $scale;
        $new_stamp_height = $stamp_height * $scale;

        // Create a new true color image for the resized watermark
        $resized_stamp = imagecreatetruecolor($new_stamp_width, $new_stamp_height);

        // Maintain transparency
        imagealphablending($resized_stamp, false);
        imagesavealpha($resized_stamp, true);
        $transparent = imagecolorallocatealpha($resized_stamp, 255, 255, 255, 127);
        imagefilledrectangle($resized_stamp, 0, 0, $new_stamp_width, $new_stamp_height, $transparent);

        // Copy and resize the watermark to the new true color image
        imagecopyresampled($resized_stamp, $stamp, 0, 0, 0, 0, $new_stamp_width, $new_stamp_height, $stamp_width, $stamp_height);

        // Rotate the resized watermark by 45 degrees
        $rotated_stamp = imagerotate($resized_stamp, 30, $transparent);

        // Get the dimensions of the rotated watermark
        $rotated_width = imagesx($rotated_stamp);
        $rotated_height = imagesy($rotated_stamp);

        // Calculate the position for diagonal placement
        $watermark_x = ($im_width - $rotated_width) / 2;
        $watermark_y = ($im_height - $rotated_height) / 2;

        // Apply the watermark with opacity
        $opacity = 50; // Adjust opacity (0-100)
        $this->imagecopymerge_alpha($im, $rotated_stamp, $watermark_x, $watermark_y, 0, 0, $rotated_width, $rotated_height, $opacity);

        // Save the watermarked image based on the original image format
        $outputPath = "_watermarked/" . basename($img);

        switch ($ext) {
            case 'jpg':
            case 'jpeg':
                $saved = imagejpeg($im, $outputPath);
                break;
            case 'png':
                $saved = imagepng($im, $outputPath);
                break;
            case 'gif':
                $saved = imagegif($im, $outputPath);
                break;
        }

        if ($saved) {
            echo 'Watermarked image saved successfully';
        } else {
            echo 'Failed to save watermarked image';
        }

        // Free memory
        imagedestroy($im);
        imagedestroy($stamp);
        imagedestroy($resized_stamp);
        imagedestroy($rotated_stamp);

        return $outputPath;
    }

// Function to merge images with alpha
    public function imagecopymerge_alpha($dest, $src, $dest_x, $dest_y, $src_x, $src_y, $src_w, $src_h, $pct)
    {
        // Get image width and height
        $w = imagesx($src);
        $h = imagesy($src);

        // Create a cut resource
        $cut = imagecreatetruecolor($src_w, $src_h);

        // Copy the relevant section from the destination image to the cut resource
        imagecopy($cut, $dest, 0, 0, $dest_x, $dest_y, $src_w, $src_h);

        // Copy relevant section from the source image to the cut resource
        imagecopy($cut, $src, 0, 0, $src_x, $src_y, $src_w, $src_h);

        // Merge the two images together
        imagecopymerge($dest, $cut, $dest_x, $dest_y, 0, 0, $src_w, $src_h, $pct);
    }


    public function actionIndex()
    {
        $searchModel = new GaGallerySearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single GaGallery model.
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
     * Creates a new GaGallery model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new GaGallery();
        if ($this->request->isPost) {
            if(@$_FILES["img"]["tmp_name"]) {
                foreach ($_FILES["img"]["tmp_name"] as $i => $files) {
                    $model = new GaGallery();
                    $tmp_name = $_FILES["img"]["tmp_name"][$i];
                    $name = time() . $i . basename($_FILES["img"]["name"][$i]);
                    var_dump(move_uploaded_file($tmp_name, "gallery-uploads/$name"));
                    $name = $this->waterMarker("gallery-uploads/$name");
                    $model->img = $name;
                    var_dump($model->save());
                }
                return $this->redirect('/galleryy/');
            }
        }
        else {
            $model->loadDefaultValues();
        }
        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing GaGallery model.
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
     * Deletes an existing GaGallery model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
        return $this->redirect('/galleryy/');
    }

    /**
     * Finds the GaGallery model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return GaGallery the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = GaGallery::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
