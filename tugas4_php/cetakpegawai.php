<?php
require 'Pegawai.php';
//ciptakan object
$neur = new Pegawai('001','Neur','Manager','Islam','Menikah');
$wawi = new Pegawai('002','Wawi','Asmen','Islam','Single');
$bela = new Pegawai('003','Bela','Manager','Kristen','Single');
$nazel = new Pegawai('004','Nazel','Asmen','Budha','Menikah');
echo '<h3 align="center">'.Pegawai::PERUSAHAAN.'</h3>';
$neur->mencetak();
$wawi->mencetak();
$bela->mencetak();
$nazel->mencetak();

echo 'Jumlah Data Pegawai: '.Pegawai::$jml;