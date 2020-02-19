@extends('layouts.master')

@section('content')
<div class="text-center mt-5">
    <h4 class="header-title-lg">{{ strtoupper('Kategori Data category Global') }}</h4>
    <div class="sub-str mb-3">
        <p>Cemara Multi Kreatif</p>
    </div>
</div>
<div class="table-rep-plugin">
    <div class="table-responsive mb-0" data-pattern="priority-columns">
        <table id="table-cemara-category" class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th data-priority="1">Name</th>
                <th data-priority="2">Notes</th>
                <th data-priority="3">Created At</th>
                <th data-priority="3">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
            <tr>
                <th>{{ $category->id }}</th>
                <th>{{ $category->name }}</th>
                <th>{{ $category->notes }}</th>
                <th>{{ date('Y', strtotime($category->created_at)) }}</th>
                <th>
                    <div class="btn-group" role="group">
                        <a href="{{ route('category.index') }}/{{ $category->id }}" class="btn btn-outline-success btn-sm" data-toggle="tooltip" data-placement="top" title="Lihat">
                            <i class="mdi mdi-eye"></i>
                        </a>

                        <a href="{{ route('category.index') }}/{{ $category->id }}/edit" class="btn btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Edit">
                            <i class="mdi mdi-pencil"></i>
                        </a>

                        <a href="{{ route('category.index') }}/{{ $category->id }}" class="btn btn-outline-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Hapus">
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