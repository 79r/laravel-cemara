@extends('layouts.master')

@section('content')
<div id="inventory-item">
    <div class="row">
        <div class="col-xl-7">
            <div class="card pl-sm-0 pl-md-4">
                <div class="bg-transparent">
                    <div class="my-3">
                        <a href="{{ route('brands.index') }}/{{ $brand->id }}/edit" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Edit">
                            <i class="mdi mdi-pencil"></i> <span>Edit item ini</span>
                        </a>
                    </div>
                    <h5 class="header-title-lg mb-3">{{ $brand->name }}</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="media my-2">
                            <div class="media-body">
                                <p class="text-muted mb-1">Nama Kategori</p>
                                <h5 class="mb-0">{{ $brand->name }}</h5>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="media my-2">
                            <div class="media-body">
                                <p class="text-muted mb-1">Catatan</p>
                                @if (!empty($brand->notes))
                                    <h6 class="mb-0">{{ $brand->notes }}</h6>
                                @else
                                    <h6 class="mb-0">Tidak ada catatan untuk kategori ini</h6>
                                @endif
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="col-xl-5">
            @if (!empty($brand->image_url))
            <div class="img-thumbnail rounded">
                <img class="img-fluid" src="{{ url($brand->image_url) }}" alt="">
            </div>
            @else
                <h4>Tidak ada foto</h4>
            @endif
        </div>

    </div>    
</div>




<div class="text-center mt-5">
    <h4 class="header-title">Data Inventory dari Brand {{ $brand->name }}</h4>
</div>
<div class="table-rep-plugin">
    <div class="table-responsive mb-0" data-pattern="priority-columns">
        <table id="table-cemara-inventory" class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th data-priority="1">Nama</th>
                <th data-priority="2">Kategori</th>
                <th data-priority="3">Merek</th>
                <th data-priority="5">Harga</th>
                <th class="text-center" data-priority="6">Qty</th>
                <th data-priority="7">Tahun Beli</th>
                <th data-priority="8">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($brand->inventories as $inventory)
            <tr>
                <th>{{ $inventory->id }}</th>
                <th>{{ $inventory->name }}</th>
                <th>{{ $inventory->brand->name }}</th>
                <th>{{ $inventory->brand->name }}</th>
                <th>@currency($inventory->price)</th>
                <th class="text-center">{{ $inventory->qty }}</th>
                <th>{{ date('Y', strtotime($inventory->year_of_purchase)) }}</th>
                <th>
                    <div class="btn-group" role="group">
                        <a href="{{ route('inventory.index') }}/{{ $inventory->id }}" class="btn btn-outline-success btn-sm" data-toggle="tooltip" data-placement="top" title="Lihat">
                            <i class="mdi mdi-eye"></i>
                        </a>

                        <a href="{{ route('inventory.index') }}/{{ $inventory->id }}/edit" class="btn btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Edit">
                            <i class="mdi mdi-pencil"></i>
                        </a>

                        <a href="{{ route('inventory.index') }}/{{ $inventory->id }}" class="btn btn-outline-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Hapus">
                            <i class="mdi mdi-trash-can"></i>
                        </a>
                    </div>
                </th>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection