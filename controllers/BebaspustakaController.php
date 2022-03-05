<?php

namespace app\controllers;

use app\models\Keterangan;
use app\models\Mhs;

class BebaspustakaController extends \yii\web\Controller
{
    public function actionIndex($nim = null)
    {
        $mhs = Mhs::find()->where(['nim' => $nim])->one();
        $keterangans = Keterangan::find()->all();
        return $this->render('index',['mhs' => $mhs,'keterangans' => $keterangans]);
    }

}
