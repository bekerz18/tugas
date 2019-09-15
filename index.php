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
        <form class="form-registrasi" method="post" action="print.php" enctype="multipart/form-data">
            <div class="form-kanan col-50">
                <div class="fill">
                    <img src="images/logopatas.png" alt="" style="width:30%;height:auto;margin:0 auto;display:block"/>          
                    <h1 align="center">ID Card Generator</h1>
                    <p>Silahkan masukan beberapa data dan klik register untuk mendapatkan ID Card.</p>
                </div>
            </div>
            <div class="form-kiri col-50">
                <div class="fill" style="margin-left:10px;">
                        <div class="chunk">
                            <input type="text" class="kontrol"placeholder="Nomor Identitas Siswa" name="nis" required/>
                        </div>
                        <div class="chunk">
                            <input type="text" class="kontrol" placeholder="Nama Lengkap" name="nama" required autofocus/>
                            <input type="radio" name="kelamin" value="Laki-Laki">Laki-Laki</input>
                            <input type="radio" name="kelamin" value="Perempuan">Perempuan</input>
                        </div>
                        <div class="chunk">
                            <input type="text" class="kontrol"placeholder="Tempat Lahir" name="tempat_lahir" required/>
                            <input type="date" class="kontrol" name="tanggal_lahir" required/>
                        </div>
                        <div class="chunk">
                            <textarea class="kontrol"  placeholder="Alamat Lengkap" name="alamat_lengkap" required></textarea>
                        </div>
                        <div class="chunk">
                            <select class="kontrol" name="agama"required>
                                <option value="Silahkan Pilih">Silahkan Pilih Agama</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen Protestan">Kristen Protestan</option>
                                <option value="Kristen Katolik">Kristen Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Konghucu">Konghucu</option> 
                            </select>
                            <input class="kontrol" name="foto" id="foto" type="file" value="Pas Foto"/>
                        </div>
                </div>
                <div class="chunk" style="margin-top:-42px;">
                    <input class="kontrol col-100" name="submit" type="submit" value="Register"/>
                </div>
            </div>
        </form>
</body>
</html>