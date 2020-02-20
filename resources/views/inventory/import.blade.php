@extends('layouts.master')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="card-title text-center">
            <h4 class="header-title-lg">Import Data Excel</h4>
            <p class="card-title-desc"></p>
        </div>
        <form
            method="POST"
            enctype="multipart/form-data"
            action="{{ route('inventory.store.excel') }}">
            
            @csrf

            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif

            @if (session('error'))
                <div class="alert alert-success">
                    {{ session('error') }}
                </div>
            @endif

            <div class="form-group">
                <label for="">File (.xls, .xlsx)</label>
                <input type="file" class="form-control" name="file">
                <p class="text-danger">{{ $errors->first('file') }}</p>
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-sm">Upload</button>
            </div>
        </form>
    </div>
</div>

@endsection