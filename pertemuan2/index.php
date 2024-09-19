<?php 
require 'function.php';
$mahasiswa = query("SELECT * FROM Mahasiswa");
<!-- $connect = mysqli_connect("localhost","root","","Universitas"); -->

$result = mysqli_query($connect,"SELECT * FROM Mahasiswa");
// mysqli_fetch_row() -> pake index
// mysqli_fetch_assoc() -> pake nama
// mysqli_fetch_array() -> gabungan dari yg dua di atas
// mysqli_fetch_object() -> pake panah
// $mhs = mysqli_fetch_row($result);
// echo $mhs;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <a href="tambah.php">Tambah data Mahasiswa</a>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
        <tr>
            <?php $i = 1;?>
            <?php while($row=mysqli_fetch_assoc($result)):?>
            <td><?php echo $i;?></td>
            <td>
                <a href="">ubah</a>
                <a href="">hapus</a>
            </td>
            <td><img src="img/<?php $row["gambar"];?>" width="50"></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["nrp"]; ?></td>
            <td><?= $row["email"]; ?></td>
            <td><?= $row["jurusam"]; ?></td>
        </tr>
        <?php $i++;?>
        <?php endwhile;?>
    </table>
</body>
</html>