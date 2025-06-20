@extends('template')

@section('content')
<h3>Data Karyawan</h3>
<br/>
	<br/>
	<table class="table table-striped">
		<tr>
			<th>Kodepegawai</th>
            <th>Nama</th>
			<th>Divisi</th>
			<th>Departemen</th>
            <th>Action</th>
		</tr>
		@foreach($mykaryawan as $k)
		<tr>
            <td>{{ $k->kodepegawai }}</td>
			<td>{{ ucwords(strtolower($k->namalengkap)) }}</td>
			<td>{{ $k->divisi }}</td>
			<td>{{ $k->departemen }}</td>
			<td>
				<a href="/mykaryawan/editkaryawan/{{ $k->kodepegawai }}" class="btn btn-danger">Edit</a>
                <a href="/mykaryawan/view/{{ $k->kodepegawai }}" class="btn btn-danger">View</a>
			</td>

		</tr>
		@endforeach
	</table>

@endsection
