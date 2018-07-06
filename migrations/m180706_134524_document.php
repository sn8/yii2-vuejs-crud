<?php

use yii\db\Schema;
use yii\db\Migration;

/**
 * Class m180706_134524_document
 */
class m180706_134524_document extends Migration
{
    public function up()
    {
        $this->createTable('document', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . ' NOT NULL',
            'description' => Schema::TYPE_TEXT . ' NOT NULL'
        ]);
    }

    public function down()
    {
        $this->dropTable('document');
    }
}
