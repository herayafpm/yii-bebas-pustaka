<?php

use yii\helpers\Url;
?>
<style>
    * {
        font-size: 12px;
    }

    .tbl {
        border-collapse: collapse;

    }

    .tbl th {
        border: 1px solid black;
        padding: 10px 10px;
        text-align: center;
        font-family: Times;
        font-size: 10pt;
    }

    .tbl td {
        border: 1px solid black;
        text-align: center;
        padding: 10px 10px;
        line-height: 1.5;
        /*padding: 2px;*/
        font-family: Times;
        font-size: 10pt;
    }
</style>
<page>
    <table style="margin-left: 10px;margin-right:10px">
        <tr>
            <td style="width: 50px;"></td>
            <td style="width: 100px;text-align:center">
                <img src="<?= Url::base(true) ?>/images/logo.png" style="height:100px" alt="" srcset="">
            </td>
            <td style="width: 400px">
                <p style="text-align: center; ">
                    <span style="font-size: 16px;">KEMENTERIAN PENDIDIKAN, KEBUDAYAAN,</span> <br />
                    <span style="font-size:16px;">RISET, DAN TEKNOLOGI</span> <br /> <br />
                    <span style="font-size:14px">UNIVERSITAS JENDERAL SOEDIRMAN</span> <br />
                    <span style="font-size: 14px; font-weight:bold">FAKULTAS KEDOKTERAN</span> <br />
                    <span style="font-size: 12px; font-weight:bold">PUSAT INFORMASI ILMIAH</span> <br />
                    Jalan Dr. Gumbreg 1 Mersi Purwokerto 53112 <br />
                    Telepon (0281) 622022, 624948, 624848 <br />
                    Surel : fk@unsoed.ac.id Laman : fk.unsoed.ac.id <br />
                </p>
            </td>
            <td style="width: 100px"></td>
        </tr>
        <tr>
            <td colspan="4">
                <hr />
            </td>
        </tr>
    </table>
    <div style="margin-left: 20px;margin-right:20px;position:relative">
        <div style="font-weight: bold;text-transform: uppercase;text-align:center;padding:10px;border:solid 1px #000;width:100px;position:absolute;right:0">
            FORM KP-1,2,3
        </div>
        <p style="font-weight: bold;text-transform: uppercase;text-decoration: underline;text-align:center;margin-top:60px">Syarat Bebas Pustaka</p>
        <div style="text-align:center;margin-top:-10px">Nomor : 26/UN23.PII.FK/VII/2021</div>
        <p>
            Nama Mahasiswa &nbsp;&nbsp;&nbsp;: <?= ucwords($mhs->nama) ?>
        </p>
        <p>
            NIM &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $mhs->nim ?>
        </p>
        <p>
            Jurusan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= ucwords($mhs->jurusan) ?>
        </p>
        <table class="tbl" style="width:100%">
            <tr>
                <th width="15">No</th>
                <th width="200" style="text-align: left;">Keterangan</th>
                <th width="100">Tanda Tangan</th>
                <th width="100">Stempel / Cap</th>
            </tr>
            <?php
            $no_ket = 1;
            foreach ($keterangans as $keterangan) : ?>
                <tr>
                    <td><?= $no_ket ?></td>
                    <td style="text-align: left;"><?= $keterangan->keterangan ?></td>
                    <td style="font-family: freeserif;"><?= $keterangan->cekTTD($mhs->nim) == 1 ? '&#10004;' : '&#10060;' ?></td>
                    <td style="font-family: freeserif;"><?= $keterangan->cekCap($mhs->nim) == 1 ? '&#10004;' : '&#10060;' ?></td>
                </tr>
            <?php
                $no_ket++;
            endforeach ?>
        </table>
        <br/>
        <br/>
        <table style="width: 100%;">
                <tr>
                    <td width="420"></td>
                    <td>
                        Purwokerto, <?=date("d-m-Y")?> <br/>
                        Ketua Pusat Informasi Ilmiah <br/>
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        dr. Susiana Candrawati, Sp.K.O.<br/>
                        NIP. 1979082220055012002
                    </td>
                </tr>
        </table>
    </div>
</page>