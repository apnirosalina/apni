@extends('backend.home')
@section('judul','Detail Produk Apple')

@section('isi')
<div class="container">
    <div class="row">
    <div class="col-6">
    <h1 class="mt-3">Halaman Detail Apple</h1>

    <div class="card">
    <div class="card-body">
    <div class="">
        <img src="/image/{{$apple->image}}" alt="" width="250" height="200" style="border-radius:10px;">
    </div>
    <h5 class="card-title"> type : {{ $apple->type }} </h5>
    <h6 class="card-subtitle mb-2 text-muted">harga : {{ $apple->harga }}</h6>
    <h6 class="card-subtitle mb-2 text-muted">spesifikasi : {{ $apple->spesifikasi }}</h6>
    <p class="card-text">toko : {{ $apple->toko }}</p>
    <p class="card-text">Posted : {!! date ('d m y', strtotime($apple->created_at)) !!}</p>

    <a href="/Apple" class="btn btn-warning">kembali</a>
  </div>
</div>

    </div>
    </div>
    </div>
@endsection