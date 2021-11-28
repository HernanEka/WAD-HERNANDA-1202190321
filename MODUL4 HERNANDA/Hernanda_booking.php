<?php  

session_start();

include_once 'Hernanda_config.php';
include 'Hernanda_header.php';

$id = $_SESSION['id'];

$query = "SELECT * FROM booking WHERE user_id = '$id'";

$select = mysqli_query($koneksi,$query);



?>

<?php if (isset($_SESSION['berhasil'])) {?>
	<div class="alert alert-success alert-dismissible fade show" role="alert">
		<?=$_SESSION['berhasil'];?>
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>	
<?php } unset($_SESSION['berhasil']);?>

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

					while ($data = mysqli_fetch_assoc($select)) {?>
						<tr>
							<th scope="row"><?=$i?></th>
							<td><?=$data['nama_tempat']?></td>
							<td><?=$data['lokasi']?></td>
							<td><?=$data['tanggal']?></td>
							<td><?="Rp ".number_format($data['harga'],2,",","."); ?></td>
							<td><a href="Hernanda_config.php?delete=<?=$data['id'];?>" class="btn btn-danger">Hapus</a></td>
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
						<td><?="Rp ".number_format($total,2,",","."); ?></td>
						<td>&nbsp;</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</section>

<?php  

include 'Hernanda_footer.php';

?>