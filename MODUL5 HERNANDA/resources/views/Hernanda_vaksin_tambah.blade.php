@extends('template.Hernanda_layout')

@section('Container')
<div class="text-center mt-3">
	<h3>Input Data Vaksin</h3>
</div>

<form action="/vaksin" method="POST" enctype="multipart/form-data">
	@csrf
	<div class="mt-2">
		<label for="nama" class="form-label">Nama Vaksin</label>
		<input type="text" id="nama" name="vaksin" class="form-control">
	</div>
	<div class="mt-2">
		<label for="harga" class="form-label">Harga</label>
		<div class="input-group">
			<span class="input-group-text" id="basic-addon1">Rp</span>
			<input type="number" id="harga" name="harga" class="form-control">
		</div>
	</div>
	<div class="mt-2">
		<label for="deskripsi" class="form-label">Deskripsi</label>
		<textarea class="form-control" name="deskripsi" id="deskripsi" rows="3"></textarea>
	</div>
	<div class="my-3">
		<label for="gambar" class="form-label">Foto Vaksin</label><br>
		<input type="file" name="gambar" id="gambar">
	</div>
	<button type="submit" class="btn btn-primary">Tambah</button>
</form>
@endsection