<?php

namespace app\controllers;

use app\models\Cap;
use app\models\Keterangan;
use app\models\Mhs;
use app\models\Ttd;

class BebaspustakaController extends \yii\web\Controller
{
    public function actionIndex($nim = null)
    {
        $mhs = Mhs::find()->where(['nim' => $nim])->one();
        $keterangans = Keterangan::find()->all();
        if ($this->request->isPost) {
            $no_ket = 0;
            Ttd::deleteAll(['nim' => $nim]);
            Cap::deleteAll(['nim' => $nim]);
            if($this->request->post('ttd') !== null || $this->request->post('cap') !== null){
                foreach ($keterangans as $ket) {
                    $ttd = $this->request->post('ttd')[$ket->id] ?? '';
                    $cap = $this->request->post('cap')[$ket->id] ?? '';
                    if(!empty($ttd)){
                        $ttd = new Ttd();
                        $ttd->nim = $nim;
                        $ttd->id_keterangan = $ket->id;
                        $ttd->save(false);
                    }
                    if(!empty($cap)){
                        $cap = new Cap();
                        $cap->nim = $nim;
                        $cap->id_keterangan = $ket->id;
                        $cap->save(false);
                    }
                    $no_ket++;
                }
                \Yii::$app->session->setFlash('success','Berhasil menyimpan');
            }
            return $this->refresh();
        } else {
            return $this->render('index',['mhs' => $mhs,'keterangans' => $keterangans]);
        }
        
    }

}
