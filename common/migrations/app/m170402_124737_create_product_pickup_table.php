<?php

use yii\db\Migration;

/**
 * Handles the creation of table `product_pickup`.
 */
class m170402_124737_create_product_pickup_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('product_pickup', [
            'id' => $this->primaryKey(),
            'product_id' => $this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('product_pickup');
    }
}
