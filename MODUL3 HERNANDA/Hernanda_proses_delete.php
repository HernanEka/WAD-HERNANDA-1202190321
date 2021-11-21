<?php 

include 'Hernanda_koneksi.php';

$id = $_GET['id'];

$select = "SELECT gambar FROM buku_table WHERE id_buku = '$id'";

$query = mysqli_query($koneksi,$select);

$isi = mysqli_fetch_assoc($query);

$lama = $isi['gambar'];
unlink('src/img/uploads/'.$lama);


$delete = "DELETE FROM buku_table WHERE id_buku = '$id'";

$hasil = mysqli_query($koneksi,$delete);



header("location:Hernanda_home.php");

 ?>