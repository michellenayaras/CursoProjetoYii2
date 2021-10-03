<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property int $id
 * @property string|null $nome
 * @property string|null $senha
 * @property string|null $telefone
 * @property string|null $email
 * @property string|null $dataNascimento
 * @property string|null $foto
 *
 * @property Animal[] $animals
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [ 
            [['nome'], 'required', 'message'=>'Por favor informe seu nome'],
            [['senha'],  'required', 'message'=>'Por favor preencha a senha'],
            [['telefone'],  'required', 'message'=>'Por favor informe seu telefone'], 
            [['email'],  'required', 'message'=>'Por favor informe seu email'],
            [['dataNascimento'], 'required',  'message'=>'Por favor informe a data de nascimento'],
            [['foto'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'senha' => 'Senha',
            'telefone' => 'Telefone',
            'email' => 'E-mail',
            'dataNascimento' => 'Data Nascimento',
            'foto' => 'Foto',
        ];
    }

    /**
     * Gets query for [[Animals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAnimals()
    {
        return $this->hasMany(Animal::className(), ['usuario_id' => 'id']);
    }
}
