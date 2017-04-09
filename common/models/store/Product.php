<?php

namespace common\models\store;

use common\models\User;
use trntv\filekit\behaviors\UploadBehavior;
use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
use common\models\store\ProductAttachment;

/**
 * This is the model class for table "product".
 *
 * @property integer $id
 * @property string $name
 * @property integer $category_id
 * @property string $slug
 * @property integer $price
 * @property string $description
 * @property string $image_base_url
 * @property string $image_base_path
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 */
class Product extends \yii\db\ActiveRecord
{
    private $_cats;
    public $product_image;
    public $attachments;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
            BlameableBehavior::className(),

            [
                'class' => UploadBehavior::className(),
                'attribute' => 'product_image',
                'pathAttribute' => 'image_base_path',
                'baseUrlAttribute' => 'image_base_url'
            ],

            [
            'class' => UploadBehavior::className(),
            'attribute' => 'attachments',
            'multiple' => true,
            'uploadRelation' => 'productAttachments',
            'pathAttribute' => 'path',
            'baseUrlAttribute' => 'base_url',
            'orderAttribute' => 'order',
            'typeAttribute' => 'type',
            'sizeAttribute' => 'size',
            'nameAttribute' => 'name',
            ],
        ];
    }
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'category_id'], 'required'],
            [['category_id', 'price', 'status', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['name', 'slug', 'description', 'image_base_url', 'image_base_path'], 'string', 'max' => 255],
            [['product_image', 'attachments'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Tên sản phẩm',
            'category_id' => 'Danh mục',
            'slug' => 'Slug',
            'price' => 'Giá',
            'description' => 'Mô tả ngắn',
            'image_base_url' => 'Đường dẫn ảnh',
            'image_base_path' => 'Image Base Path',
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
        return $this->hasOne(ProductCategory::className(), ['id' => 'category_id']);
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

    public function getProductAttachments()
    {
        return $this->hasMany(\common\models\store\ProductAttachment::className(), ['product_id' => 'id']);
    }
}
