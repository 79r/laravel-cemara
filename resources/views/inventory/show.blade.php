@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="main-heading mt-5 text-center">
                <h1>Cemara Inventory</h1>
            </div>
        </div>
        <div class="col-md-10 col-lg-9 mx-auto">
            <div class="box">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Item</h3>
                        
                        <p> Nama item : {{ $inventory->name }} </p>
                        <p> Harga : {{ $inventory->price }} </p>
                        <p> Tanggal Beli : {{ $inventory->year_of_purchaserice }} </p>
                        <div class="img-box img-responsive">
                            <img src="http://inventory.development/{{ $inventory->image_url }}" alt="">
                        </div>
                        <p>Merek : {{ $inventory->merk->name }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection