<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model bariew\commentModule\models\Item */

$this->title = Yii::t('modules/comment', 'Create {modelClass}', [
    'modelClass' => 'Item',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('modules/comment', 'Items'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="item-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
