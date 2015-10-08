<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "major".
 *
 * @property integer $major_id
 * @property string $major_category_code
 * @property string $major_category
 * @property string $major_sub_category_code
 * @property string $major_sub_category
 * @property string $major_code
 * @property string $major_name
 * @property string $major_level
 */
class Major extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'major';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['major_category_code', 'major_sub_category_code', 'major_code', 'major_level'], 'string', 'max' => 10],
            [['major_category'], 'string', 'max' => 20],
            [['major_sub_category', 'major_name'], 'string', 'max' => 40],
            [['number_of_school'], 'int', 'max' => 11],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'major_id' => 'Major ID',
            'major_category_code' => 'Major Category Code',
            'major_category' => 'Major Category',
            'major_sub_category_code' => 'Major Sub Category Code',
            'major_sub_category' => 'Major Sub Category',
            'major_code' => 'Major Code',
            'major_name' => 'Major Name',
            'major_level' => 'Major Level',
            'number_of_school' => "Number of Schools",
        ];
    }

    public function getSubCategories()
    {
        return $this->hasMany(Major::className(), ['major_id' => 'major_sub_category_code']);
    }
}
