<?php 

session_start();

include_once 'Hernanda_config.php';
include 'Hernanda_header.php';

if (isset($_POST['register'])) {
	
	pendaftaran($_POST);
}


?>

<?php if (isset($_SESSION['warning'])) {?>
	<div class="alert alert-warning alert-dismissible fade show" role="alert">
		<?=$_SESSION['warning'];?>
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>	
<?php } unset($_SESSION['warning']);?>

<section id="regis">
	<div class="container">
		<div class="shadow-lg p-3 my-5 mx-auto bg-body rounded" style="width: 600px;">
			<div class="text-center">
				<h2>Registrasi</h2>
			</div>
			<hr>
			<form action="" method="POST">
				<div class="mb-2">
					<label for="nama" class="form-label">Nama</label>
					<input type="text" name="nama" id="nama" placeholder="Masukan Nama Lengkap" class="form-control">
				</div>
				<div class="mb-2">
					<label for="email" class="form-label">E-mail</label>
					<input type="email" name="email" id="email" placeholder="Masukan Email Anda" class="form-control">
				</div>
				<div class="mb-2">
					<label for="no_hp" class="form-label">No Handphone</label>
					<input type="number" name="no_hp" id="no_hp" placeholder="Masukan Nama Lengkap" class="form-control">
				</div>
				<div class="mb-2">
					<label for="password" class="form-label">Password</label>
					<input type="password" name="password" id="password" placeholder="Masukan Nama Lengkap" class="form-control">
				</div>
				<div class="mb-2">
					<label for="passconfirm" class="form-label">Konfirmasi Password</label>
					<input type="password" name="passconfirm" id="passconfirm" placeholder="Masukan Nama Lengkap" class="form-control">
				</div>
				<div class="text-center">
					<button type="submit" name="register" class="btn btn-primary px-5">Daftar</button>
					<div class="form-text">Anda Sudah Punya Akun? <a href="Hernanda_login.php">Login</a></div>
				</div>
			</form>
		</div>
	</div>
</section>

<?php 

include 'Hernanda_footer.php';

?>