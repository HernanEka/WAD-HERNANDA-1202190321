<?php

if (!isset($_SESSION)) {
	session_start();
}  

$koneksi = mysqli_connect('localhost','root','','wad_modul4');

if (!$koneksi) {
	echo "<script>
	alert('Failed to Connet Database')
	</script>";


	die("connetion failed.".mysqli_connect_error());
}

function pendaftaran($data)
{
	
	global $koneksi;

	$email = $data['email'];
	$nama = $data['nama'];
	$no_hp = $data['no_hp'];
	$password = mysqli_real_escape_string($koneksi,$data['password']);
	$passconfirm = mysqli_real_escape_string($koneksi,$data['passconfirm']);

	$cekdata = "SELECT email FROM users WHERE email = '$email'";
	$select = mysqli_query($koneksi,$cekdata);

	if (!mysqli_fetch_assoc($select)) {
		
		if ($password == $passconfirm) {
			
			$password = password_hash($password, PASSWORD_DEFAULT);

			$insert = "INSERT INTO users VALUES ('','$nama','$email','$password','$no_hp') ";
			mysqli_query($koneksi,$insert);

			$_SESSION['berhasil'] = "Berhasil Melakukan Registrasi";

			header('Location:Hernanda_login.php');
			exit();
		}else{

			$_SESSION['warning'] = 'Password tidak cocok';
			header('Location:Hernanda_registrasi.php');
			exit();

		}
	}else{

		$_SESSION['warning'] = 'Email sudah Terdaftar';
		header('Location:Hernanda_registrasi.php');
		exit();

	}

}

function login($data)
{
	global $koneksi;

	$email = $data['email'];
	$password = $data['password'];

	$cekdata = "SELECT * FROM users WHERE email = '$email'";
	$select = mysqli_query($koneksi,$cekdata);


	if (mysqli_num_rows($select) == 1) {
		
		$hasil = mysqli_fetch_assoc($select);

		if (password_verify($password,$hasil['password'])) {
			
			$_SESSION['id'] = $hasil['id'];
			$_SESSION['email'] = $hasil['email'];
			$_SESSION['nama'] = $hasil['nama'];
			$_SESSION['no_hp'] = $hasil['no_hp'];

			$_SESSION['berhasil'] = 'Berhasil Login!!';
			header('Location:Hernanda_index.php');
			exit();
		}else{

			$_SESSION['warning'] = 'Password Salah';
			header('Location:Hernanda_login.php');
			exit();
		}
	}else{

		$_SESSION['warning'] = 'Gagal Login';
		header('Location:Hernanda_login.php');
		exit();

	}
}

function pesan($data)
{
	global $koneksi;

	$id = $_SESSION['id'];
	$nama = $data['nama'];
	$tanggal = $data['tanggal'];

	if ($nama == 'Pulau Weh') {
		
		$lokasi = 'Kota Sabang';
		$harga = 6000000;
	}elseif ($nama == 'Pulau Karimun Jawa') {
		
		$lokasi = 'Jepara';
		$harga = 4000000;

	}elseif ($nama == 'Taman Laut Bunaken') {
		
		$lokasi = 'Sulawesi Utara';
		$harga = 7000000;
	}

	$insert = "INSERT INTO booking VALUES('','$id','$nama','$lokasi','$harga','$tanggal')";
	mysqli_query($koneksi,$insert);

	$_SESSION['berhasil'] = 'Berhasil Memesan Tiket';
	header('Location:Hernanda_index.php');
	exit();

}

function update($data)
{
	global $koneksi;

	$id = $_SESSION['id'];
	$nama = $data['nama'];
	$no_hp = $data['no_hp'];
	$password = mysqli_real_escape_string($koneksi, $data['password']);
	$password2 = mysqli_real_escape_string($koneksi, $data['passconfirm']);



	if ($password == $password2) {

		$password = password_hash($password, PASSWORD_DEFAULT);

		$query = "UPDATE users SET nama = '$nama', no_hp = '$no_hp', password = '$password' WHERE id = '$id' ";

		mysqli_query($koneksi, $query);

		$_SESSION['berhasil'] = 'Berhasil Update';

		header('Location:Hernanda_profile.php');

		exit();
	}
	$_SESSION['berhasil'] = 'salah';
}


if (isset($_GET['logout'])) {
	session_destroy();

	$_SESSION['berhasil'] = 'Berhasil Log Out';
	header('Location:Hernanda_login.php');
	exit();
}


?>