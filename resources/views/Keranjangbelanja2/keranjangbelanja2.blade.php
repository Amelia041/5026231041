
@extends('template')

@section('content')
    <h3>Data Keranjang Belanja</h3>

    <form action="/karanjangbelanja2/cari" method="GET">
        <input type="text" class="form-control" name="cari" placeholder="Cari Kode Barang .." value="{{ $cari ?? '' }}">
        <br />
        <input type="submit" class="btn btn-info" value="CARI">
    </form>

    <br />

    <a href="/keranjangbelanja2/keranjang-tambah" class="btn btn-primary"> + Beli </a>
    </br>
    </br>
    <div class="table-responsive">

        <table class="table table-striped "> <!-- setiap row ganjil genap berbeda warna-->
            <thead class="thead" style="background-color: #FFD586">
                <tr>
                    <th>Kode Pembelian</th>
                    <th>Kode Barang</th>
                    <th>Jumlah Pembelian</th>
                    <th>Harga per item </th>
                    <th>Total </th>
                    <th>Action </th>
                </tr>
            </thead>
            @foreach ($keranjangbelanja as $p)
                <tr>
                    <td>{{ $p->ID }}</td>
			        <td>{{ $p->KodeBarang }}</td>
			        <td>{{ $p->Jumlah }}</td>
                    <td> RP. {{ $p->Harga }}</td>
                    <td> RP. {{ $p->Jumlah * $p->Harga }}</td>
                    <td>
                        <a href="/keranjangbelanja2/hapus/{{ $p->ID }}" class="btn btn-danger">Batal</a>
                    </td>
                </tr>
            @endforeach

        </table>

    </div>

    {{ $keranjangbelanja->links() }}
@endsection
