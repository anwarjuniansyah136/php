<?php
    $connect = mysqli_connect("localhost","root","","Universitas");

    function query($query){
        global $connect;
        $result = mysqli_query($query,$connect);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows = $row;
        }
        return $rows;
    }

    function upload(){
        $namaFile = $_FILES['gambar']['name'];
        $ukuranFile = $_FILES['gambar']['size'];
        $error = $_FILES['gambar']['error'];
        $tmpName = $_FILES['gambar']['tmpn_ame'];
        if($error === 4){
            echo "<script>
            alert('pilih gambar terlebih dahulu');
            </script>";
            return false;
        }
        $ekstensiGambarvalid
    }
?>