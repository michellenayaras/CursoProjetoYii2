<?php

use yii\db\Migration;

/**
 * Class m210929_031357_endereco
 */
class m210929_031357_endereco extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('endereco', [
            'id'=>$this->primaryKey(),
            'rua'=>$this->string(),
            'cidade'=>$this->string(),
            'bairro'=>$this->string(),
            'estado'=>$this->string(),
            'numero'=>$this->string(),
            'cep'=>$this->string(),
            'pontoRefencia'=>$this->string(),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('endereco');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210929_031357_endereco cannot be reverted.\n";

        return false;
    }
    */
}
