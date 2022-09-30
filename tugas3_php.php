<?php
//array scalar
$m1 = ['nim'=>'11001', 'nama'=>'Angga', 'nilai'=>90];
$m2 = ['nim'=>'11002', 'nama'=>'Anggi', 'nilai'=>75];
$m3 = ['nim'=>'11003', 'nama'=>'Bambang', 'nilai'=>50];
$m4 = ['nim'=>'11004', 'nama'=>'Bayu', 'nilai'=>80];
$m5 = ['nim'=>'11005', 'nama'=>'Cerly', 'nilai'=>45];
$m6 = ['nim'=>'11006', 'nama'=>'Anji', 'nilai'=>88];
$m7 = ['nim'=>'11007', 'nama'=>'Airlangga', 'nilai'=>73];
$m8 = ['nim'=>'11008', 'nama'=>'Bobi', 'nilai'=>53];
$m9 = ['nim'=>'11009', 'nama'=>'Bintang', 'nilai'=>98];
$m10 = ['nim'=>'11010', 'nama'=>'Carlos', 'nilai'=>89];

//array associative
$judul = ['NO' ,'NIM' , 'NAMA' , 'NILAI' , 'GRADE' , 'KETERANGAN' , 'PREDIKAT'];
$data = [$m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8, $m9, $m10];

$nilaim = array_column($data , 'nilai');

$max = max($nilaim);
$min = min($nilaim);
$sum = array_sum($nilaim);
?>
<html>
<table cellpadding="10">
        <thead bgcolor="grey">
<tr>
    <?php
        foreach($judul as $jdl){
            ?>
            <th><?= $jdl?></th>
    <?php        
        }
    ?>
</tr>
<tbody>
    <?php
    $no = 1;

   

    foreach($data as $m){
    $warna = $no % 2 == 1 ? 'yellow' : 'cyan';
      if($m['nilai'] >= 90 && $m['nilai'] <= 100) $grade = 'A';
        else if($m['nilai'] >= 80 && $m['nilai'] <= 89) $grade = 'B';
        else if($m['nilai'] >= 70 && $m['nilai'] <= 79) $grade = 'C';
        else if($m['nilai'] >= 60 && $m['nilai'] <= 69) $grade = 'D';
        else if($m['nilai'] >= 0 && $m['nilai'] <= 59) $grade = 'E';
        else $grade = '';
    $keterangan = ($m['nilai']>=60) ? "LULUS":"TIDAK LULUS";
    switch ($grade) {
        case 'A': $predikat = 'MEMUASKAN'; break;
        case 'B': $predikat = 'BAGUS'; break;
        case 'C': $predikat = 'CCUKUP'; break;
        case 'D': $predikat = 'KURANG'; break;
        case 'E': $predikat = 'BURUK'; break;
        default: $predikat = '';
    }

    ?>

    <tr bgcolor="<?= $warna; ?>" align="center" >
      <td><?= $no ?></td>
      <td><?= $m['nim'] ?></td>
      <td><?= $m['nama'] ?></td>
      <td><?= $m['nilai'] ?></td>
      <td><?= $grade ?></td>
      <td><?= $keterangan ?></td>
      <td><?= $predikat ?></td>
    </tr>

    <?php
    $no++;
    }

    ?>

</tbody>
<tfoot bgcolor="grey">
    <tr>
    <td colspan="6" align="center">
        NILAI TERTINGGI <br>
        NILAI TERENDAH <br>
        TOTAL NILAI

    </td>

    <td colspan="1" align="center">
        <?= $max?><br>
        <?= $min?><br>
        <?= $sum?>
    </td>
    </tr>

</tfoot>
</table>
</html>