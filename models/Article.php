<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "article".
 *
 * @property integer $id
 * @property integer $userId
 * @property integer $type
 * @property string $title
 * @property string $content
 * @property string $ext
 * @property string $ctime
 * @property string $mtime
 */
class Article extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'article';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['userId'], 'required'],
            [['userId', 'type'], 'integer'],
            [['ext'], 'string'],
            [['ctime', 'mtime'], 'safe'],
            [['title', 'content'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'userId' => 'User ID',
            'type' => 'Type',
            'title' => 'Title',
            'content' => 'Content',
            'ext' => 'Ext',
            'ctime' => 'Ctime',
            'mtime' => 'Mtime',
        ];
    }
}
