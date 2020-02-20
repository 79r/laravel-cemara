@extends('layouts.master')

@section('content')
<div class="text-center my-4">
    <h4 class="header-title-lg">{{ strtoupper('Daftar Supplier') }}</h4>
</div>
<div class="table-rep-plugin">
    <div class="table-responsive mb-0" data-pattern="priority-columns">
        <table id="table-cemara-inventory" class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th data-priority="1">Nama</th>
                <th data-priority="2">No Hp</th>
                <th data-priority="3">Email</th>
                <th data-priority="4">Alamat</th>
                <th data-priority="5">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($suppliers as $supplier)
            <tr>
                <th>{{ $supplier->id }}</th>
                <th>{{ $supplier->name }}</th>
                <th>{{ $supplier->phone }}</th>
                <th>{{ $supplier->email }}</th>
                <th>{{ $supplier->address }}</th>
                <th>
                    <div class="btn-group" role="group">

                        <a href="{{ route('suppliers.index') }}/{{ $supplier->id }}" class="btn btn-outline-success btn-sm" data-toggle="tooltip" data-placement="top" title="Lihat">
                            <i class="mdi mdi-eye"></i>
                        </a>

                        <a href="{{ route('suppliers.index') }}/{{ $supplier->id }}/edit" class="btn btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Edit">
                            <i class="mdi mdi-pencil"></i>
                        </a>

                        <a href="{{ route('suppliers.index') }}/{{ $supplier->id }}" class="btn btn-outline-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Hapus">
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