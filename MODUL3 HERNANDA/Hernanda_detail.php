<?php 

include 'Hernanda_koneksi.php';

include 'Hernanda_header.php';

$id = $_GET['id'];

$select = "SELECT * FROM buku_table WHERE id_buku = '$id'";

$query = mysqli_query($koneksi,$select);

$isi = mysqli_fetch_assoc($query);

$tag = explode(', ', $isi['tag'])

?>
<section id="detail">
	<div class="container">
		<div class="shadow-lg p-3 mb-5 bg-white rounded" style="margin-top: 150px;">
			<div style="margin: 40px 40px 40px 40px;">
				<h1 class="text-center mb-5">Tambah Data Buku</h1>
				<center><img src="src/img/uploads/<?=$isi['gambar']?>" class="shadow-lg p-3 mb-5" style="max-width: 500px;"></center>
				<hr class="bg-danger border-3 border-top border-primary">
				<div style="margin-bottom: 40px;">
					<h4 style="font-weight: bold;">Judul Buku : </h4>
					<h4 style="font-weight: lighter;"><?=$isi['judul_buku']?></h4>
				</div>

				<div style="margin-bottom: 40px;">
					<h4 style="font-weight: bold;">Penulis Buku : </h4>
					<h4 style="font-weight: lighter;"><?=$isi['penulis_buku']?></h4>
				</div>

				<div style="margin-bottom: 40px;">
					<h4 style="font-weight: bold;">Tahun Terbit : </h4>
					<h4 style="font-weight: lighter;"><?=$isi['tahun_terbit']?></h4>
				</div>

				<div style="margin-bottom: 40px;">
					<h4 style="font-weight: bold;">Deskripsi Buku : </h4>
					<h4 style="font-weight: lighter;"><?=$isi['deskripsi']?></h4>
				</div>

				<div style="margin-bottom: 40px;">
					<h4 style="font-weight: bold;">Bahasa Buku : </h4>
					<h4 style="font-weight: lighter;"><?=$isi['bahasa']?></h4>
				</div>

				<div style="margin-bottom: 40px;">
					<h4 style="font-weight: bold;">Tag : </h4>
					<h4 style="font-weight: lighter;"><?=$isi['tag']?></h4>
				</div>

				<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="width: 480px; margin-right: 30px;">Update</button>

				<a href="Hernanda_proses_delete.php?id=<?=$isi['id_buku']?>" class="btn btn-danger" style="width: 480px;">Delete</a>


				<!-- Modal -->
				<form action="Hernanda_proses_update.php?id=<?=$isi['id_buku']?>" enctype="multipart/form-data" method="POST">
					<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
						<div class="modal-dialog modal-dialog-scrollable">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="staticBackdropLabel">Sunting</h5>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<div class="modal-body">
									<div class="mb-3">
										<label for="judulbuku" class="form-label"><h6 style="font-weight: bold;">Judul Buku</h6></label>
										<input type="text" name="judul" id="judulbuku" class="form-control" placeholder="Contoh : Pemrograman Web Bersama WAD" value="<?=$isi['judul_buku']?>">
									</div>

									<div class="mb-3">
										<label for="namapenulis" class="form-label"><h6 style="font-weight: bold;">Nama Penulis</h6></label>
										<input type="text" name="penulis" id="namapenulis" class="form-control" value="Hernanda_1202190321" readonly>
									</div>

									<div class="mb-3">
										<label for="tahunbuku" class="form-label"><h6 style="font-weight: bold;">Tahun Buku</h6></label>
										<input type="number" name="tahun" id="tahunbuku" class="form-control" placeholder="Contoh : 1990" value="<?=$isi['tahun_terbit']?>">
									</div>

									<div class="mb-3">
										<label for="descbuku" class="form-label"><h6 style="font-weight: bold;">Deskripsi Buku</h6></label>
										<textarea name="deskripsi" id="descbuku" class="form-control" placeholder="Contoh : Buku ini Menjelaskan Tentang ..." rows="4"><?=$isi['deskripsi']?></textarea>
									</div>

									<div class="mb-3">		
										<label class="form-label"><h6 style="font-weight:bold; margin-right: 20px;">Bahasa</h6></label>
										<input type="radio" name="bahasa" id="bahasabuku1" class="form-check-input" value="Indonesia" <?php if ($isi['bahasa'] == 'Indonesia') {echo 'checked';}?> >
										<label for="bahasabuku1" class="form-check-label">Indonesia</label>
										<input type="radio" name="bahasa" id="bahasabuku2" class="form-check-input" value="Lainnya" <?php if ($isi['bahasa'] == 'Lainnya') {echo 'checked';}?>>
										<label for="bahasabuku2" class="form-check-label">Lainnya</label>
									</div>

									<div class="mb-3">
										<label class="form-label"><h6 style="font-weight:bold; margin-right: 20px;">Tag</h6></label>

										<input type="checkbox" name="tag[]" id="tagbuku1" class="form-check-input" value="Pemrograman" <?php if (in_array("Pemrograman", $tag)) {
											echo 'checked';
										} ?>>
										<label for="tagbuku1" class="form-check-label">Pemrograman</label>

										<input type="checkbox" name="tag[]" id="tagbuku2" class="form-check-input" value="Website"  <?php if (in_array("Website", $tag)) {
											echo 'checked';
										} ?>>
										<label for="tagbuku2" class="form-check-label">Website</label>

										<input type="checkbox" name="tag[]" id="tagbuku3" class="form-check-input" value="Java"  <?php if (in_array("Java", $tag)) {
											echo 'checked';
										} ?>>
										<label for="tagbuku3" class="form-check-label">Java</label>

										<input type="checkbox" name="tag[]" id="tagbuku4" class="form-check-input" value="OOP"  <?php if (in_array("OOP", $tag)) {
											echo 'checked';
										} ?>>
										<label for="tagbuku4" class="form-check-label">OOP</label>

										<input type="checkbox" name="tag[]" id="tagbuku5" class="form-check-input" value="MVC"  <?php if (in_array("MVC", $tag)) {
											echo 'checked';
										} ?>>
										<label for="tagbuku5" class="form-check-label">MVC</label>

										<input type="checkbox" name="tag[]" id="tagbuku6" class="form-check-input" value="Kalkulus"  <?php if (in_array("Kalkulus", $tag)) {
											echo 'checked';
										} ?>>
										<label for="tagbuku6" class="form-check-label">Kalkulus</label>

										<input type="checkbox" name="tag[]" id="tagbuku7" class="form-check-input" value="Lainnya"  <?php if (in_array("Lainnya", $tag)) {
											echo 'checked';
										} ?>>
										<label for="tagbuku7" class="form-check-label">Lainnya</label>
									</div>

									<div class="mb-3">
										<label for="img" class="form-label"><h6 style="font-weight: bold;">Gambar Buku</h6></label>
										<input type="file" name="img" id="img" class="form-control">
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
									<button type="submit" name="sbmit" class="btn btn-primary">Simpan Perubahan</button>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>	
		</div>
	</div>
</section>

<?php include 'Hernanda_footer.php' ?>