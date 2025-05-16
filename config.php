<?php

// host
$databaseHost = '127.0.0.1';
$databaseName = 'inventory';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

//cek koneksi
if(!$mysqli){
    // jika gagal
    die("koneksi database gagal");
}else{
    // jika berhasil
    echo " berhasil";
}