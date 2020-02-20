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
            {{ csrf_field() }}

            <div id="error">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
            </div>

            <div class="form-group">
                <label for="file">Upload file excel</label>
                <input type="file" class="form-control-file" name="file" id="file" placeholder="">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

@endsection