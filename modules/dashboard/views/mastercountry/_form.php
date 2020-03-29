<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MasterCountryModel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="master-country-model-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'country_ID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'country_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
