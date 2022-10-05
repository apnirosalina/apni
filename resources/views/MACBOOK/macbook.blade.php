@extends('backend.home')
@section('judul','MACBOOK')

@section('isi')
<h2> ini halaman produk MACBOOK</h2>

<a href="/tambah_macbook" class="btn btn-success my-2"> Tambah Produk Macbook</a>

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
    @foreach ($macbook as $mb)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$mb->type}}</td>
      <td>{{$mb->harga}}</td>
      <td>{{$mb->spesifikasi}}</td>
      <td>{{$mb->toko}}</td>
      <td>
        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                <form class="" action="/macbook/{{ $mb->id }}" method="post">
                  @method('delete')
                  @csrf
                  <button type="submit" onclick="return confirm('Yakin Mau Menghapus Data?')" class="btn btn-danger">Hapus</button>
                  <a href="/edit_macbook/{{$mb->id}}" class="btn btn-warning">Edit</a>
                  <a href="/lihat_macbook/{{$mb->id}}" class="btn btn-success">Lihat</a>
                </form>
          </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<div style="">
    {{$macbook->links()}}
    </div>
@endsection
