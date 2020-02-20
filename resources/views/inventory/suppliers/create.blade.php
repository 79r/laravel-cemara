@extends('layouts.master')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="card-title text-center">
            <h4 class="header-title-lg">Input Data Supplier</h4>
            <p class="card-title-desc"></p>
        </div>

        <form class="col-sm-12 col-md-10 mx-auto" 
                    id="form-input-data-inventory"
                    action="{{ url('/inventory') }}"
                    enctype="multipart/form-data" method="POST">
        
            <div id="error">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
            </div>
        
            <div class="form-group row">
                <label for="example-text-input" class="col-md-2 col-form-label">Nama Supplier</label>
                <div class="col-md-10">
                    <input class="form-control" name="name" type="text" placeholder="Masukan nama supplier" id="input-name">
                </div>
            </div>
            
            <div class="form-group row">
                <label for="example-number-input" class="col-md-2 col-form-label">HP/Telpon</label>
                <div class="col-md-10">
                    <input class="form-control" name="phone" type="number" placeholder="Nomor telpon/hp" id="input-phone">
                </div>
            </div>

            <div class="form-group row">
                <label for="example-text-input" class="col-md-2 col-form-label">Email Supplier</label>
                <div class="col-md-10">
                    <input class="form-control" name="email" type="text" placeholder="Masukan email supplier" id="input-name">
                </div>
            </div>
        
            <div class="form-group row">
                <label for="example-date-input" class="col-md-2 col-form-label">Alamat</label>
                <div class="col-md-10">
                    <textarea class="form-control" name="address" id="input-notes">Alamat supplier</textarea>
                </div>
            </div>

            <div class="form-group row">
                <label for="example-date-input" class="col-md-2 col-form-label">Notes (Opsional)</label>
                <div class="col-md-10">
                    <textarea class="form-control" name="notes" placeholder="Tulis catatan bila diperlukan" id="input-notes">Catatan bila ada</textarea>
                </div>
            </div>
        
            <div class="form-group row">
                <label for="example-date-input" class="col-md-2 col-form-label">Foto, logo atau gambar supplier</label>
                <div class="col-md-10">
                    <input class="form-control" type="file" name="image_url" id="input-image-url">
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