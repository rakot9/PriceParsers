<?php

use yii\db\Schema;
use yii\db\Migration;

class m150618_082109_create_table_log extends Migration
{
    public $tablePrefix;
    public $tableName;

    public function before()
    {
        $this->tablePrefix = Yii::$app->getDb()->tablePrefix;
        $this->tableName = $this->tablePrefix. 'log';
    }

    public function up()
    {
        $this->before();

        $tableOptions = null;

        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';

        }
        $this->createTable($this->tableName, [
            'id' => Schema::TYPE_PK,
            'model' => Schema::TYPE_STRING . '(32) NOT NULL',
            'message' => Schema::TYPE_TEXT . ' NOT NULL',
            'date' => Schema::TYPE_TIMESTAMP . ' DEFAULT CURRENT_TIMESTAMP'
        ], $tableOptions);

        $this->createIndex('log_id', $this->tableName , 'id', true);
    }

    public function down()
    {
        $this->before();
        $this->dropIndex('log_id', $this->tableName);
        $this->dropTable($this->tableName);
    }
}
