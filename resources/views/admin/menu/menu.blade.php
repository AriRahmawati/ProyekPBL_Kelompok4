@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mb-5">
            <img src="{{ url('images/logo.PNG') }}" class="rounded mx-auto d-block" width="300" alt="">
        </div>
        @foreach($menus as $menu)
        <div class="col-md-3 mb-3">
            <div class="container-rounded mt-4 card rounded" style="width: 270px;" >
              <img src="{{ asset('fotohidangan/'.$menu->gambar) }}" class="" alt="..." width="265px" height="200px">
              <div class="card-body">
                <h4 class="card-title">{{ $menu->nama_menu }}</h4>
                <p class="card-text">
                    <strong>Harga :</strong> Rp. {{ number_format($menu->harga)}} <br>
                    <strong>Stok :</strong> {{ $menu->stok }} <br>
                    <hr>
                    <strong>Keterangan :</strong> <br>
                    {{ $menu->keterangan }}
                </p>
                <a href="{{ url('pesan') }}/{{ $menu->id }}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Pesan</a>
              </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
