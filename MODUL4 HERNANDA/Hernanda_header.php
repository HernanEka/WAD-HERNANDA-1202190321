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


<?php 

$navbar = '';
$text = '';


if (isset($_COOKIE['background_color'])) {
	if ($_COOKIE['background_color'] == '#FA6961') {
		
		$navbar = 'navbar-light';

	}elseif ($_COOKIE['background_color'] == '#3B1917') {
		
		$navbar = 'navbar-dark';
		$text = 'text-light';		

	}
} ?>
		<title>EAD TRAVEL</title>
	</head>
	<body style="background-color: #ddd;">
		<nav class="navbar navbar-expand sticky-top <?=$navbar?>" style="background-color: <?=$_COOKIE['background_color']?>;">
			<div class="container">
				<a href="Hernanda_index.php" class="navbar-brand">
					<h5>EAD TRAVEL</h5>
				</a>
				<ul class="navbar-nav">
					<?php if (isset($_SESSION['id'])) {?>
						
						<li  class="nav-item">
							<a href="Hernanda_booking.php" class="nav-link"><i class="fas fa-shopping-cart"></i></a>
						</li>
						<li class="nav-item">
							<div class="dropdown">
								<a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
									Hallo User, <?=$_SESSION['nama']?>		
								</a>
								<ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
									<li><a class="dropdown-item" href="Hernanda_profile.php">Profile</a></li>
									<li><hr class="dropdown-divider"></li>
									<li><a class="dropdown-item" href="Hernanda_config.php?logout=yes">Log out</a></li>
								</ul>
							</div>
						</li>

					<?php }else{ ?>

					<li class="nav-item">
						<a href="Hernanda_registrasi.php" class="nav-link">Registrasi</a>
					</li>
					<li class="nav-item">
						<a href="Hernanda_login.php" class="nav-link">Login</a>
					</li>

				<?php } ?>
			</ul>
		</div>
	</nav>