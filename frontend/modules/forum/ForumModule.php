<?php

namespace frontend\modules\forum;

/**
 * forum module definition class
 */
class ForumModule extends \yii\base\Module {

    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'frontend\modules\forum\controllers';
    public $layout = '/forum';
    /**
     * @inheritdoc
     */
    public function init() {
        parent::init();
        // custom initialization code goes here
    }

}
