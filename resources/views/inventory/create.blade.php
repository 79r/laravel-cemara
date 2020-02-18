@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="main-heading text-center">
                <h1>Input Data Inventory</h1>
            </div>
        </div>
        <div class="col-md-10 col-lg-8 mx-auto">
            <div class="box box-pd-lg">
                <form action="{{ url('/inventory') }}" method="POST">
                    <div class="form-group">
                        <label for="name">Nama Item</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="merk_id">Merk id</label>
                        <input type="text" name="merk_id" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="catagory_id">Category id</label>
                        <input type="text" name="catagory_id" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="catagory_id">Supplier id</label>
                        <input type="text" name="supplier_id" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="name">Harga</label>
                        <div class="input-group-prepend">
                            <div class="input-group-text">Rp.</div>
                        </div>
                        <input type="text" name="price" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="tahun_beli">Tahun Beli</label>
                        <input type="text" name="tahun_beli" class="form-control">
                    </div>
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="submit" class="btn btn-block btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection