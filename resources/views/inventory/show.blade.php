@extends('layouts.master')

@section('content')
<div id="inventory-item">
    <div class="row">
        <div class="col-xl-7">
            <div class="card pl-sm-0 pl-md-4">
                <div class="bg-transparent">
                    <div class="my-3">
                        <a href="{{ route('inventory.index') }}/{{ $inventory->id }}/edit" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Edit">
                            <i class="mdi mdi-pencil"></i> <span>Edit item ini</span>
                        </a>
                    </div>
                    <h5 class="header-title-lg mb-3">{{ $inventory->name }}</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="media my-2">
                            <div class="media-body">
                                <p class="text-muted mb-1">Nama Inventory</p>
                                <h5 class="mb-0">{{ $inventory->name }}</h5>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="media my-2">
                            <div class="media-body">
                                <p class="text-muted mb-1">Photo Inventory</p>
                                <div class="col-sm-8 col-md-6 mx-auto">
                                    <div class="barcode-inventory">
                                        <div class="rounded">
                                            <img class="img-fluid" src="{{ asset('barcode/1.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
    
                    <li class="list-group-item">
                        <div class="media my-2">
                            <div class="media-body">
                                <p class="text-muted mb-1">Quantity</p>
                                <h5 class="mb-0">{{ $inventory->qty }}</h5>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="media my-2">
                            <div class="media-body">
                                <p class="text-muted mb-1">Ketegori</p>
                                <h5 class="mb-0">{{ $inventory->category->name }}</h5>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="media my-2">
                            <div class="media-body">
                                <p class="text-muted mb-1">Merk</p>
                                <h5 class="mb-0">{{ $inventory->brand->name }}</h5>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="media my-2">
                            <div class="media-body">
                                <p class="text-muted mb-1">Supplier</p>
                                <h5 class="mb-0">{{ $inventory->supplier->name }}</h5>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="media my-2">
                            <div class="media-body">
                                <p class="text-muted mb-1">Harga</p>
                                <h5 class="mb-0">@currency($inventory->price)</h5>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="media my-2">
                            <div class="media-body">
                                <p class="text-muted mb-1">Tahun Beli</p>
                                <h5 class="mb-0">
                                    {{ date('Y', strtotime($inventory->year_of_purchase)) }}
                                </h5>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="media my-2">
                            <div class="media-body">
                                <p class="text-muted mb-1">Catatan</p>
                                @if (!empty($inventory->notes))
                                    <h6 class="mb-0">{{ $inventory->notes }}</h6>
                                @else
                                    <h6 class="mb-0">Nggak ada catatan untuk item ini</h6>
                                @endif
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="col-xl-5">
            @if (!empty($inventory->image_url))
            <div class="img-thumbnail rounded">
                <img class="img-fluid" src="{{ url($inventory->image_url) }}" alt="">
            </div>
            @else
                <h4>Tidak ada foto</h4>
            @endif
        </div>
    </div>    
</div>



@endsection