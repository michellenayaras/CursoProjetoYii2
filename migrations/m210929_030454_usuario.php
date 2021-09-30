<?php

use yii\db\Migration;

/**
 * Class m210929_030454_usuario
 */
class m210929_030454_usuario extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('usuario', [
            'id'=>$this->primaryKey(),
            'nome'=>$this->string(),
            'senha'=>$this->string(),
            'telefone'=>$this->string(),
            'email'=>$this->string(),
            'dataNascimento'=>$this->string(),
            'foto'=>$this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('usuario');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210929_030454_usuario cannot be reverted.\n";

        return false;
    }
    */
}
