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

<h3 class="text-center my-4">List Vaksin</h3>

<a href="vaksin/create" class="btn btn-primary my-2">Tambah Data Vaksin</a>
<table class="table table-primary" border="2">
	<thead>
		<tr>
			<th scope="col">No</th>
			<th scope="col">Name</th>
			<th scope="col">Price</th>
			<th scope="col">Action</th>
		</tr>
	</thead>
	<tbody>

		@foreach ($vaksin as $data)
		<tr>
			<th scope="row">{{ $i++ }}</th>
			<td>{{ $data->name }}</td>
			<td>{{ $data->price }}</td>
			<td><a href="/vaksin/{{ $data->id }}/edit" class="btn btn-warning">Edit data</a> ||
				<form method="post" action="/vaksin/{{ $data->id }}" class="d-inline">
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