<?php

use yii\bootstrap\ActiveForm;

$this->title = 'Đăng bài';
$path = Yii::$app->urlManager->createAbsoluteUrl($this->theme->baseUrl . '/webroot/');
?>
<section class="content" style="padding-top: 30px">


    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-md-12">
                <!-- POST -->
             
                    <?= $this->render('_form', ['model' => $model]) ?>
       

                <!-- POST -->

            </div>

        </div>
    </div>






</section>