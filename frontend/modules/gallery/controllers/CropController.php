<?php

namespace frontend\modules\gallery\controllers;

use yii\web\Controller;

/**
 * Default controller for the `gallery` module
 */
class CropController extends Controller {

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex() {
        $this->layout = '/iframe';
        return $this->render('index');
    }

}
