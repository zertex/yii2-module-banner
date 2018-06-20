<?php
/**
 * Created by PhpStorm.
 * User: floor12
 * Date: 19.06.2018
 * Time: 20:22
 *
 * @var $model \floor12\banner\models\AdsPlace
 * @var $this \yii\web\View
 *
 */

use yii\widgets\ActiveForm;
use yii\helpers\Html;

$form = ActiveForm::begin([
    'options' => ['class' => 'modaledit-form'],
    'enableClientValidation' => true
]);


?>
<div class="modal-header">
    <h2><?= $model->isNewRecord ? "Добавление плащадки" : "Редактирование плащадки"; ?></h2>
</div>
<div class="modal-body">

    <?= $form->errorSummary($model); ?>

    <div class="row">
        <div class="col-md-9">
            <?= $form->field($model, 'title') ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'status')->checkbox() ?>
            <?= $form->field($model, 'slider')->checkbox() ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'desktop_width') ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'desktop_height') ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'mobile_width') ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'mobile_height') ?>
        </div>
    </div>

</div>

<div class="modal-footer">
    <?= Html::a('Отмена', '', ['class' => 'btn btn-default modaledit-disable']) ?>
    <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить', ['class' => 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>
