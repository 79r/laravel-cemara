@extends('layouts.master')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="card-title text-center">
            <h4 class="header-title-lg">Buat Kategori Baru</h4>
            <p class="card-title-desc"></p>
        </div>

        <form class="col-sm-12 col-md-10 mx-auto" 
                    id="form-input-data-inventory"
                    action="{{ url('/inventory/categories') }}"
                    method="POST">
        
            <div id="error">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
            </div>
        
            <div class="form-group row">
                <label for="example-text-input" class="col-md-2 col-form-label">Nama Kategori</label>
                <div class="col-md-10">
                    <input class="form-control" name="name" type="text" placeholder="Masukan nama inventory" id="input-name">
                </div>
            </div>
        
            {{ csrf_field() }}
            <div class="form-group row">
                <div class="col-12 text-center">
                    <input type="submit" class="btn btn-primary waves-effect waves-light" value="Submit">
                </div>
            </div>
        
        </form> 

    </div>
</div>

@endsection