<?php

use yii\db\Migration;

/**
 * Class m211008_214658_unique
 */
class m211008_214658_unique extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('usuario','email','string unique');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->alterColumn('usuario','email','string');

    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211008_214658_unique cannot be reverted.\n";

        return false;
    }
    */
}
