<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\setting\Setups */

$this->title = '修改设置: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => '设置信息', 'url' => ['index']];
$this->params['breadcrumbs'][] = '修改设置';
?>
<div class="setups-update">


    <div class="setups-form box box-primary">
        <div class="box-header">
            <?= Html::a('返回', ['index'], ['class' => 'btn btn-primary btn-flat']) ?>
        </div>
        <?php $form = ActiveForm::begin(); ?>
        <div class="box-body table-responsive">

            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'keywords')->textarea(['maxlength' => true]) ?>

            <?= $form->field($model, 'description')->textarea(['maxlength' => true]) ?>

            <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'about')->textarea(['maxlength' => true]) ?>

        </div>
        <div class="box-footer">
            <?= Html::submitButton('保存', ['class' => 'btn btn-success btn-flat']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>

</div>
