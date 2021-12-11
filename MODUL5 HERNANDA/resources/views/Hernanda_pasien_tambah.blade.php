@extends('template.Hernanda_layout')

@section('Container')
<div class="text-center mt-3">
	<h3>Registrasi Pasien Vaksin {{ $vaksin->name }} </h3>
</div>

<form action="/pasien" method="POST" enctype="multipart/form-data">
	@csrf

	<div class="mb-2">
		<label for="vaksin" class="form-label">ID Vaksin</label>
		<input type="text" id="vaksin" name="vaksin" class="form-control" value="{{ $vaksin->id }}" readonly>
	</div>
	<div class="mb-2">
		<label for="nama" class="form-label">Nama Pasien</label>
		<input type="text" id="nama" name="nama" class="form-control">
	</div>
	<div class="mb-2">
		<label for="nik" class="form-label">NIK Pasien</label>
		<input type="number" id="nik" name="nik" class="form-control">
	</div>
	<div class="mb-2">
		<label for="alamat" class="form-label">Alamat Pasien</label>
		<input type="text" id="alamat" name="alamat" class="form-control">
	</div>
	<div class="my-3">
		<label for="ktp" class="form-label">KTP Pasien</label><br>
		<input type="file" name="ktp" id="ktp">
	</div>
	<div class="mb-2">
		<label for="no_hp" class="form-label">No. Handphone Pasien</label>
		<input type="number" id="no_hp" name="no_hp" class="form-control">
	</div>
	<button type="submit" class="btn btn-primary">Registrasi</button>
</form>
@endsection