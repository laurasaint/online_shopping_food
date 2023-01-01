@extends("blank")


@section("konten")

<table class="table">

    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Creat at</th>
            <th scope="col">Updated</th>

        </tr>
    </thead>
    <tbody>
        @foreach($data_user as $user)
        <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->password}}</td>
            <td>{{$user->created_at}}</td>
            <td>{{$user->updated_at}}</td>
            <td>
                <a href="{{ route("user_edit", ["id"=> $user->id]) }}">edit</a>
                <form action="{{route('user_hapus',['id'=> $user->id])}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit">Hapus {{$user->id}}</button>
                </form>
                </td>
        </tr>
        @endforeach
    </tbody>
</table>


@endsection