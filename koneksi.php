<?php 

$nama_server="localhost";
$user="root";
$pwd="";
$db="diabetes_knn";



$koneksi=mysqli_connect($nama_server,$user,$pwd,$db);
if(!$koneksi){
    echo "Gagal Koneksi";
}



?>