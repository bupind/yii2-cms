<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "post".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $content
 */
class Theme extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'giicms_themes';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['key'], 'required', 'message' => '{attribute} không được rỗng'],
        ];
    }
}
