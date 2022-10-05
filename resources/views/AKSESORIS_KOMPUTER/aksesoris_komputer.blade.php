@extends('backend.home')
@section('judul','AKSESORIS KOMPUTER')

@section('isi')
<h2> ini halaman produk AKSESORIS KOMPUTER</h2>

<a href="/tambah_aksesoris_komputer" class="btn btn-success my-2"> Tambah Produk Aksesoris komputer</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Type</th>
      <th scope="col">Harga</th>
      <th scope="col">Spesifikasi</th>
      <th scope="col">toko</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($aksesoriskomputer as $ak)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$ak->type}}</td>
      <td>{{$ak->harga}}</td>
      <td>{{$ak->spesifikasi}}</td>
      <td>{{$ak->toko}}</td>
      <td>
        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
              <form class="" action="/aksesoris_komputer/{{ $ak->id }}" method="post">
                  @method('delete')
                  @csrf
                    <button type="submit" onclick="return confirm('Yakin Mau Menghapus Data?')" class="btn btn-danger">Hapus</button>
                    <a href="/edit_aksesoris_komputer/{{$ak->id}}" class="btn btn-warning">Edit</a>
                    <a href="/lihat_aksesoriskomputer/{{$ak->id}}" class="btn btn-success">Lihat</a>
              </form>
            </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<div style="">
    {{$aksesoriskomputer->links()}}
    </div>
@endsection
