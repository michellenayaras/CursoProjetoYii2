<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AnimalSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="animal-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nome') ?>

    <?= $form->field($model, 'sexo') ?>

    <?= $form->field($model, 'cor') ?>

    <?= $form->field($model, 'raca') ?>

    <?php // echo $form->field($model, 'porte') ?>

    <?php // echo $form->field($model, 'idade') ?>

    <?php // echo $form->field($model, 'foto') ?>

    <?php // echo $form->field($model, 'usuario_id') ?>

    <?php // echo $form->field($model, 'endereco_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
