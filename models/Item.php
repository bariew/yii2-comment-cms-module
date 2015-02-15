<?php

namespace bariew\commentModule\models;

use Yii;

/**
 * This is the model class for table "comment_item".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $parent_class
 * @property integer $parent_id
 * @property integer $branch_id
 * @property string $content
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $active
 */
class Item extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comment_item';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'parent_id', 'branch_id', 'created_at', 'updated_at', 'active'], 'integer'],
            [['content'], 'string'],
            [['parent_class'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('modules/comment', 'ID'),
            'user_id' => Yii::t('modules/comment', 'User ID'),
            'parent_class' => Yii::t('modules/comment', 'Parent Class'),
            'parent_id' => Yii::t('modules/comment', 'Parent ID'),
            'branch_id' => Yii::t('modules/comment', 'Branch ID'),
            'content' => Yii::t('modules/comment', 'Content'),
            'created_at' => Yii::t('modules/comment', 'Created At'),
            'updated_at' => Yii::t('modules/comment', 'Updated At'),
            'active' => Yii::t('modules/comment', 'Active'),
        ];
    }
}
