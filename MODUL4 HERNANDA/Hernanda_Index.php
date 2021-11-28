<?php 

session_start();

include_once 'Hernanda_config.php';
include 'Hernanda_header.php';

if (isset($_POST['pesan'])) {
	
	pesan($_POST);
}

?>

<?php if (isset($_SESSION['berhasil'])) {?>
	<div class="alert alert-success alert-dismissible fade show" role="alert">
		<?=$_SESSION['berhasil'];?>
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>	
<?php } unset($_SESSION['berhasil']);?>

<section id="Index">
	<div class="container">
		<div class="banner text-center <?=$text?> mt-5 py-5" style="background-color: <?=$_COOKIE['background_color']?>;">
			<h1><strong>EAD Travel</strong></h1> 
		</div>
		<div class="card-group mb-5 shadow-lg body-bg rounded">
			<div class="card">
				<img src="https://www.toursabang.co.id/wp-content/uploads/2019/08/pulau-weh-aceh-sabang.gif" class="card-img-top" alt="..." style="max-height: 200px;">
				<div class="card-body">
					<h5 class="card-title">Pulau Weh, Kota Sabang</h5>
					<p class="card-text" style="min-height: 200px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p>
				</div>
				<ul class="list-group list-group-flush">
					<li class="list-group-item"><strong>Rp. 6.000.000</strong></li>
				</ul>
				<div class="card-footer text-center">
					<?php if (isset($_SESSION['id'])) {?>
						<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="Pulau Weh">Pesan Tiket</button>
					<?php } else{ ?>
						<button style="width: 350px;" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#example">
							Pesan Tiket
						</button>
					<?php } ?>
					
				</div>
			</div>
			<div class="card">
				<img src="https://cms.daihatsu.co.id/uploads/tipsandtrick/1604546423174.jpeg" class="card-img-top" alt="..." style="max-height: 200px;">
				<div class="card-body">
					<h5 class="card-title">Pulau Karimun Jawa, Jepara</h5>
					<p class="card-text" style="min-height: 200px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p>
				</div>
				<ul class="list-group list-group-flush">
					<li class="list-group-item"><strong>Rp. 4.000.000</strong></li>
				</ul>
				<div class="card-footer text-center">
					<?php if (isset($_SESSION['id'])) {?>
						<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="Pulau Karimun Jawa">Pesan Tiket</button>
					<?php } else{ ?>
						<button style="width: 350px;" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#example">
							Pesan Tiket
						</button>
					<?php } ?>
				</div>
			</div>
			<div class="card">
				<img src="https://www.itrip.id/wp-content/uploads/2020/10/Taman-Nasional-Bunaken.jpg" class="card-img-top" alt="..." style="max-height: 200px;">
				<div class="card-body">
					<h5 class="card-title">Taman Laut Bunaken, Sulawesi Utara</h5>
					<p class="card-text" style="min-height: 200px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p>
				</div>
				<ul class="list-group list-group-flush">
					<li class="list-group-item"><strong>Rp. 7.000.000</strong></li>
				</ul>
				<div class="card-footer text-center">
					<?php if (isset($_SESSION['id'])) {?>
						<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="Taman Laut Bunaken">Pesan Tiket</button>
					<?php } else{ ?>
						<button style="width: 350px;" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#example">
							Pesan Tiket
						</button>
					<?php } ?>
				</div>
			</div>
		</div>

		<!-- Modal belum login	 -->
		<div class="modal fade" id="example" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Peringatan!!!</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<form action="" method="POST">
						<div class="modal-body">
							Anda Harus Login sebelum memesan
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
							<a href="Hernanda_login.php" class="btn btn-primary">Login</a>
						</div>
					</form>
				</div>
			</div>
		</div>

		<!-- Modal kondisi login -->
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Pilih Tanggal</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>

					<form action="" method="POST">
						<div class="modal-body">
							<div class="mb-3">
								<input type="text" name="nama" class="form-control" id="recipient-name" hidden>
							</div>
							<div class="mb-3">
								<input type="date" name="tanggal" class="form-control">
							</div>

						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
							<button type="submit" name="pesan" class="btn btn-primary">Pesan</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Buat bikin Modal auto fill sesuai button yang dipencet -->
<script type="text/javascript">
	var exampleModal = document.getElementById('exampleModal')
	exampleModal.addEventListener('show.bs.modal', function (event) {
  // Button that triggered the modal
  var button = event.relatedTarget
  // Extract info from data-bs-* attributes
  var recipient = button.getAttribute('data-bs-whatever')
  // If necessary, you could initiate an AJAX request here
  // and then do the updating in a callback.
  //
  // Update the modal's content.
  var modalTitle = exampleModal.querySelector('.modal-title')
  var modalBodyInput = exampleModal.querySelector('.modal-body input')

  modalBodyInput.value = recipient
})
</script>

<?php 

include 'Hernanda_footer.php';

?>