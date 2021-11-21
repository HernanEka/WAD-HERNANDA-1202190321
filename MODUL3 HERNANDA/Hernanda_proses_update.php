<?php 

include 'Hernanda_koneksi.php';



$id = $_GET['id'];

$select = "SELECT gambar FROM buku_table WHERE id_buku = '$id'";

$query = mysqli_query($koneksi,$select);

$isi = mysqli_fetch_assoc($query);

$lama = $isi['gambar'];

if (isset($_POST['submit'])) {
	$judul = $_POST['judul'];
	$penulis = $_POST['penulis'];
	$tahun = $_POST['tahun'];
	$deskripsi = $_POST['deskripsi'];
	$bahasa = $_POST['bahasa'];
	$tag = $_POST['tag'];

}

$tag = implode(", ", $tag);

$filename = $_FILES['img']['name'];

if ($filename != '') {

	$nama_gambar = $isi['gambar'];
	$rand = rand(1111,9999);
	$ekstensi =  array('png','jpg','jpeg','gif');
	$filename = $_FILES['img']['name'];
	$ukuran = $_FILES['img']['size'];
	$ext = pathinfo($filename, PATHINFO_EXTENSION);


	unlink('src/img/uploads/'.$lama);

	if(!in_array($ext,$ekstensi) ) {
		header("location:Hernanda_detail.php?id=$id&alert=ukuran");
	}else{
		if($ukuran < 1044070){		
			$xx = $rand.'_'.$filename;
			move_uploaded_file($_FILES['img']['tmp_name'], 'src/img/uploads/'.$rand.'_'.$filename);
			$update = "UPDATE buku_table SET judul_buku = '$judul', penulis_buku = '$penulis', tahun_terbit = '$tahun', deskripsi = '$deskripsi', gambar = '$xx', bahasa = '$bahasa', tag = '$tag' WHERE id_buku = '$id'";

			$hasil = mysqli_query($koneksi, $update);

			header("location:Hernanda_detail.php?id=$id");
		}else{
			header("location:Hernanda_detail.php?id=$id&alert=ukuran");
		}
	}
	
}else{
	$update = "UPDATE buku_table SET judul_buku = '$judul', penulis_buku = '$penulis', tahun_terbit = '$tahun', deskripsi = '$deskripsi', bahasa = '$bahasa', tag = '$tag' WHERE id_buku = '$id'";

	$hasil = mysqli_query($koneksi, $update);
	header("location:Hernanda_detail.php?id=$id");
}



?>