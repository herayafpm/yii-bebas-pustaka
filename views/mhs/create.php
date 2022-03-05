<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Mhs */

$this->title = Yii::t('app', 'Create Mhs');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mhs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mhs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
