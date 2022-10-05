@extends('backend.home')
@section('judul','CPU GAMING ')

@section('isi')
<h2> ini halaman produk CPU GAMING</h2>

<a href="/tambah_cpu_gaming" class="btn btn-success my-2"> Tambah Produk Cpu gaming</a>

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
    @foreach ($cpugaming as $cg)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$cg->type}}</td>
      <td>{{$cg->harga}}</td>
      <td>{{$cg->spesifikasi}}</td>
      <td>{{$cg->toko}}</td>
      <td>
        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                <form class="" action="/cpu_gaming/{{ $cg->id }}" method="post">
                  @method('delete')
                  @csrf
                  <button type="submit" onclick="return confirm('Yakin Mau Menghapus Data?')" class="btn btn-danger">Hapus</button>
                  <a href="/edit_cpu_gaming/{{$cg->id}}" class="btn btn-warning">Edit</a>
                  <a href="/lihat_cpugaming/{{$cg->id}}" class="btn btn-success">Lihat</a>
                </form>
          </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
  <div style="">
    {{$cpugaming->links()}}
    </div>
@endsection
