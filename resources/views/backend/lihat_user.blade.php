@extends('backend.home')
@section('judul','Detail User')

@section('isi')
<div class="container">
    <div class="row">
    <div class="col-6">
    <h1 class="mt-3">Halaman Detail User</h1>

    <div class="card">
    <div class="card-body">
    <div class="">
        <img src="/image/{{$user->image}}" alt="" width="250" height="200" style="border-radius:10px;">
    </div>
    <h5 class="card-title"> nama : {{ $user->name }} </h5>
    <h6 class="card-subtitle mb-2 text-muted">email : {{ $user->email }}</h6>
    <h6 class="card-subtitle mb-2 text-muted">Posted : {!! date ('d m y', strtotime($user->created_at)) !!}</h6>

    <a href="/user" class="btn btn-warning">kembali</a>
  </div>
</div>

    </div>
    </div>
    </div>
@endsection