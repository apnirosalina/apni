@extends('backend.home')
@section('judul','Detail Produk Samsung')

@section('isi')
<div class="container">
    <div class="row">
    <div class="col-6">
    <h1 class="mt-3">Halaman Detail Samsung</h1>

    <div class="card">
    <div class="card-body">
    <div class="">
        <img src="/image/{{$samsung->image}}" alt="" width="250" height="200" style="border-radius:10px;">
    </div>
    <h5 class="card-title"> type : {{ $samsung->type }} </h5>
    <h6 class="card-subtitle mb-2 text-muted">harga : {{ $samsung->harga }}</h6>
    <h6 class="card-subtitle mb-2 text-muted">spesifikasi : {{ $samsung->spesifikasi }}</h6>
    <p class="card-text">toko : {{ $samsung->toko }}</p>
    <p class="card-text">Posted : {!! date ('d m y', strtotime($samsung->created_at)) !!}</p>

    <a href="/samsung" class="btn btn-warning">kembali</a>
  </div>
</div>

    </div>
    </div>
    </div>
@endsection