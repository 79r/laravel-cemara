@extends('layouts.master')

@section('content')
<div class="col-md-10 col-lg-6 mx-auto">
    <div class="card">
        <div class="card-body">
            <div class="card-title text-center">
                <h4 class="header-title-lg">Import Data Excel</h4>
                <p class="card-title-desc"></p>
            </div>
            <form action="{{ route('inventory.import.post') }}" method="post" enctype="multipart/form-data">
                @csrf
    
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
    
                @if (session('error'))
                    <div class="alert alert-danger">
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
</div>

@endsection