@extends('template')

@section('content')
<h3>Keranjang Belanja</h3>
<a href="/keranjangbelanja/beli" class="btn btn-primary"> + Beli</a>
</br>
</br>

<table class="table table-striped">
		<tr>
			<th>Kode Pembelian</th>
			<th>Kode Barang</th>
			<th>Jumlah Pembelian</th>
			<th>Harga per item </th>
			<th>Total </th>
            <th>Action </th>
		</tr>
		@foreach($keranjangbelanja as $p)
		<tr>
			<td>{{ $p->ID }}</td>
			<td>{{ $p->KodeBarang }}</td>
			<td>{{ $p->Jumlah }}</td>
			<td>Rp {{ number_format($p->Harga, 0, ',', '.') }}</td>
            <td>Rp {{ number_format($p->Jumlah * $p->Harga, 0, ',', '.') }}</td>
			<td>
				<a href="/keranjangbelanja/batal/{{ $p->ID }}"class="btn btn-danger">Batal</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{$keranjangbelanja->links()}}
@endsection


