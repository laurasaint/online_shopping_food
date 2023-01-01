
@extends("blank")
@section("konten")

<table class="table table-hover">
    <thead class="table-dark">
    <tr>
        <th>ID</th>
        <th>Makanan</th>
        <th>Jumlah Pembelian</th>
        <th>Total</th>
        <th>Aksi</th>
    </tr>
    </thead>
    <tbody>
    @foreach($data as $keranjang)
    
    <tr>
        <td>{{$keranjang->id}}</td>
        <td>{{$keranjang->makanan}}</td>
        <td>{{$keranjang->jumlah_pembelian}}</td>
        <td>{{$keranjang->total_belanja}}</td>
        <td>
            <form action="{{ route("hapus_keranjangbelanja",['id' => $keranjang->id]) }}" method="post">
                @csrf
                @method("delete")
                <button type="submit">Hapus</button>
            </from>
        </td>
    </tr>
    @endforeach
</tbody>
</table>
@endsection
