@extends('layouts.master')

@section('content')
<div id="inventory-item">
    <div class="row">
        <div class="col-xl-6">
            <div class="card pl-sm-0 pl-md-4">
                <div class="bg-transparent">
                    <div class="my-3">
                        <a href="{{ route('inventory.index') }}/{{ $client->id }}/edit" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Edit">
                            <i class="mdi mdi-pencil"></i> <span>Edit client ini</span>
                        </a>
                    </div>
                    <h5 class="header-title-lg mb-3">{{ $client->name }}</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="media my-2">
                            <div class="media-body">
                                <p class="text-muted mb-1">Telpon/HP</p>
                                <h5 class="mb-0">{{ $client->phone }}</h5>
                            </div>
                        </div>
                    </li>
    
                    <li class="list-group-item">
                        <div class="media my-2">
                            <div class="media-body">
                                <p class="text-muted mb-1">Email</p>
                                <h5 class="mb-0">{{ $client->email }}</h5>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="media my-2">
                            <div class="media-body">
                                <p class="text-muted mb-1">Alamat</p>
                                <h5 class="mb-0">{{ $client->address }}</h5>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="col-xl-6 mt-3">
            <div class="text-center">
                <h4>Daftar Jo dari Klien <b>{{$client->name}}</b></h4>
            </div>
            <div class="table-rep-plugin">
                <div class="table-responsive mb-0" data-pattern="priority-columns">
                    <table id="table-cemara-inventory" class="table table-striped">
                        <thead>
                        <tr>
                            <th>ID JO</th>
                            <th data-priority="1">Nama</th>
                            <th data-priority="2">Ukuran</th>
                            <th data-priority="3">Bahan</th>        
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($client->jo as $item)
                        <tr>
                            <th>
                                <a href="{{ route('jo.cemara.show', $item->id) }}">
                                    <span class="badge badge-primary badge-sn">
                                        {{ $item->jo_code }}
                                    </span>
                                </a>
                            </th>
                            <th>{{ $item->title }}</th>
                            <th>{{ $item->size }}</th>
                            <th>{{ $item->material }}</th>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>    
</div>



@endsection