<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Keterangan */

$this->title = Yii::t('app', 'Create Keterangan');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Keterangans'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="keterangan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
