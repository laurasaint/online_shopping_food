@extends("blank")

@section("konten")
<form action= "{{route ("simpan_keranjangbelanja") }}" method="post">
@csrf

id: <input type="text" name="id"><br>
total_belanja: <input type="text" name="total_belanja"><br>
jumlah_pembelian: <input type="text" name="jumlah_pembelian"><br>
makanan: <input type="text" name="makanan"><br>

<button type="submit">Simpan</button>


</form>
@endsection