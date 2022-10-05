@extends('backend.home')
@section('judul','VIVO')

@section('isi')
<h2> ini halaman produk VIVO</h2>

<a href="/tambah_vivo" class="btn btn-success my-2"> Tambah Produk Vivo</a>

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
    @foreach ($vivo as $vv)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$vv->type}}</td>
      <td>{{$vv->harga}}</td>
      <td>{{$vv->spesifikasi}}</td>
      <td>{{$vv->toko}}</td>
      <td>
        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
              <form class="" action="/vivo/{{ $vv->id }}" method="post">
                 @method('delete')
                 @csrf
                 <button type="submit" onclick="return confirm('Yakin Mau Menghapus Data?')" class="btn btn-danger">Hapus</button>
                 <a href="/edit_vivo/{{$vv->id}}" class="btn btn-warning">Edit</a>
                 <a href="/lihat_vivo/{{$vv->id}}" class="btn btn-success">Lihat</a>
               </form>
        </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<div style="">
    {{$vivo->links()}}
    </div>
@endsection
