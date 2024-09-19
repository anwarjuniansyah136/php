<?php 
    // untuk menentukan hari, tanggal,bulan,tahun
    echo date("l, d-M-Y");
    // untuk menentukan 100 hari dari sekarang
    echo date("l", time()*60*60*24*100);
    // mktime()
    // jam,menit,detik,bulan,tanggal,tahun
    echo date("l",mktime(0,0,0,8,25,1985));
    // strtotime
    echo date("l",strtotime("25 aug 1985"));
?>