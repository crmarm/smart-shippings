<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login py-5 ">
    <div class="container">
        <div class="login-sec w-75  mx-auto">
                <div class="Admin-text">  
                     <h1>ADMIN</h1>
                </div>
                    <div class="p-5 login-bg w-100 " >    
                        <h2 class="text-white"><?= Html::encode($this->title) ?></h2>
                        <p class="text-white">Please fill out the following fields to login:</p>
                        <form action="" method="post" class="d-flex flex-column gap-3">
                            <input type="hidden" name="<?= $this->renderDynamic('return Yii::$app->request->csrfParam;'); ?>" value="<?= $this->renderDynamic('return Yii::$app->request->csrfToken;'); ?>" />
                            <h2>Log in</h2>
                            <div class="form-group">
                                <label for="mail" style="padding: 0 0 6px 0px;">Email address or user name</label>
                                <input class="form-control"  type="text" name="email" >
                            </div>
                            <div class="form-group">
                                <div class="d-flex justify-content-between">
                                    <label for="Password" style="padding: 0 0 6px 0px;">Password</label>
                                    <span style="color:rgba(255, 255, 255, 0.8)"><i class="bx bx-hide" style="padding: 0px 10px;"></i>hide</span>
                                </div>
                                <input class="form-control" type="password" name="password">
                            </div>
                            <div class="d-flex align-items-center">
                                <label class="checkbox-box">
                                    <input type="checkbox" checked="checked">
                                    <span class="checkmark"></span>
                                </label>
                                <label for="" style="padding-top:4px;">Remember me</label>
                            </div>
                            <div>
                                <span style="padding: 8px 0;display: block;">By continuing, you agree to the <a class="hrefs" href="">Terms of use</a> and <a class="hrefs" href="">Privacy Policy.</a> </span>
                                <button type="submit" class="w-100">Log in</button>
                            </div>
                            <div class="d-flex align-items-center"><span class="m-auto"><a href="" class="hrefs" style="">Forgot your password</a></span></div>
                            <div class="d-flex justify-content-center">
                                <span>Don’t have an acount? <a href="" class="hrefs"> Sign up  </a></span>
                            </div>

                        </form>
                    <div class="pt-4 text-white">
                        You may login with <strong>admin/admin</strong> or <strong>demo/demo</strong>.<br>
                        To modify the username/password, please check out the code <code>app\models\User::$users</code>.
                    </div>
                </div>
            </div>
        </div>       
    </div>
</div>
