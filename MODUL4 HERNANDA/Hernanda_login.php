<?php 

session_start();

include_once 'Hernanda_config.php';
include_once 'Hernanda_header.php';

if (isset($_POST['login'])) {

	if (isset($_POST['remember'])) {
		
		setcookie('email', $_POST['email'], strtotime('+7 days'), "/");
		setcookie('password', $_POST['password'], strtotime('+7 days'), "/");
	}

	if ($_POST['email'] != $_COOKIE['email'] ) {
		$background_color = '#FA6961';
		setcookie('background_color', $background_color, strtotime('+7 days'), "/");
	}
	
	login($_POST);
}


?>

<?php if (isset($_SESSION['berhasil'])) {?>
	<div class="alert alert-success alert-dismissible fade show" role="alert">
		<?=$_SESSION['berhasil'];?>
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>	
<?php } unset($_SESSION['berhasil']);?>


<?php if (isset($_SESSION['warning'])) {?>
	<div class="alert alert-warning alert-dismissible fade show" role="alert">
		<?=$_SESSION['warning'];?>
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>	
<?php } unset($_SESSION['warning']);?>

<section id="login">
	<div class="container" style="height: 70vh;">
		<div class="shadow-lg p-3 my-5 mx-auto bg-body rounded" style="width: 600px;">
			<div class="text-center">
				<h2>Login</h2>
			</div>
			<hr>
			<form action="" method="POST">
				<div class="mb-2">
					<label for="email" class="form-label">E-mail</label>
					<input type="email" name="email" id="email" placeholder="Masukan Email Anda" class="form-control" <?php if (isset($_COOKIE['email'])) {
						echo 'value='.$_COOKIE['email'];
					} ?>>
				</div>
				<div class="mb-2">
					<label for="password" class="form-label">Password</label>
					<input type="password" name="password" id="password" placeholder="Masukan Nama Lengkap" class="form-control" <?php if (isset($_COOKIE['password'])) {
						echo 'value='.$_COOKIE['password'];
					} ?>>
				</div>
				<div class="form-check">
					<input type="checkbox" name="remember" id="remember" value="remember" class="form-check-input">
					<label for="remember" class="form-check-label">Remember Me</label>
				</div>
				<div class="text-center">
					<button type="submit" name="login" class="btn btn-primary px-5">Login</button>
					<div class="form-text">Anda Sudah Punya Akun? <a href="Hernanda_login.php">Daftar</a></div>
				</div>
			</form>
		</div>
	</div>
</section>

<?php 

include 'Hernanda_footer.php';

?>