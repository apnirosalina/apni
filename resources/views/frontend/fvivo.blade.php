@extends('frontend.index')
@section('judul','Halaman Vivo')

@section('isi')
<div class="container-fluid mt-2 mb-5">
    <div class="products">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="d-flex justify-content-between p-3 bg-white mb-3 align-items-center"> <span class="font-weight-bold text-uppercase">produk vivo</span>
                    <div>
                    <form class="" action="/carifvivo" method="GET">
                        <div class="input-group mb-3">
                          <div class="input-group-prepend col-3">
                            <button class="btn btn-primary" type="submit">Cari</button>
                          </div>
                          <input type="text" name="keyword" type="search" class="form-control  col-3" placeholder="Cari Product"
                          aria-label="" aria-describedby="basic-addon1">
                        </div>
                      </form>
                     </div>
                </div>
                <div class="row g-3">
                @foreach ($fvivo as $fv)
                    <div class="col-md-4">
                        <div class="card"> <img class="gambar" src="image/{{$fv->image}}" class="card-img-top">
                            <div class="card-body">
                                <div class="d-flex justify-content-between"> <span class="font-weight-bold">{{$fv->type}}</span> <span class="font-weight-bold">{{$fv->harga}}</span> </div>
                                <p class="card-text mb-1 mt-1">{{$fv->spesifikasi}}</p>
                                <div class="d-flex align-items-center flex-row"> <img src="{{asset('images/icon.png')}}" width="20"> <span class="guarantee">{{$fv->toko}}</span> </div>
                            </div>
                            <hr>
                            <div class="card-body">
                                <div class="text-right buttons"> <button class="btn btn-outline-dark">add to wishlist</button> <button class="btn btn-dark">Add to cart</button> </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div style="">
    {{$fvivo->links()}}
    </div>
</div>
@endsection
