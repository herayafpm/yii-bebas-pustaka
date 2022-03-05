<?php
/* @var $this yii\web\View */

use yii\bootstrap4\ActiveForm;

?>
<p>Nama mahasiswa: <?= $mhs->nama ?></p>
<p>NIM: <?= $mhs->nim ?></p>
<p>Jurusan: <?= $mhs->jurusan ?></p>

<div class="table-responsive">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">Keterangan</th>
                <th class="text-center">Tanda Tangan</th>
                <th class="text-center">Cap / Stempel</th>
            </tr>
            <?php $form = ActiveForm::begin(); ?>
            <?php
            $no_keterangan = 1;
            foreach ($keterangans as $keterangan) :
            ?>
                <tr>
                    <td class="text-center"><?= $no_keterangan ?></td>
                    <td class="text-center"><?= $keterangan->keterangan ?></td>
                    <td class="text-center"><input type="checkbox" value="<?= $keterangan->cekTTD($mhs->nim) ?>" name="ttd[<?= $keterangan->id ?>]"></td>
                    <td class="text-center"><input type="checkbox" value="<?= $keterangan->cekCap($mhs->nim) ?>" name="cap[<?= $keterangan->id ?>]"></td>
                </tr>
            <?php
                $no_keterangan++;
            endforeach ?>
            <?php ActiveForm::end(); ?>
        </thead>
    </table>
</div>