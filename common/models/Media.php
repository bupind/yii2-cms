<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;


/**
 * This is the model class for table "language".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property integer $publish
 */
class Media extends ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'giicms_media';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['type'], 'string', 'max' => 50],
            [['url', 'path'], 'string', 'max' => 255]
        ];
    }
}
