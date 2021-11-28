<?php 

session_start();

include_once 'Hernanda_config.php';
include 'Hernanda_header.php';

$id = $_SESSION['id'];

$query = "SELECT * FROM users WHERE id = '$id'";

$select = mysqli_query($koneksi,$query);

$data = mysqli_fetch_assoc($select);

if (isset($_POST['update'])) {
	
	if (isset($_POST['warna'])) {
		
		setcookie('background_color', $_POST['warna'], strtotime('+7 days'), "/");
	}

	update($_POST);
}

?>

<?php if (isset($_SESSION['berhasil'])) {?>
	<div class="alert alert-success alert-dismissible fade show" role="alert">
		<?=$_SESSION['berhasil'];?>
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>	
<?php } unset($_SESSION['berhasil']);?>

<section id="profile">
	<div class="container">
		<div class="shadow-lg p-3 my-5 mx-auto bg-body rounded">
			<div class="text-center my-3">
				<h3>Profile</h3>
			</div>
			<form action="" method="POST">
				<div class="row mb-3">
					<div class="col-md-3">
						<label>Email</label>
					</div>
					<div class="col-md-9">
						<label><?=$data['email']?></label>
					</div>
				</div>
				<div class="row mb-3">
					<div class="col-md-3">
						<label for="nama" class="form-label">Nama</label>
					</div>
					<div class="col-md-9">
						<input type="text" name="nama" id="nama" class="form-control" value="<?=$data['nama']?>">	
					</div>
				</div>
				<div class="row mb-3">
					<div class="col-md-3">
						<label for="no_hp" class="form-label">No Handphone</label>
					</div>
					<div class="col-md-9">
						<input type="number" name="no_hp" id="no_hp" class="form-control" value="<?=$data['no_hp']?>">	
					</div>
				</div>
				<hr class="my-5">
				<div class="row mb-3">
					<div class="col-md-3">
						<label for="password" class="form-label">Password</label>
					</div>
					<div class="col-md-9">
						<input type="password" name="password" id="password" class="form-control" required>	
					</div>
				</div>
				<div class="row mb-3">
					<div class="col-md-3">
						<label for="passconfirm" class="form-label">Konfirmasi Password</label>
					</div>
					<div class="col-md-9">
						<input type="password" name="passconfirm" id="passconfirm" class="form-control" required>	
					</div>
				</div>
				<div class="row mb-3">
					<div class="col-md-3">
						<label for="background" class="form-label">Tema Warna</label>
					</div>
					<div class="col-md-9">
						<select id="background" name="warna" class="form-select">
							<option value="#FA6961">Light Theme Red</option>
							<option value="#3B1917">Dark Theme Red</option>
						</select>	
					</div>
				</div>
				<div class="text-center">
					<button type="submit" name="update" class="btn btn-primary">Update</button>
					<button type="reset" class="btn btn-warning">Cancel</button>
				</div>
			</form>
		</div>
	</div>
</section>

<?php  

include 'Hernanda_footer.php';


?>