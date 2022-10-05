@extends('backend.home')
@section('judul','Detail Produk Aksesoris komputer')

@section('isi')
<div class="container">
    <div class="row">
    <div class="col-6">
    <h1 class="mt-3">Halaman Detail Aksesoris komputer</h1>

    <div class="card">
    <div class="card-body">
    <div class="">
        <img src="/image/{{$aksesoriskomputer->image}}" alt="" width="250" height="200" style="border-radius:10px;">
    </div>
    <h5 class="card-title"> type : {{ $aksesoriskomputer->type }} </h5>
    <h6 class="card-subtitle mb-2 text-muted">harga : {{ $aksesoriskomputer->harga }}</h6>
    <h6 class="card-subtitle mb-2 text-muted">spesifikasi : {{ $aksesoriskomputer->spesifikasi }}</h6>
    <p class="card-text">toko : {{ $aksesoriskomputer->toko }}</p>
    <p class="card-text">Posted : {!! date ('d m y', strtotime($aksesoriskomputer->created_at)) !!}</p>

    <a href="/aksesoris_komputer" class="btn btn-warning">kembali</a>
  </div>
</div>

    </div>
    </div>
    </div>
@endsection