<?php 
$mahasiswa = [
    [
        "nrp" => "043040023",
        "nama" => "Sandika Galih",
        "email" =>"sandikagalih@gmail.com",
        "jurusan" =>"Teknik Informatika",
        "gambar" =>"gambar1.jpg"
    ],
    [
        "nrp" => "043040024",
        "nama" => "Anwar Juniansyah",
        "email" =>"amwarjuni@gmail.com",
        "jurusan" =>"Teknik Informatika",
        "gambar" =>"gambar2.jpg"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul><?php foreach($mahasiswa as $mhs) : ?>
        <li>
            <a href="latihan2.php?
            nama=<?= $mhs["nama"];?>
            &nrp=<?= $mhs["nrp"];?>
            &email=<?= $mhs["email"];?>
            &jurusan=<?= $mhs["jurusan"];?>
            &gambar=<?= $mhs["gambar"];?>">
            <?=$mhs["nama"];?></a>
        </li>
        <?php endforeach;?>
    </ul>    
</body>
</html>