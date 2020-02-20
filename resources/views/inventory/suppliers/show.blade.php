@extends('layouts.master')

@section('content')
<div id="inventory-item">
    <div class="row">
        <div class="col-xl-7">
            <div class="card pl-sm-0 pl-md-4">
                <div class="bg-transparent">
                    <div class="my-3">
                        <a href="{{ route('suppliers.index') }}/{{ $supplier->id }}/edit" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Edit">
                            <i class="mdi mdi-pencil"></i> <span>Edit item ini</span>
                        </a>
                    </div>
                    <h5 class="header-title-lg mb-3">{{ $supplier->name }}</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="media my-2">
                            <div class="media-body">
                                <p class="text-muted mb-1">Nama Supplier</p>
                                <h5 class="mb-0">{{ $supplier->name }}</h5>
                            </div>
                        </div>
                    </li>

                    <li class="list-group-item">
                        <div class="media my-2">
                            <div class="media-body">
                                <p class="text-muted mb-1">HP/Telepon</p>
                                <h5 class="mb-0">{{ $supplier->phone }}</h5>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="media my-2">
                            <div class="media-body">
                                <p class="text-muted mb-1">Email</p>
                                <h5 class="mb-0">{{ $supplier->email }}</h5>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="media my-2">
                            <div class="media-body">
                                <p class="text-muted mb-1">Alamat</p>
                                <h5 class="mb-0">{{ $supplier->address }}</h5>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="media my-2">
                            <div class="media-body">
                                <p class="text-muted mb-1">Catatan</p>
                                @if (!empty($supplier->notes))
                                    <h6 class="mb-0">{{ $supplier->notes }}</h6>
                                @else
                                    <h6 class="mb-0">Tidak ada catatan untuk supplier ini</h6>
                                @endif
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="col-xl-5">
            @if (!empty($supplier->image_url))
            <div class="img-thumbnail rounded">
                <img class="img-fluid" src="{{ url($supplier->image_url) }}" alt="">
            </div>
            @else
                <h4>Tidak ada foto</h4>
            @endif
        </div>
        
    </div>    
</div>



@endsection