<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
$categorias = []

//$categoria_nombre = \app\models\Categorias::findOne($model->nombre);

/* @var $this yii\web\View */
/* @var $model app\models\Tasks */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tasks-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput() ?>

    <?= $form->field($model, 'descripcion')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'categoria')->dropDownList(\yii\helpers\ArrayHelper::getColumn(\app\models\Categorias::find()->all(), 'nombre'), ['prompt'=>'Seleciona la categoria']) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
