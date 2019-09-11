<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Registration - SMA NEGERI 4 TASIKMALAYA</title>
</head>
<body>
    <form method="POST" action="print.php">
        <label>Nama Lengkap</label>
        <input type="text" name="nama" required autofocus/>
        <label>Nomor Identitas Siswa</label>
        <input type="text" name="nis" required/>
        <label>Tempat, Tanggal Lahir</label>
        <input type="text" name="tempat_lahir" required/>
        <input type="date" name="tanggal_lahir" required/>
        <label>Agama</label>
        <select name="agama" required>
            <option value="Silahkan Pilih">Silahkan Pilih</option>
            <option value="Islam">Islam</option>
            <option value="Kristen Protestan">Kristen Protestan</option>
            <option value="Kristen Katolik">Kristen Katolik</option>
            <option value="Hindu">Hindu</option>
            <option value="Buddha">Buddha</option>
            <option value="Konghucu">Konghucu</option> 
        </select>
        <label>Gol Darah</label>
        <select name="darah" required>
            <option value="Silahkan Pilih">Silahkan Pilih</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="AB">AB</option>
            <option value="O">O</option>
            <option value="-">-</option>
        </select>
        <label>Alamat</label>
        <textarea name="alamat_lengkap" required></textarea>
        <input name="submit" type="submit"/>
    </form>
</body>
</html>