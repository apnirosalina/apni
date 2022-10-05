@extends('backend.home')
@section('judul','Detail Produk Vivo')

@section('isi')
<div class="container">
    <div class="row">
    <div class="col-6">
    <h1 class="mt-3">Halaman Detail Vivo</h1>

    <div class="card">
    <div class="card-body">
    <div class="">
        <img src="/image/{{$vivo->image}}" alt="" width="250" height="200" style="border-radius:10px;">
    </div>
    <h5 class="card-title"> type : {{ $vivo->type }} </h5>
    <h6 class="card-subtitle mb-2 text-muted">harga : {{ $vivo->harga }}</h6>
    <h6 class="card-subtitle mb-2 text-muted">spesifikasi : {{ $vivo->spesifikasi }}</h6>
    <p class="card-text">toko : {{ $vivo->toko }}</p>

    <a href="/vivo" class="btn btn-warning">kembali</a>
  </div>
</div>

    </div>
    </div>
    </div>
@endsection