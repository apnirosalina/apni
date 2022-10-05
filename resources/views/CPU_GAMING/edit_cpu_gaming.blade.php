@extends('backend.home')
@section('judul','Edit Produk Cpu gaming')

@section('isi')
<h1 class="mt-3">Edit Produk Cpu gaming</h1>

    <form method="post" action='/editcpugaming/{{$cpugaming->id}}' enctype="multipart/form-data">
            @method('patch')
            @csrf
          <div class="mb-1 col-5">
            <label for="nama" class="form-label">Type</label>
            <input class="form-control @error('nama') is-invalid @enderror" id="type" placeholder="masukan type barang" value="{{$cpugaming->type}}" name="type" require>
          </div>
          <div class="mb-3 col-5">
            <label for="npm" class="form-label">Harga</label>
            <input class="form-control @error('npm') is-invalid @enderror" id="harga" placeholder="Masukan harga Barang" value="{{$cpugaming->harga}}" name="harga">
          </div>
          <div class="mb-3 col-5">
            <label for="npm" class="form-label">Spesifikasi</label>
            <input class="form-control @error('npm') is-invalid @enderror" id="spesifikasi" placeholder="Masukan spesifikasi Barang" value="{{$cpugaming->spesifikasi}}" name="spesifikasi">
          </div>
          <div class="mb-3 col-5">
            <label for="npm" class="form-label">Toko</label>
            <input class="form-control @error('npm') is-invalid @enderror" id="toko" placeholder="Masukan nama toko" value="{{$cpugaming->toko}}" name="toko">
          </div>
          <div class="form-group">
              <label for="image">Pilih Foto</label>
              <input type="file" class="form-control-file" id="image" name="image">
          </div>
          <div class="" style="margin-left:15px;">
            <img src="/image/{{$cpugaming->image}}" alt="" width="90" height="90">
            </div>
            <br>
          <button type="submit" class="btn btn-primary" style="margin-left:15px;">Edit</button>
    </form>
@endsection