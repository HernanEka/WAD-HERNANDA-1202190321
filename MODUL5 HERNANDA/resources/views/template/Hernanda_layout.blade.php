<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<!-- Link for icon -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

	<title>Klinik Vaksin</title>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light">
		<div class="container">
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mx-auto">
					<li class="nav-item mx-3">
						<a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">
							<h5>HOME</h5>
						</a>
					</li>
					<li class="nav-item mx-3">
						<a class="nav-link {{ Request::is('vaksin*') ? 'active' : '' }}" href="/vaksin">
							<h5>VAKSIN</h5>
						</a>
					</li>
					<li class="nav-item mx-3">
						<a class="nav-link {{ Request::is('pasien*') ? 'active' : '' }}" href="/pasien">
							<h5>PASIEN</h5>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>


	<div class="container" style="min-height: 500px;">
		@yield("Container")
	</div>

	<footer class="footer mt-2 py-2 bg-light">
		<div class="container">
			<div class="text-center py-2">
				<span>&copy</span>2021 Copyright <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#namaModal" style="color: black;">Hernanda_1202190321</a>
			</div>
		</div>
	</footer>

	<!-- Modal -->
	<div class="modal fade" id="namaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Kesan Pesan</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<p>Kesan : Saya Senang Mengikuti Praktikum WAD ini karena saya bisa mendapatkan banyak ilmu tentang membuat sebuah website</p>
					<p>Pesan : Semoga praktikum kedepannya bisa menjadi lebih baik lagi dan terus menjadi yang terbaik</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>


	<!-- Optional JavaScript; choose one of the two! -->

	<!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>