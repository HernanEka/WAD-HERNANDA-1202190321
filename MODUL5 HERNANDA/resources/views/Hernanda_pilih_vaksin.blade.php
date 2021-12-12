@extends('template.Hernanda_layout')


@section('Container')

@if (($vaksin->count())===0)

<div class="text-center mt-3">
	<p class="text-muted">Belum ada vaksin</p>
	<div class="mt-2">
		<a href="vaksin/create" class="btn btn-primary">Tambah Data Vaksin</a>
	</div>
</div>
@else
<div class="text-center mt-3">
	<h3>Pilih Vaksin</h3>
</div>

<div class="row mt-5">
	@foreach( $vaksin as $data)

	<div class="col-md-4">
		<div class="card" >
			<img src="{{ asset('storage/' . $data->image) }}" class="card-img-top" alt="Foto Vaksin" style="max-height: 200px;">
			<div class="card-body" style="height: 150px;overflow-y: auto;">
				<h5 class="card-title">{{ $data->name }}</h5>
				<p class="text-muted">Rp {{ number_format($data->price) }}</p>
				<p class="card-text">{{ $data->description }}</p>
			</div>
			<div class="card-footer text-center">
				<form action="/pasien/{{$data->id}}" method="GET">
					<button type="submit" class="btn btn-primary" style="width: 100%;">Pilih Vaksin</button>
				</form>
			</div>
		</div>
	</div>

	@endforeach
</div>
@endif
@endsection