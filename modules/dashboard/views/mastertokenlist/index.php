<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\search\MasterTokenListSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Master Token List Models');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-token-list-model-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Master Token List Model'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'access_token',
            'usedTime',
            'access_token_status',
            'token_type',
            //'source',
            //'authurl',
            //'createdTime',
            //'createdUserId',
            //'updatedTime',
            //'updatedUserId',
            //'deletedTime',
            //'deletedUserId',
            //'key',
            //'error_message:ntext',
            //'next_limit_time',
            //'quota_remaining',
            //'is_limit',
            //'error_code',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
