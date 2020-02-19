@extends('layouts.master')

@section('content')
<div class="text-center mt-5">
    <h4 class="header-title-lg mb-0">Data Inventory Global</h4>
    <p class="card-title-desc">Cemara Multi Kreatif</p>
</div>
<div class="table-rep-plugin">
    <div class="table-responsive mb-0" data-pattern="priority-columns">
        <table id="tech-companies-1" class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th data-priority="1">Nama</th>
                <th data-priority="3">Kategori</th>
                <th data-priority="1">Merek</th>
                <th data-priority="3">Supplier</th>
                <th data-priority="3">Harga</th>
                <th data-priority="6">Qty</th>
                <th data-priority="6">Tahun Beli</th>
                <th data-priority="6">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($inventories as $inventory)
            <tr>
                <th>{{ $inventory->id }}</th>
                <th>{{ $inventory->name }}</th>
                <th>{{ $inventory->category->name }}</th>
                <th>{{ $inventory->brand->name }}</th>
                <th>{{ $inventory->supplier->name }}</th>
                <th>@currency($inventory->price)</th>
                <th>{{ $inventory->qty }}</th>
                <th>{{ $inventory->years_of_purchase }}</th>
                <th>
                    <a href="{{ route('inventory.index') }}/{{ $inventory->id }}" class="btn btn-sm btn-primary">Show</a>
                    <a href="" class="btn btn-sm btn-success">Edit</a>
                </th>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection