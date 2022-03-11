<?php
/* @var $this yii\web\View */

use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;
?>
<p>Nama mahasiswa: <?= $mhs->nama ?></p>
<p>NIM: <?= $mhs->nim ?></p>
<p>Jurusan: <?= $mhs->jurusan ?></p>
<div class="table-responsive">
    <?php $form = ActiveForm::begin(); ?>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">Keterangan</th>
                <th class="text-center">Tanda Tangan</th>
                <th class="text-center">Cap / Stempel</th>
            </tr>
            <?php
            $no_keterangan = 1;
            foreach ($keterangans as $keterangan) :
            ?>
                <tr>
                    <td class="text-center"><?= $no_keterangan ?></td>
                    <td class="text-center"><?= $keterangan->keterangan ?></td>
                    <td class="text-center"><input type="checkbox" value="1" name="ttd[<?= $keterangan->id ?>]" <?= $keterangan->cekTTD($mhs->nim) == 1?'checked':'' ?>></td>
                    <td class="text-center"><input type="checkbox" value="1" name="cap[<?= $keterangan->id ?>]" <?= $keterangan->cekCap($mhs->nim) == 1?'checked':'' ?>></td>
                </tr>
            <?php
                $no_keterangan++;
            endforeach ?>
        </thead>
    </table>
    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>