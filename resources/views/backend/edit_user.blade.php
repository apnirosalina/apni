@extends('backend.home')
@section('judul','Edit User')

@section('isi')
<h1 class="mt-3">Edit User</h1>

    <form method="post" action='/edituser/{{$user->id}}' enctype="multipart/form-data">
            @method('patch')
            @csrf
          <div class="mb-1 col-5">
            <label for="nama" class="form-label">nama</label>
            <input class="form-control @error('nama') is-invalid @enderror" id="name" placeholder="masukan nama" value="{{$user->nama}}" name="name" require>
          </div>
          <div class="mb-3 col-5">
            <label for="npm" class="form-label">email</label>
            <input class="form-control @error('npm') is-invalid @enderror" id="email" placeholder="Masukan email" value="{{$user->email}}" name="email">
          </div>
          <div class="mb-3 col-5">
            <label for="npm" class="form-label">create_at</label>
            <input class="form-control @error('npm') is-invalid @enderror" id="create_at" placeholder="Masukan create_at" value="{{$user->create_at}}" name="create_at">
          </div>
          <div class="form-group">
              <label for="image">Pilih Foto</label>
              <input type="file" class="form-control-file" id="image" name="image">
          </div>
          <div class="" style="margin-left:15px;">
            <img src="/image/{{$user->image}}" alt="" width="90" height="90">
            </div>
            <br>
          <button type="submit" class="btn btn-primary" style="margin-left:15px;">Edit</button>
    </form>
@endsection