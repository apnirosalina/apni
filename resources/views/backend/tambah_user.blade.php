@extends('backend.home')
@section('judul','Tambah Produk User')

@section('isi')
<h1 class="mt-3">Tambah Produk User</h1>

    <form method="post" action='/prosestambahuser' enctype="multipart/form-data">
            @csrf
          <div class="mb-1 col-5">
            <label for="nama" class="form-label">nama</label>
            <input class="form-control @error('nama') is-invalid @enderror" id="type" placeholder="masukan nama" name="nama" require>
          </div>
          <div class="mb-3 col-5">
            <label for="npm" class="form-label">email</label>
            <input class="form-control @error('npm') is-invalid @enderror" id="harga" placeholder="Masukan email" name="email">
          </div>
          <div class="mb-3 col-5">
            <label for="npm" class="form-label">password</label>
            <input class="form-control @error('npm') is-invalid @enderror" id="spesifikasi" placeholder="Masukan password" name="password">
          </div>
          <div class="form-group">
              <label for="image">Pilih Foto</label>
              <input type="file" class="form-control-file" id="image" name="image">
          </div>
          <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
@endsection