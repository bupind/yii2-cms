<?php

namespace frontend\modules\gallery\controllers;

use yii\web\Controller;
use common\models\Media;

/**
 * Default controller for the `gallery` module
 */
class DefaultController extends Controller {

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex() {
        $this->layout = '/iframe';
        $media = Media::find()->where(['user_id' => \Yii::$app->user->id])->all();
        return $this->render('index', ['media' => $media]);
    }

}
