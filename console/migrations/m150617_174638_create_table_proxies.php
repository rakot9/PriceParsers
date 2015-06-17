<?php

use yii\db\Schema;
use yii\db\Migration;

class m150617_174638_create_table_proxies extends Migration
{
    public $tablePrefix;
    public $tableName;

    public function before()
    {
        $this->tablePrefix = Yii::$app->getDb()->tablePrefix;
        $this->tableName = $this->tablePrefix. 'proxies';
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
            'ip' => Schema::TYPE_STRING . '(32) NOT NULL',
            'country' => Schema::TYPE_STRING . '(32) NOT NULL',
            'city' => Schema::TYPE_STRING . '(32) NOT NULL',
            'is_show' => Schema::TYPE_SMALLINT . ' UNSIGNED NOT NULL DEFAULT 1',
            'for_city' => Schema::TYPE_STRING . '(32) NOT NULL'
        ], $tableOptions);

        $this->createIndex('proxy_id', $this->tableName , 'id', true);
    }

    public function down()
    {
        $this->before();
        $this->dropIndex('proxy_id', $this->tableName);
        $this->dropTable($this->tableName);
    }
}
