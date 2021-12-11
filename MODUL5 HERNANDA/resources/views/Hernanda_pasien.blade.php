@extends('template.Hernanda_layout')

@section('Container')


@if (($pasien->count())===0)

<div class="text-center mt-3">
	<p class="text-muted">Belum ada Pasien</p>
	<div class="mt-2">
		<a href="pasien/create" class="btn btn-primary">Tambah Data Pasien</a>
	</div>
</div>
@else

<h3 class="text-center my-4">List Pasien</h3>

<a href="pasien/create" class="btn btn-primary my-2">Tambah Data Pasien</a>
<table class="table table-primary" border="2">
	<thead>
		<tr>
			<th scope="col">No</th>
			<th scope="col">Vaksin</th>
			<th scope="col">Name</th>
			<th scope="col">NIK</th>
			<th scope="col">Alamat</th>
			<th scope="col">No_hp</th>
			<th scope="col">Action</th>
		</tr>
	</thead>
	<tbody>

		@foreach ($pasien as $data)
		<tr>
			<th scope="row">{{ $i++ }}</th>
			<td>{{ $data->vaksin->name }}</td>
			<td>{{ $data->name }}</td>
			<td>{{ $data->nik }}</td>
			<td>{{ $data->alamat }}</td>
			<td>{{ $data->no_hp }}</td>
			<td><a href="/pasien/{{ $data->id }}/edit" class="btn btn-warning">Edit data</a> ||
				<form method="post" action="/pasien/{{ $data->id }}" class="d-inline">
					@method('delete')
					@csrf
					<button type="submit" class="btn btn-danger">Delete Data</button>
				</form>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>

@endif

@endsection