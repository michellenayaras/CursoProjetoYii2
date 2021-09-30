<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EnderecoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="endereco-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'rua') ?>

    <?= $form->field($model, 'cidade') ?>

    <?= $form->field($model, 'bairro') ?>

    <?= $form->field($model, 'estado') ?>

    <?php // echo $form->field($model, 'numero') ?>

    <?php // echo $form->field($model, 'cep') ?>

    <?php // echo $form->field($model, 'pontoRefencia') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
