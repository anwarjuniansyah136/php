<?php
if(!isset($_GET["nama"])||
!isset($_GET["nrp"])||
!isset($_GET["email"])||
!isset($_GET["jurusan"])||
!isset($_GET["gambar"])){
    header("Location:latihan1.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><img src="<?php $_GET["gambar"];?>"></li>
        <li><?= $_GET["nama"];?></li>
        <li><?= $_GET["nrp"];?></li>
        <li><?= $_GET["email"];?></li>
        <li><?= $_GET["jurusan"];?></li>
    </ul>
    <a href="latihan1.php">Kembali ke daftar Mahasiswa</a>
</body>
</html>