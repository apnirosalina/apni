@extends('backend.home')
@section('judul','SAMSUNG')

@section('isi')
<h2> ini halaman produk SAMSUNG</h2>

<a href="/tambah_samsung" class="btn btn-success my-2"> Tambah Produk Samsung</a>

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
    @foreach ($samsung as $ss)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$ss->type}}</td>
      <td>{{$ss->harga}}</td>
      <td>{{$ss->spesifikasi}}</td>
      <td>{{$ss->toko}}</td>
      <td>
        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                <form class="" action="/samsung/{{ $ss->id }}" method="post">
                  @method('delete')
                  @csrf
                  <button type="submit" onclick="return confirm('Yakin Mau Menghapus Data?')" class="btn btn-danger">Hapus</button>
                  <a href="/edit_samsung/{{$ss->id}}" class="btn btn-warning">Edit</a>
                  <a href="/lihat_samsung/{{$ss->id}}" class="btn btn-success">Lihat</a>
                </form>
          </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<div style="">
    {{$samsung->links()}}
    </div>
@endsection
