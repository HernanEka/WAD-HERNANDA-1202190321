<!DOCTYPE html>
<html>
<head>
	<title>Web Venue Reservation</title>
	<link rel="stylesheet" type="text/css" href="src/css/bootstrap.min.css">
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
	<section id="home" style="margin-bottom: 20px;">
		<div class="container">
			<div class="text-center">
				<h2 style="padding-top: 20px; padding-bottom: 20px;">WELCOME TO ESD VENUE RESERVATION</h2>
			</div>
			<div class="text-center bg-dark" style="margin-bottom: 25px; color: #e4e4e4; padding-top: 10px; padding-bottom: 10px; font-size: 14px;">Find your best deal for your event, here</div>
			<div class="row justify-content-center">
				<div class="col-md-4">
					<div class="card">
						<img class="card-img-top" src="https://pbs.twimg.com/media/CPZA3bRU8AAeWHk.jpg">
						<div class="card-body ju">
							<h5 class="card-title">Nusantara Hall</h5>
							<p class="card-text" style="color: gray;">$2000/Hour<br>5000 capacity</p>
						</div>
						<ul class="list-group list-group-flush">
							<li class="list-group-item text-center" style="font-weight: bold; color: green;">Free Parking</li>
							<li class="list-group-item text-center" style="font-weight: bold; color: green;">Full AC</li>
							<li class="list-group-item text-center" style="font-weight: bold; color: green;">Cleaning Service</li>
							<li class="list-group-item text-center" style="font-weight: bold; color: green;">Covid-19 Health Protocol</li>
						</ul>
						<div class="card-body text-center">
							<form action="Booking.php" method="POST">
								<input type="text" name="gedung" value="nusantara" hidden>
								<button type="submit" class="btn btn-primary">Booking Now</button>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<img class="card-img-top" src="https://media-cdn.tripadvisor.com/media/photo-s/1a/25/06/c5/garuda-hall.jpg">
						<div class="card-body">
							<h5 class="card-title">Garuda Hall</h5>
							<p class="card-text" style="color: gray;">$1000/Hour<br>2000 capacity</p>
						</div>
						<ul class="list-group list-group-flush">
							<li class="list-group-item text-center" style="font-weight: bold; color: green;">Free Parking</li>
							<li class="list-group-item text-center" style="font-weight: bold; color: green;">Full AC</li>
							<li class="list-group-item text-center" style="font-weight: bold; color: red;">Cleaning Service</li>
							<li class="list-group-item text-center" style="font-weight: bold; color: green;">Covid-19 Health Protocol</li>
						</ul>
						<div class="card-body text-center">
							<form action="Booking.php" method="POST">
								<input type="text" name="gedung" value="garuda" hidden>
								<button type="submit" class="btn btn-primary">Booking Now</button>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<img class="card-img-top" src="https://static.republika.co.id/uploads/images/inpicture_slide/ribuan-mahasiswa-telkom-university-mengikuti-ceramah-ketua-mpr-_170814200711-294.jpg">
						<div class="card-body">
							<h5 class="card-title">Telkom University Convention Hall</h5>
							<p class="card-text" style="color: gray;">$500/Hour<br>500 capacity</p>
						</div>
						<ul class="list-group list-group-flush">
							<li class="list-group-item text-center" style="font-weight: bold; color: red;">Free Parking</li>
							<li class="list-group-item text-center" style="font-weight: bold; color: red;">Full AC</li>
							<li class="list-group-item text-center" style="font-weight: bold; color: red;">Cleaning Service</li>
							<li class="list-group-item text-center" style="font-weight: bold; color: green;">Covid-19 Health Protocol</li>
						</ul>
						<div class="card-body text-center">
							<form action="Booking.php" method="POST">
								<input type="text" name="gedung" value="tuch" hidden>
								<button type="submit" class="btn btn-primary">Booking Now</button>
							</form>
						</div>
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