<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "endereco".
 *
 * @property int $id
 * @property string|null $rua
 * @property string|null $cidade
 * @property string|null $bairro
 * @property string|null $estado
 * @property string|null $numero
 * @property string|null $cep
 * @property string|null $pontoRefencia
 *
 * @property Animal[] $animals
 */
class Endereco extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'endereco';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['rua'], 'required', 'message'=>'Por favor informe o nome da rua '],
            [['cidade'],  'required', 'message'=>'Por favor preencha a cidade'],
            [['estado'],  'required', 'message'=>'Por favor informe seu estado'], 
            [['numero'],  'required', 'message'=>'Por favor informe o número'],
            [['cep'], 'required',  'message'=>'Por favor informe seu cep'],
            [['pontoRefencia'], 'string', 'max' => 255],
          
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'rua' => 'Rua',
            'cidade' => 'Cidade',
            'bairro' => 'Bairro',
            'estado' => 'Estado',
            'numero' => 'Numero',
            'cep' => 'Cep',
            'pontoRefencia' => 'Ponto Refência',
        ];
    }

    /**
     * Gets query for [[Animals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAnimals()
    {
        return $this->hasMany(Animal::className(), ['endereco_id' => 'id']);
    }
}
