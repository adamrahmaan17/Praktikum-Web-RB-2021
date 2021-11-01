<?php
//Include file koneksi ke database
include "koneksi.php";
//menerima nilai dari kiriman form input-barang'

$nim = $_POST["nim"];
$nama=$_POST["nama"];
$prodi=$_POST["prodi"];
$angkatan=$_POST["angkatan"];

//Query input menginput data kedalam tabel barang
$sql="insert into barang (nim,nama,prodi,angkatan) values('$nim','$nama','$prodi','$angkatan')";

//Mengeksekusi/menjalankan query diatas
$hasil=mysqli_query($kon,$sql);
?>
