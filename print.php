<?php
    $nis    = $_POST['nis'];
    $nama = $_POST['nama'];
    $kelamin = $_POST['kelamin'];
    $ttl = $_POST['tempat_lahir'];
    $tanggal= ($_POST['tanggal_lahir']);
    $alamat = $_POST['alamat_lengkap'];
    $agama = $_POST['agama'];
    $foto = $_FILES['foto']['name'];
    $tmp_foto = $_FILES['foto']['tmp_name'];
    $status_foto = $_FILES['foto']['error'];
    $target_dir= "images/";
    $target_file= $target_dir . basename($foto);
       if($status_foto == 0){
        move_uploaded_file($tmp_foto, $target_file);
    }else{
        if($kelamin == "Laki-Laki"){
            $foto ="man.png"; 
        }elseif($kelamin == "Perempuan"){
            $foto ="female.png";
        }
    }
    
    
          

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Registration - SMA NEGERI 4 TASIKMALAYA</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="col-50 form-registrasi" style="background-color: #FAFAFA;height:300px;border-radius:12px;">
        <div class="fill-id">
            <div id="header col-100">
                <div class="logo col-20" style="float:left;">
                    <img src="images/logopatas.png" style="width:60%;"alt="">
                </div>
                <div class="kop col-80" style="float:left;">
                    <span class="sekolah">SMA NEGERI 4 Tasikmalaya</span>
                    <span class="alamat">Jl. LetKol RE DJaelani, Cilembang, Kec. Cihideung, Tasikmalaya</span>
                </div>
            </div>
            <div id="data">
                <table>
                    <tr>
                        <td>NIS</td>
                        <td>: <?= $nis;?></td>
                    </tr>
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>: <?= $nama;?></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>: <?= $kelamin;?></td>
                    </tr>
                    <tr>
                        <td>Tempat, Tanggal Lahir</td>
                        <td>: <?= "$ttl,  $tanggal"; ?></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>: <?= $alamat;?></td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>: <?= $agama;?></td>
                    </tr>
                </table>
            </div>
            <img src="images/<?= $foto;?>" class="foto" alt="">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,32L26.7,37.3C53.3,43,107,53,160,74.7C213.3,96,267,128,320,138.7C373.3,149,427,139,480,122.7C533.3,107,587,85,640,96C693.3,107,747,149,800,160C853.3,171,907,149,960,122.7C1013.3,96,1067,64,1120,80C1173.3,96,1227,160,1280,197.3C1333.3,235,1387,245,1413,250.7L1440,256L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path></svg>
        </div>
    </div>
    </body>
</html>