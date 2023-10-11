<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "studentinfo".
 *
 * @property int $id
 * @property string $studentid
 * @property string $name
 * @property string $birthdate
 * @property int $parentid
 *
 * @property Parentinfo $parent
 */
class Studentinfo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'studentinfo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['studentid', 'name', 'birthdate', 'parentid'], 'required'],
            [['birthdate'], 'safe'],
            [['parentid'], 'integer'],
            [['studentid', 'name'], 'string', 'max' => 255],
            [['parentid'], 'exist', 'skipOnError' => true, 'targetClass' => Parentinfo::class, 'targetAttribute' => ['parentid' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'studentid' => 'Studentid',
            'name' => 'Name',
            'birthdate' => 'Birthdate',
            'parentid' => 'Parentid',
        ];
    }

    /**
     * Gets query for [[Parent]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getParent()
    {
        return $this->hasOne(Parentinfo::class, ['id' => 'parentid']);
    }
}
