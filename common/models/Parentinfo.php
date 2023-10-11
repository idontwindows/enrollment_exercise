<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "parentinfo".
 *
 * @property int $id
 * @property string $name
 * @property string $contactnumber
 * @property string $email
 * @property string $relation
 *
 * @property Studentinfo[] $studentinfos
 */
class Parentinfo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'parentinfo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'name', 'contactnumber', 'email', 'relation'], 'required'],
            [['id'], 'integer'],
            [['name', 'contactnumber', 'email', 'relation'], 'string', 'max' => 255],
            ['email', 'email'],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'contactnumber' => 'Contact Number',
            'email' => 'Email',
            'relation' => 'Relation',
        ];
    }

    /**
     * Gets query for [[Studentinfos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStudentinfos()
    {
        return $this->hasMany(Studentinfo::class, ['parentid' => 'id']);
    }
}
