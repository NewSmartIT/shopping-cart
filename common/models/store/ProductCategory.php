<?php

namespace common\models\store;

use common\models\User;
use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "product_category".
 *
 * @property integer $id
 * @property string $cat_name
 * @property string $slug
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 */
class ProductCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    private $_cats = [];
    public static function tableName()
    {
        return 'product_category';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
            BlameableBehavior::className(),
        ];
    }
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cat_name'], 'required'],
            [['status', 'parent', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['cat_name', 'slug'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cat_name' => 'Tên danh mục',
            'slug' => 'Slug',
            'parent' => 'Danh mục cha',
            'status' => 'Trạng thái',
            'created_at' => 'Ngày tạo',
            'updated_at' => 'Ngày sửa',
            'created_by' => 'Người tạo',
            'updated_by' => 'Người sửa',
        ];
    }
    //get user created
    public function getCreated()
    {
        return $this->hasOne(User::className(), ['id' => 'created_by']);
    }
    //get user updated
    public function getUpdated()
    {
        return $this->hasOne(User::className(), ['id' => 'updated_by']);
    }
    //get parent
    public function getParentShow()
    {
        return $this->hasOne(ProductCategory::className(), ['id' => 'parent']);
    }
    //get status
    public function getStatus()
    {
        $data = ProductCategory::find()->all();
        return $data;
    }
    //get parent va phuong phap de quy
    public function getParent($parent = 0,$leval = '')
    {
        $data = ProductCategory::find()->where(['parent'=>$parent])->all();
        $leval .= ' ---';
        if($data):
            foreach($data as $value):
                if($value->parent == 0)
                {
                    $leval = '';
                }
                $this->_cats[$value->id] = $leval.$value->cat_name;
                $this->getParent($value->id,$leval);
            endforeach;

        endif;
        return $this->_cats;
    }
}
