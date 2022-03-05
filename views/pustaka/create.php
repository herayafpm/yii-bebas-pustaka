<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pustaka */

$this->title = Yii::t('app', 'Create Pustaka');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pustakas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pustaka-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
