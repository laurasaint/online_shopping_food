<!-- @extends("blank")


@section("konten")

<table class="table">

<a href="{{ route("user_input") }}" >Add data</a>
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">harga</th>
            <th scope="col">banyak persediaan</th>
            <th scope="col">nama makanan</th>
            <th scope="col">diskon</th>
            <th scope="col">deskripsi</th>
            <th scope="col">count</th>
            <th scope="col">Creat at</th>
            <th scope="col">Updated</th>

        </tr>
    </thead>
    <tbody>
        @foreach($data_makanan as $makanan)
        <tr>
            <th scope="row">{{$makanan->id}}</th>
            <td>{{$makanan->harga}}</td>
            <td>{{$makanan->banyak_persediaan}}</td>
            <td>{{$makanan->nama_makanan}}</td>
            <td>{{$makanan->diskon}}</td>
            <td>{{$makanan->deskripsi}}</td>
            <td>{{$makanan->count}}</td>
            <td>{{$makanan->created_at}}</td>
            <td>{{$makanan->updated_at}}</td>
            
<a href="{{ route("user_edit", ["id"=> $user->id]) }}">edit</a>
<form action="{{ route("user_hapus",['id' => $user->id]) }}" method="post">
    @csrf
    @method("delete")
    <button type="submit">Hapus</button>
</from>
</td>
        </tr>
        @endforeach
    </tbody>
</table> -->


@endsection

@extends("blank")

@section("konten")



{{$makanan->id}}
{{$makanan->harga}}
{{$makanan->banyak_persediaan}}
{{$makanan->nama_makanan}}
{{$makanan->diskon}}
{{$makanan->deskripsi}}
{{$makanan->count}}

@endsection