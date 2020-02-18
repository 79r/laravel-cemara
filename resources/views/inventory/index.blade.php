@extends('layouts.master')

@section('content')
<h4 class="header-title">Example</h4>
<p class="card-title-desc">This is an experimental awesome solution for responsive tables with complex data.</p>
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
                <th></th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection