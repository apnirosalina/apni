@extends('backend.home')
@section('judul','Detail Produk Macbook')

@section('isi')
<div class="container">
    <div class="row">
    <div class="col-6">
    <h1 class="mt-3">Halaman Detail Macbook</h1>

    <div class="card">
    <div class="card-body">
    <div class="">
        <img src="/image/{{$macbook->image}}" alt="" width="250" height="200" style="border-radius:10px;">
    </div>
    <h5 class="card-title"> type : {{ $macbook->type }} </h5>
    <h6 class="card-subtitle mb-2 text-muted">harga : {{ $macbook->harga }}</h6>
    <h6 class="card-subtitle mb-2 text-muted">spesifikasi : {{ $macbook->spesifikasi }}</h6>
    <p class="card-text">toko : {{ $macbook->toko }}</p>
    <p class="card-text">Posted : {!! date ('d m y', strtotime($macbook->created_at)) !!}</p>

    <a href="/macbook" class="btn btn-warning">kembali</a>
  </div>
</div>

    </div>
    </div>
    </div>
@endsection