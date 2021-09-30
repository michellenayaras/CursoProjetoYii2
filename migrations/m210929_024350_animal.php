<?php

use yii\db\Migration;

/**
 * Class m210929_024350_animal
 */
class m210929_024350_animal extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('animal', [
            'id'=>$this->primaryKey(),
            'nome'=>$this->string(),
            'sexo'=>$this->string(),
            'cor'=>$this->string(),
            'raca'=>$this->string(),
            'porte'=>$this->date(),
            'idade'=>$this->string(),
            'foto'=>$this->string(), 
            'usuario_id'=>$this->integer(),
            'endereco_id'=>$this->integer(),
        ]);

        $this->addForeignKey(
            'usuario_Fk', //nome da chave estrangeira
            'animal', //qual tabela possui a chave estrangeira
            'usuario_id', //qual campo é a chave estrangeira
            'usuario', //tabela que é referenciada
            'id', //campo que é referenciado
            'RESTRICT' //tipo de implicação no update e no delete
        );

        $this->addForeignKey(
            'endereco_Fk', //nome da chave estrangeira
            'animal', //qual tabela possui a chave estrangeira
            'endereco_id', //qual campo é a chave estrangeira
            'endereco', //tabela que é referenciada
            'id', //campo que é referenciado
            'RESTRICT' //tipo de implicação no update e no delete
        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            'usuario_FK',
            'animal'
        );
        $this->dropForeignKey(
            'endereco_FK',
            'animal'
        );
        $this->dropTable('animal');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210929_024350_animal cannot be reverted.\n";

        return false;
    }
    */
}
