@extends('backend.home')
@section('judul','Tambah Produk Apple')

@section('isi')
<h1 class="mt-3">Tambah Produk Apple</h1>

    <form method="post" action='/prosestambahapple' enctype="multipart/form-data">
            @csrf
          <div class="mb-1 col-5">
            <label for="nama" class="form-label">Type</label>
            <input class="form-control @error('nama') is-invalid @enderror" id="type" placeholder="masukan type barang" name="type" require>
          </div>
          <div class="mb-3 col-5">
            <label for="npm" class="form-label">Harga</label>
            <input class="form-control @error('npm') is-invalid @enderror" id="harga" placeholder="Masukan harga Barang" name="harga">
          </div>
          <div class="mb-3 col-5">
            <label for="npm" class="form-label">Spesifikasi</label>
            <input class="form-control @error('npm') is-invalid @enderror" id="spesifikasi" placeholder="Masukan spesifikasi Barang" name="spesifikasi">
          </div>
          <div class="mb-3 col-5">
            <label for="npm" class="form-label">Toko</label>
            <input class="form-control @error('npm') is-invalid @enderror" id="toko" placeholder="Masukan nama toko" name="toko">
          </div>
          <div class="form-group">
              <label for="image">Pilih Foto</label>
              <input type="file" class="form-control-file" id="image" name="image">
          </div>
          <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
@endsection