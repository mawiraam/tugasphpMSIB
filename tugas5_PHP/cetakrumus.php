<?php
require 'lingkaran.php';
require 'persegipanjang.php';
require 'segitiga.php';

$ar_thead = ['NO','Nama Bidang','Keterangan' ,'Luas' ,'Keliling'];

$lingkaran = new lingkaran();
$persegipanjang = new Persegi_panjang();
$segitiga = new Segitiga();

$bidangDatar = [$lingkaran , $persegipanjang , $segitiga];
?>
<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Belajar Bangun Ruang</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>

    <body>
        <h3 class="text-center">Rumus Bangun Datar</h3>
        <table class="table table-striped">
    <?php 
        $no = 1;
    ?>
    <thead>
        <tr>
            <?php
                foreach($ar_thead as $jdl){
            ?>
            <th><?= $jdl ?></th>
            <?php }?>
        </tr>
    </thead>
    <tbody>

        <?php foreach($bidangDatar as $bangun){?>

        <tr>
            <td><?=$no++ ?></td>
            <td><?=$bangun->namaBidang()?></td>
            <td><?=$bangun->keterangan()?></td>
            <td><?=$bangun->luasBidang()?></td>
            <td><?=$bangun->kelilingBidang()?></td>
        </tr>

    <?php } ?>
    </tbody>
</table>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
        </script>
</body>