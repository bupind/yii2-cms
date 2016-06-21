<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model mdm\admin\models\AuthItem */
/* @var $context mdm\admin\components\ItemController */

$this->title = 'Cập nhật  ' . $user->firstname . ' ' . $user->lastname;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $user->firstname . ' ' . $user->lastname, 'url' => ['assignment/view', 'id' => $user->id]];
$this->params['breadcrumbs'][] = 'Cập nhật';
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
        <?php $form = ActiveForm::begin(['id' => 'signup-form']); ?>

        <div class="x_panel">
            <div class="row">
                <div class="col-sm-6">
                    <?= $form->field($model, 'id')->hiddenInput(['value' => $user->id])->label(FALSE) ?>

                    <?= $form->field($model, 'username')->textInput(['value' => $user->username]) ?>

                    <?= $form->field($model, 'email')->textInput(['value' => $user->email]) ?>

                    <?= $form->field($model, 'firstname')->textInput(['value' => $user->firstname]) ?>

                    <?= $form->field($model, 'lastname')->textInput(['value' => $user->lastname]) ?>

                    <?= Html::submitButton('Cập nhật', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>
            </div>
            <?php ActiveForm::end(); ?>
        </div>


    </div>

</div>
