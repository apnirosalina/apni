@extends('backend.home')
@section('judul','Detail Produk Cpu gaming')

@section('isi')
<div class="container">
    <div class="row">
    <div class="col-6">
    <h1 class="mt-3">Halaman Detail Cpu gaming</h1>

    <div class="card">
    <div class="card-body">
    <div class="">
        <img src="/image/{{$cpugaming->image}}" alt="" width="250" height="200" style="border-radius:10px;">
    </div>
    <h5 class="card-title"> type : {{ $cpugaming->type }} </h5>
    <h6 class="card-subtitle mb-2 text-muted">harga : {{ $cpugaming->harga }}</h6>
    <h6 class="card-subtitle mb-2 text-muted">spesifikasi : {{ $cpugaming->spesifikasi }}</h6>
    <p class="card-text">toko : {{ $cpugaming->toko }}</p>
    <p class="card-text">Posted : {!! date ('d m y', strtotime($cpugaming->created_at)) !!}</p>

    <a href="/cpu_gaming" class="btn btn-warning">kembali</a>
  </div>
</div>

    </div>
    </div>
    </div>
@endsection