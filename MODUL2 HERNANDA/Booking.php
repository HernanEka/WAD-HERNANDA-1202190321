<!DOCTYPE html>
<html>
<head>
	<title>Booking Now</title>
	<link rel="stylesheet" type="text/css" href="src/css/bootstrap.min.css">

	<style type="text/css">
	.form-group{
		margin-bottom: 10px;
	}

	<?php 

		$gedung != $_POST['gedung'];

	 ?>
</style>
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-center">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="Home.php" class="nav-link">Home</a>
				</li>
				<li class="navbar-nav">
					<a href="Booking.php" class="nav-link">Booking</a>
				</li>
			</ul>
		</nav>
	</header>
	<section id="body">
		<div class="container">
			<div class="text-center bg-dark" style="margin-top: 25px; margin-bottom: 25px; color: #e4e4e4; padding-top: 10px; padding-bottom: 10px; font-size: 14px;">Ayo Pesan Sekarang!!!</div>
			<div class="card" style="margin-bottom: 50px;">
				<div class="row" style="margin: 25px 25px 25px 25px;">
					<div class="col-md-6 text-center">
						<?php if ($gedung == 'nusantara') { ?>
							<img style="width: 400px; margin-top: 100px;" src="https://pbs.twimg.com/media/CPZA3bRU8AAeWHk.jpg">
						<?php } ?>
						<?php if ($gedung == 'garuda') { ?>
							<img style="width: 400px; margin-top: 100px;" src="https://media-cdn.tripadvisor.com/media/photo-s/1a/25/06/c5/garuda-hall.jpg">
						<?php } ?>
						<?php if ($gedung == 'tuch') { ?>
							<img style="width: 400px; margin-top: 100px;" src="https://static.republika.co.id/uploads/images/inpicture_slide/ribuan-mahasiswa-telkom-university-mengikuti-ceramah-ketua-mpr-_170814200711-294.jpg">
						<?php } ?>
						<?php if ($gedung == '') { ?>
							<img style="width: 400px; margin-top: 100px;" src="https://pbs.twimg.com/media/CPZA3bRU8AAeWHk.jpg">
						<?php } ?>
					</div>
					<div class="col-md-6">
						<form action="My Booking.php" method="POST">
							<div class="form-group">
								<label for="name" class="form-label">Name</label>
								<input type="text" name="name" class="form-control" value="Hernanda_1202190321" readonly>
							</div>
							<div class="form-group">
								<label for="tanggal" class="form-label">Event Date</label>
								<input type="date" name="tanggal" class="form-control">
							</div>
							<div class="form-group">
								<label for="start_time" class="form-label">Start Time</label>
								<input type="time" name="start_time" class="form-control">
							</div>
							<div class="form-group">
								<label for="durasi">Duration(Hours)</label>
								<input type="number" name="durasi" class="form-control">
							</div>
							<div class="form-group">
								<label for="gedung" class="form-label">Choose Building</label>
								<select class="form-control" name="gedung" required>
									<?php 
										if($gedung == 'nusantara') {

									 ?>
									<option selected value="nusantara">Nusantara Hall</option>
									<option value="garuda">Garuda Hall</option>
									<option value="tuch">Telkom University Convention Hall</option>
								<?php } ?>
									<?php 
										if($gedung == 'garuda') {

									 ?>
									<option value="nusantara">Nusantara Hall</option>
									<option selected value="garuda">Garuda Hall</option>
									<option value="tuch">Telkom University Convention Hall</option>
								<?php } ?>
									<?php 
										if($gedung == 'tuch') {

									 ?>
									<option value="nusantara">Nusantara Hall</option>
									<option value="garuda">Garuda Hall</option>
									<option selected value="tuch">Telkom University Convention Hall</option>
								<?php } ?>
									<?php if ($gedung == ''){ ?>
									<option disabled selected value>Choose..</option>
									<option value="nusantara">Nusantara Hall</option>
									<option value="garuda">Garuda Hall</option>
									<option value="tuch">Telkom University Convention Hall</option>
								<?php } ?>
								</select>
							</div>
							<div class="form-group">
								<label for="telefon">Phone Number</label>
								<input type="number" name="telefon" class="form-control">
							</div>
							<div class="form-group">
								<label for="layanan">Add Service(s)</label>
								<div class="form-check">
									<input type="checkbox" name="layanan[]" class="form-check-input" value="Catering">
									<label class="form-check-label">Catering/$700</label>
								</div>
								<div class="form-check">
									<input type="checkbox" name="layanan[]" class="form-check-input" value="Decoration">
									<label class="form-check-label">Decoration/$450</label>
								</div>
								<div class="form-check">
									<input type="checkbox" name="layanan[]" class="form-check-input" value="Sound System">
									<label class="form-check-label">Sound System/$250</label>
								</div>
							</div>
							<button type="reset" class="btn btn-primary form-control">Book</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<footer class="bg-light text-center">
		<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
			Dibuat Oleh saya Hernanda_1202190321
		</div>
	</footer>	
</body>
</html>