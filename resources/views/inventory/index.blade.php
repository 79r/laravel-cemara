@extends('layouts.master')

@section('content')
<div class="text-center mt-5">
    <h4 class="header-title-lg">{{ strtoupper('Data Inventory Global') }}</h4>
    <div class="sub-str mb-3">
        <p>Cemara Multi Kreatif</p>
    </div>
</div>
<div class="table-rep-plugin">
    <div class="table-responsive mb-0" data-pattern="priority-columns">
        <table id="table-cemara-inventory" class="table table-striped">
            <thead>
            <tr>
                <th>Serial Number</th>
                <th data-priority="1">Nama</th>
                <th data-priority="2">Kategori</th>
                <th data-priority="3">Merek</th>
                <th data-priority="4">Supplier</th>
                <th data-priority="5">Harga</th>
                <th class="text-center" data-priority="6">Qty</th>
                <th data-priority="7">Tahun</th>
                <th data-priority="8">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($inventories as $inventory)
            <tr>
                <th>
                    <span class="badge badge-primary badge-sn">
                        {{ $inventory->serial_number }}
                    </span>
                </th>
                <th>{{ $inventory->name }}</th>
                <th>{{ $inventory->category->name }}</th>
                <th>{{ $inventory->brand->name }}</th>
                <th>{{ $inventory->supplier->name }}</th>
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

<div class="mt-4 text-center">
    {{ $inventories->links() }}
</div>

@endsection