<?php

namespace frontend\modules\forum\controllers;

use yii\web\Controller;
use common\models\Post;

/**
 * Create controller for the `forum` module
 */
class PostController extends Controller {

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionCreate() {
        $model = new Post();
        return $this->render('create', ['model' => $model]);
    }

}
