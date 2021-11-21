<?php 

include 'Hernanda_header.php' ;

$alert = $_GET['alert'];

if ($alert == 'berhasil') {
	
}

?>
<section id="tambah">
	<div class="container">
		<div class="shadow-lg p-3 mb-5 bg-white rounded" style="margin-top: 150px;">
			<form action="Hernanda_proses_input.php" method="POST" enctype="multipart/form-data">
				<div class="form-group" style="margin-left: 40px; margin-right: 40px; margin-top: 20px;">
					<h1 class="text-center">Tambah Data Buku</h1>

					<div class="mb-3">
						<label for="judulbuku" class="form-label"><h6 style="font-weight: bold;">Judul Buku</h6></label>
						<input type="text" name="judul" id="judulbuku" class="form-control" placeholder="Contoh : Pemrograman Web Bersama WAD">
					</div>

					<div class="mb-3">
						<label for="namapenulis" class="form-label"><h6 style="font-weight: bold;">Nama Penulis</h6></label>
						<input type="text" name="penulis" id="namapenulis" class="form-control" value="Hernanda_1202190321" readonly>
					</div>

					<div class="mb-3">
						<label for="tahunbuku" class="form-label"><h6 style="font-weight: bold;">Tahun Buku</h6></label>
						<input type="number" name="tahun" id="tahunbuku" class="form-control" placeholder="Contoh : 1990">
					</div>

					<div class="mb-3">
						<label for="descbuku" class="form-label"><h6 style="font-weight: bold;">Deskripsi Buku</h6></label>
						<textarea name="deskripsi" id="descbuku" class="form-control" placeholder="Contoh : Buku ini Menjelaskan Tentang ..." rows="4"></textarea>
					</div>

					<div class="mb-3">
						<label class="form-label"><h6 style="font-weight:bold; margin-right: 20px;">Bahasa</h6></label>
						<input type="radio" name="bahasa" id="bahasabuku1" class="form-check-input" value="Indonesia">
						<label for="bahasabuku1" class="form-check-label">Indonesia</label>
						<input type="radio" name="bahasa" id="bahasabuku2" class="form-check-input" value="Lainnya">
						<label for="bahasabuku2" class="form-check-label">Lainnya</label>
					</div>

					<div class="mb-3">
						<label class="form-label"><h6 style="font-weight:bold; margin-right: 20px;">Tag</h6></label>

						<input type="checkbox" name="tag[]" id="tagbuku1" class="form-check-input" value="Pemrograman">
						<label for="tagbuku1" class="form-check-label">Pemrograman</label>

						<input type="checkbox" name="tag[]" id="tagbuku2" class="form-check-input" value="Website">
						<label for="tagbuku2" class="form-check-label">Website</label>

						<input type="checkbox" name="tag[]" id="tagbuku3" class="form-check-input" value="Java">
						<label for="tagbuku3" class="form-check-label">Java</label>

						<input type="checkbox" name="tag[]" id="tagbuku4" class="form-check-input" value="OOP">
						<label for="tagbuku4" class="form-check-label">OOP</label>

						<input type="checkbox" name="tag[]" id="tagbuku5" class="form-check-input" value="MVC">
						<label for="tagbuku5" class="form-check-label">MVC</label>

						<input type="checkbox" name="tag[]" id="tagbuku6" class="form-check-input" value="Kalkulus">
						<label for="tagbuku6" class="form-check-label">Kalkulus</label>

						<input type="checkbox" name="tag[]" id="tagbuku7" class="form-check-input" value="Lainnya">
						<label for="tagbuku7" class="form-check-label">Lainnya</label>
					</div>

					<div class="mb-3">
						<label for="img" class="form-label"><h6 style="font-weight: bold;">Gambar Buku</h6></label>
						<input type="file" name="img" id="img" class="form-control">
					</div>

					<div class="text-center">
						<input type="submit" name="submit" class="btn btn-primary" value="+ Tambah" style="width: 300px;">
					</div>
				</div>
			</form>
		</div>
	</div>
</section>

<?php include'Hernanda_footer.php' ; ?>
