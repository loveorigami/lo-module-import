<?php
/**
 * @var \lo\modules\import\models\CsvModel $model модель
 * @var \lo\core\db\ActiveRecord $importModel
 */
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

$this->title = Yii::t('import', 'Attributes to columns mapping');
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
    <div class="co-xs-12 col-md-8 col-lg-6">

        <table class="table table-striped">
            <tbody>
                <?php
                $form = ActiveForm::begin() ?>

                <?foreach($importModel->getCsvAttributes() as $attr):?>
                    <tr>
                        <td>
                            <span class="label label-default"><?=$importModel->getAttributeLabel($attr)?>:</span>
                        </td>
                        <td>
                            <?= $form->field($model, "mapping[$attr]",
                                [
                                    'template' => '<div class="col-md-12">{input}</div>']
                            )->dropDownList($model->getColumns(), ['prompt'=>'']) ?>
                        </td>
                    </tr>
                <?endforeach;?>
            </tbody>
        </table>
        <div class="form-group">

            <?= Html::submitButton(Yii::t('import', 'Start import'), ['class' => 'btn btn-primary']) ?>

            <?= Html::a(Yii::t('import', 'Back'), ['index'], ['class'=>'btn btn-default']) ?>

        </div>

        <?php ActiveForm::end() ?>
    </div>
</div>