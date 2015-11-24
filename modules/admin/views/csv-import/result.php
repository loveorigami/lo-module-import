<?php
/**
 * @var array|bool $res
 */
?>

<h1><?=Yii::t('import', 'Import finished')?></h1>

<?if(!$res):?>

    <div class="alert alert-danger"><?=Yii::t('import', 'Import error')?></div>

<?else:?>

    <div class="alert alert-success">

        <p><?=Yii::t('import', 'Success')?>: <?=$res["ok"]?></p>
        <p><?=Yii::t('import', 'Errors')?>: <?=$res["errors"]?></p>

    </div>

<?endif;?>