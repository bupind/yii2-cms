<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Menu;
/* @var $this yii\web\View */
/* @var $model mdm\admin\models\AuthItem */
/* @var $context mdm\admin\components\ItemController */

$this->title = 'Chỉnh sửa thông tin';
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $user->firstname . ' ' . $user->lastname, 'url' => ['assignment/view', 'id' => $user->id]];
?>
<div class="user-update">
    <div class="page-title">
        <div class="title_left">
            <h3>
                <?= Html::encode($this->title) ?>
            </h3>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="auth-item-form">
        <?php $form = ActiveForm::begin(['id' => 'profile-form']); ?>

        <div class="x_panel">
            <div class="x_title">
                <h2>Chỉnh sửa thông tin</h2>
                <?php
                echo Menu::widget([
                    'items' => [
                        ['label' => 'Thay đổi mật khẩu', 'template' => '<a href="{url}" class="btn-success">{label}</a>', 'url' => [ 'changepassword']]
                    ],
                    'options' => [ 'class' => 'nav navbar-right panel_toolbox'],
                ]);
                ?>
                <div class="clearfix"></div>
            </div>
            <div class="x_content"
                 <div class="row">
                    <div class="col-sm-6">
                        <?php if (Yii::$app->session->hasFlash('success')): ?>
                            <div class="alert alert-success" role="alert">
                                <?= Yii::$app->session->getFlash('success') ?>
                            </div>
                        <?php endif; ?>
                        <?= $form->field($model, 'id')->hiddenInput(['value' => $user->id])->label(FALSE) ?>

                        <?= $form->field($model, 'username')->textInput(['value' => $user->username]) ?>

                        <?= $form->field($model, 'email')->textInput(['value' => $user->email]) ?>

                        <?= $form->field($model, 'firstname')->textInput(['value' => $user->firstname]) ?>

                        <?= $form->field($model, 'lastname')->textInput(['value' => $user->lastname]) ?>

                        <?= Html::submitButton('Chỉnh sửa', ['class' => 'btn btn-primary', 'name' => 'profile-button']) ?>
                    </div>
                </div>
            </div>
            <?php ActiveForm::end(); ?>
        </div>


    </div>

</div>
