<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProxySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Proxies';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="proxy-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Proxy', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <p>
        <?= Html::a('Bulk download proxies', ['upload'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute' => 'ip',
                'value' => function ($model) {
                    return Html::textInput(
                        '',
                        $model->ip,
                        [
                            'class' => 'form-control',
                            'data-role' => 'ip'
                        ]
                    );
                },
                'format' => 'raw'
            ],
            [
                'attribute' => 'port',
                'value' => function ($model) {
                    return Html::textInput(
                        '',
                        $model->port,
                        [
                            'class' => 'form-control',
                            'data-role' => 'port'
                        ]
                    );
                },
                'format' => 'raw'
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
