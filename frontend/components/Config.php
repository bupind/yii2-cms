<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace frontend\components;

use Yii;
use yii\base\Component;
use yii\web\Application;
use yii\base\InvalidConfigException;
use common\models\Theme;

class Config extends Component {

    public function theme() {
        $model = Theme::find()->where(['publish'=>1])->one();
        return $model->key;
    }

}
