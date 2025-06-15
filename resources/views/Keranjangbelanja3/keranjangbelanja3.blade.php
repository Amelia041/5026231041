
@extends('template')

@section('content')
	<h3>Keranjang Belanja</h3>

    <a href="/keranjangbelanja3/tambah" class="btn btn-primary" style="margin-bottom: 15px;"> + Beli</a>


	<table class="table table-striped table-hover align-middle text-center shadow-sm">
		<tr>
			<th>Kode Pembelian</th>
			<th>Kode Barang</th>
			<th>Jumlah Pembelian</th>
			<th>Harga per item</th>
			<th>Total</th>
            <th>Action</th>
		</tr>
		@foreach($keranjangbelanja as $k)
		<tr>
			<td>{{ $k->ID }}</td>
			<td>{{ $k->KodeBarang }}</td>
			<td>{{ $k->Jumlah }}</td>
			<td>Rp {{ number_format($k->Harga, 0, ',', '.') }}</td>
            <td>Rp {{ $k->Total }}</td>
			<td>
				<a href="/keranjangbelanja3/hapus/{{ $k->ID }}" class="btn btn-danger">Batal</a>
			</td>
		</tr>
		@endforeach
	</table>
{{ $keranjangbelanja->links() }}
@endsection
