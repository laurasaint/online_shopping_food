@extends("blank")

@section('konten')

<h3>Edit Data</h3>
  {{-- @foreach($data_user as $user) --}}

    <form method="post" action="{{route("update" , ['id' => $id])}}">
      @csrf
      @method("put")
      <input type="hidden" name="id" value="{{$user->id}}">

      <div class="form-group">
        <label>Name </label>
        <input type="text" name="name" value="{{$user->name}}" class="form-control" placeholder="Name" required="">
      </div>

      <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" value="{{$user->email}}" class="form-control" placeholder="Email" required="">
      </div>

      <div class="form-group">
        <label>Password</label>
        <input type="date" name="password" value="{{$user->password}}" class="form-control" placeholder="Password" required="">
      </div>
      
      <div class="form-group text-right">
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Update Data</button>
      </div>
    </form>
  {{-- @endforeach --}}
@endsection