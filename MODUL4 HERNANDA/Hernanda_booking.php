<?php  

session_start();

include_once 'Hernanda_config.php';
include 'Hernanda_header.php';

$id = $_SESSION['id'];

$query = "SELECT * FROM booking WHERE user_id = '$id'";

$select = mysqli_query($koneksi,$query);



?>

<section id="booking">
	<div class="container" style="height: 70vh;">
		<div class="shadow-lg p-3 my-5 mx-auto bg-body rounded">
			<table class="table table-striped">
				<thead>
					<tr>
						<th scope="col">No</th>
						<th scope="col">Nama Tempat</th>
						<th scope="col">Lokasi</th>
						<th scope="col">Tanggal Perjalanan</th>
						<th scope="col">Harga</th>
						<th scope="col">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php 

					$i = 1;
					$total = 0;

					if ($data = mysqli_fetch_assoc($select)) {?>
						<tr>
							<th scope="row">$i</th>
							<td><?=$data['nama_tempat']?></td>
							<td><?=$data['lokasi']?></td>
							<td><?=$data['tanggal']?></td>
							<td><?=$data['harga']?></td>
							<td><a href="Hernanda_config.php?delete=yes" class="btn btn-danger">Hapus</a></td>
						</tr>
					<?php 

						$i++;
						$total = $total + $data['harga'];

					} ?>
					<tr>
						<td>Total</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td><?=$total?></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</section>

<?php  

include 'Hernanda_footer.php';

?>