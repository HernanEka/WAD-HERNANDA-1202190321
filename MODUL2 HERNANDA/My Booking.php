<!DOCTYPE html>
<html>
<head>
	<title>My Booking</title>
	<link rel="stylesheet" type="text/css" href="src/css/bootstrap.css">
	<?php  
	$name = $_POST['name'];
	$tanggal = $_POST['tanggal'];
	$start_time = $_POST['start_time'];
	$durasi = $_POST['durasi'];

	$waktu = strtotime($tanggal." ".$start_time);

	$durasi = $durasi * 3600;
	$beres = $waktu+$durasi;

	$beres = date('Y:m:d H:i:s', $beres);
	$waktu = date('Y:m:d H:i:s', $waktu);

	$gedung = $_POST['gedung'];
	$nohp = $_POST['telefon'];
	if( isset($_POST['layanan'])){
		$layanan = $_POST['layanan'];
	} else {
		$layanan = NULL;
	}

	$harga = '';

	if ($gedung == 'nusantara') {
		$harga = 2000;
	}
	elseif ($gedung == 'garuda') {
		$harga = 1000;
	}
	elseif ($gedung == 'tuch') {
		$harga = 500;		
	}

	$totalharga = $harga;
	// foreach ($layanan as $key) {
	// 	if ($key == 'Catering') {
	// 		$total_harga = $total_harga+700;
	// 	}
	// 	elseif ($key == 'Decoration') {
	// 		$total_harga = $total_harga+450;
	// 	}
	// 	elseif ($key == 'Sound System') {
	// 		$total_harga = $total_harga+250;
	// 	}
	// }

	?>
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
	<section id="isi">
		<div class="container" style="height: 500px;">
			<div class="text-center">
				<h2 style="padding-top: 20px; font-weight: normal;">Terima Kasih <?php echo $name; ?></h2><br>
				<h4 style="font-weight: normal;">Mohon untuk di cek ulang data reservasinya</h4>
			</div>
			<table class="table" style="font-size: 14px;">
				<thead>
					<tr>
						<th>Booking Number</th>
						<th>Name</th>
						<th>Check-in</th>
						<th>Check-out</th>
						<th>Building Type</th>
						<th>Phone Number</th>
						<th>Service</th>
						<th>Total Price</th>
					</tr>
				</thead>
				<tbody>
					<tr class="bg-light">
						<td><?php echo rand() ?></td>
						<td><?php echo $name; ?></td>
						<td><?php echo $waktu; ?></td>
						<td><?php echo $beres; ?></td>
						<td><?php echo $gedung; ?></td>
						<td><?php echo $nohp; ?></td>
						<td><?php if (is_null($layanan)) {
							echo "no service";
						}else{
							echo "<ul>";
							foreach ($layanan as $key) {
								if ($key == 'Catering') {
									$total_harga = $total_harga+700;
									echo "<li>".$key."</li>";
								}
								elseif ($key == 'Decoration') {
									$total_harga = $total_harga+450;
									echo "<li>".$key."</li>";
								}
								elseif ($key == 'Sound System') {
									$total_harga = $total_harga+250;
									echo "<li>".$key."</li>";
								}
							}
						} ?></ul></td>
						<td><?php echo $total_harga; ?></td>
					</tr>
				</tbody>
			</table>
		</div>
	</section>
	<footer class="bg-light text-center">
		<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
			Dibuat Oleh saya Hernanda_1202190321
		</div>
	</footer>
</body>
</html>