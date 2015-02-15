<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel bariew\commentModule\models\SearchItem */
/* @var $dataProvider yii\data\ActiveDataProvider */
?>
<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        'user_id',
        'content:ntext',
        'created_at:datetime',
    ],
]); ?>