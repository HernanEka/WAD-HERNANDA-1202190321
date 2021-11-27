<?php 

include 'Hernanda_koneksi.php';

include 'Hernanda_header.php';

$query = "SELECT * FROM buku_table";

$select = mysqli_query($koneksi,$query);

$cek_isi = mysqli_num_rows($select);

if ($cek_isi == 0) {
?>
<section id="home">
	<div class="container text-center" style="margin-top: 200px;">
		<h1 class="display-6">Belum Ada Buku</h1>
		<hr class="bg-danger border-2 border-top border-primary">
		<h6 style="font-weight : light;">Silahkan Menambahkan Buku</h6>
		<div class="jumbotron bg-light" style="margin-top: 50px; padding-top: 100px; padding-bottom: 100px;">
			<img src="src/img/logo-ead.png" alt="" width="150" style="margin-bottom: 10px;">
			<h3>Perpustakaan EAD</h3>
			<p><span>&copy</span> Hernanda_1202190321</p>
		</div>
	</div>
</section>

<?php }elseif ($cek_isi != 0) { 
?>

<section id="home">
	<div class="container" style="margin-top: 150px;">
		<div class="row">
			<?php while ($isi = mysqli_fetch_assoc($select)) { ?>
			<div class="col-md-4" style="margin-bottom: 30px;">
				<div class="card" >
					<img style="object-fit: cover; max-height: 500px;"src="src/img/uploads/<?=$isi['gambar']?>" class="card-img-top">
					<div class="card-body">
						<h3 class="card-text"><?=$isi['judul_buku']?></h3>
						<p class="card-text"><?=$isi['deskripsi']?></p>
						<a href="Hernanda_detail.php?id=<?=$isi['id_buku']?>" class="btn btn-primary">Tampilkan Lebih Lanjut</a>
					</div>
				</div>
			</div>
		<?php }?>
		</div>
	</div>
</section>

<?php 
include 'Hernanda_footer.php';

} ?>