@extends('backend.home')
@section('judul','APPLE')

@section('isi')
<h2> ini halaman produk APPLE</h2>

<a href="/tambah_apple" class="btn btn-success my-2"> Tambah Produk Apple</a>

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
    @foreach ($apple as $ap)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$ap->type}}</td>
      <td>{{$ap->harga}}</td>
      <td>{{$ap->spesifikasi}}</td>
      <td>{{$ap->toko}}</td>
      <td>
        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
              <form class="" action="/Apple/{{ $ap->id }}" method="post">
                  @method('delete')
                  @csrf
                  <button type="submit" onclick="return confirm('Yakin Mau Menghapus Data?')" class="btn btn-danger">Hapus</button>
                  <a href="/edit_apple/{{$ap->id}}" class="btn btn-warning">Edit</a>
                  <a href="/lihat_apple/{{$ap->id}}" class="btn btn-success">Lihat</a>
              </form>
        </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
  <div style="">
    {{$apple->links()}}
    </div>
@endsection
