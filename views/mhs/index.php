<?php

use app\models\Mhs;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Mhs');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mhs-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Mhs'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute' => 'nim',
                'label' => 'NIM',
                'format' => 'raw',
                'value' => function($data){
                    return Html::a($data->nim,Url::toRoute(['bebaspustaka/index','nim' => $data->nim]));
                }
            ],
            'nama',
            'jurusan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Mhs $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
