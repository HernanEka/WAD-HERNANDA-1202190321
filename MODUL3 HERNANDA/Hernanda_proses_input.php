<?php

include 'Hernanda_koneksi.php';

if (isset($_POST['submit'])) {
	$judul = $_POST['judul'];
	$penulis = $_POST['penulis'];
	$tahun = $_POST['tahun'];
	$deskripsi = $_POST['deskripsi'];
	$bahasa = $_POST['bahasa'];
	$tag = $_POST['tag'];

}


$tag = implode(", ", $tag);

$rand = rand(1111,9999);
$ekstensi =  array('png','jpg','jpeg','gif');
$filename = $_FILES['img']['name'];
$ukuran = $_FILES['img']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);



if(!in_array($ext,$ekstensi) ) {
	header("location:Hernanda_tambah.php?alert=ekstensi");
}else{
	if($ukuran < 1044070){		
		$xx = $rand.'_'.$filename;
		move_uploaded_file($_FILES['img']['tmp_name'], 'src/img/uploads/'.$rand.'_'.$filename);
		$insert = "INSERT INTO buku_table(judul_buku, penulis_buku, tahun_terbit, deskripsi, gambar, tag, bahasa) VALUES('$judul', '$penulis', '$tahun', '$deskripsi', '$xx', '$tag', '$bahasa')";

		$hasil = mysqli_query($koneksi, $insert);
		
		header("location:Hernanda_home.php?alert=berhasil");
	}else{
		header("location:Hernanda_tambah.php?alert=ukuran");
	}
}

?>