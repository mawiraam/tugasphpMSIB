<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<div class="container px-5 my-5">

    <form id="contactForm" data-sb-form-api-token="API_TOKEN" method="POST">
        <div class="form-floating mb-3">
            <input class="form-control" name="namaPegawai" type="text" placeholder="Nama Pegawai" data-sb-validations="required" required />
            <label for="namaPegawai">Nama Pegawai</label>
            <div class="invalid-feedback" data-sb-feedback="namaPegawai:required">Nama Pegawai is required.</div>
            
        </div>
        <div class="form-floating mb-3">
            <select class="form-select" name="agama" aria-label="Agama">
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Budha">Budha</option>
                <option value="Hindu">Hindu</option>
            </select>
            <label for="agama">Agama</label>
        </div>
        <div class="mb-3">
            <label class="form-label d-block" >Jembatan</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="manager" type="radio" value="Manager" name="jabatan" data-sb-validations="required"required />
                <label class="form-check-label" for="manager">Manager</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="asisten" type="radio" value="Asisten" name="jabatan" data-sb-validations="required"required />
                <label class="form-check-label" for="asisten">Asisten</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="kabag" type="radio" value="Kabag" name="jabatan" data-sb-validations="required"required />
                <label class="form-check-label" for="kabag">Kabag</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="staff" type="radio" value="Staff" name="jabatan" data-sb-validations="required"required />
                <label class="form-check-label" for="staff">Staff</label>
            </div>
            <div class="invalid-feedback" data-sb-feedback="jembatan:required">One option is required.</div>
        </div>
        <div class="mb-3">
            <label class="form-label d-block">Status</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="menikah" type="radio" value="Menikah" name="status" data-sb-validations="required"required />
                <label class="form-check-label" for="menikah">Menikah</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="sIngle" type="radio" value="Single" name="status" data-sb-validations="required"required />
                <label class="form-check-label" for="sIngle">SIngle</label>
            </div>
            <div class="invalid-feedback" data-sb-feedback="status:required">One option is required.</div>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" name="jumlahAnak" type="text" placeholder="Jumlah Anak" data-sb-validations="required"required />
            <label for="jumlahAnak">Jumlah Anak</label>
            <div class="invalid-feedback" data-sb-feedback="jumlahAnak:required">Jumlah Anak is required.</div>
        </div>

        <div class="d-grid">
            <button class="btn btn-primary btn-lg" id="submitButton" type="submit" name="submit">Submit</button>
        </div>
    </form>
</div>

</div>
<div class="alert alert-warning" role="alert">
<?php

    if(isset($_POST['namaPegawai'])){
        $nama = $_POST['namaPegawai'];
        echo 'Nama Pegawai = '. $nama .'</br>';
    }
    if(isset($_POST['agama'])){
        $agama = $_POST['agama'];
        echo 'Agama = '. $agama .'</br>';
    }
    if(isset($_POST['jabatan'])){
        $jabatan = $_POST['jabatan'];
        echo 'Jabatan = '. $jabatan .'</br>';
    }
    if(isset($_POST['status'])){
        $status = $_POST['status'];
        echo 'Status = '. $status .'</br>';
    }
    if(isset($_POST['jumlahAnak'])){
        $anak = $_POST['jumlahAnak'];
        echo 'Jumlah Anak = '. $anak .'</br>';
    }
?>
<?php
if(isset($_POST['jabatan'])){
switch($jabatan){
    case 'Manager':
        $gaji = 20000000;
        echo 'Gaji Anda = Rp.'.number_format($gaji).'</br>'; 
        break;
    case 'Asisten':
        $gaji = 15000000;
        echo 'Gaji Anda = Rp.'.number_format($gaji).'</br>'; 
        break;
    case 'Kabag':
        $gaji = 10000000;
        echo 'Gaji Anda = Rp.'.number_format($gaji).'</br>'; 
        break;
    case 'Staff':
        $gaji = 4000000;
        echo 'Gaji Anda = Rp.'.number_format($gaji).'</br>'; 
        break;
}
$tunjab = $gaji * 0.2;
echo 'Tunajangan Jabatan Rp.'.number_format($tunjab).'</br>';
}
if(isset($_POST['status'])){
if($status == "Menikah"){
    if($anak <=2){
        $tunstat = $gaji * 0.05;
        echo 'Tunajangan Status Rp.'.number_format($tunstat).'</br>';
    }else if($anak >=3 && $anak <= 5){
        $tunstat = $gaji * 0.1;
        echo 'Tunajangan Status Rp.'.number_format($tunstat).'</br>';
    }else if($anak >= 5){
        $tunstat = $gaji * 0.15;
        echo 'Tunajangan Status Rp.'.number_format($tunstat).'</br>';
    }
}else if($status == "Single"){
    $tunstat = 0;
    echo 'Belum dapat Tunajangan Keluarga </br>';
    }

if(isset($_POST['submit'])){
$gajikotor = $gaji + $tunjab + $tunstat;
echo 'Gaji Kotor = Rp.'.number_format($gajikotor).'</br>';
}

$zakat = ($agama == "Islam" && $gajikotor >=6000000) ? $gajikotor * 0.025 : 0;
echo 'Zakat = Rp.'.number_format($zakat).'</br>';

$gajibersih = $gajikotor - $zakat;
echo 'Gaji Bersih = Rp.'.number_format($gajibersih);
}
?>
</div>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>