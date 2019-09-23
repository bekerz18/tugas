<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Registration - SMA NEGERI 4 TASIKMALAYA</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="plugins/datatables/datatables.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
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
        <div class="clear"></div>
        
        <div class="data col-90">
            <div class="judul-data">
                <span>Data</span>
            </div>
            <table id="data-regis" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Nama Lengkap</th>
                        <th>Jenis Kelamin</th>
                        <th>Tempat, Tanggal Lahir</th>
                        <th>Agama</th>
                        <th>Alamat</th>
                        <th>Foto</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $filename = "db.txt";
                        $handle = fopen($filename, "rb");
                        $contents = fread($handle, filesize($filename));
                        fclose($handle);
                        echo $contents;
                    ?>
                </tbody>
            </table>
        </div>
        
        <script src="js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="plugins/datatables/datatables.js"></script>
        <script>
            $(document).ready(function() {
                $('#data-regis').DataTable( {
                    dom: 'Bfrtip',
                    buttons: [
                        'copy', 'pdf', 'print'
                    ]
                } );
            } );
        </script>
</body>
</html>