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
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="name">Nama Item</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="name">Nama Item</label>
                        <select name="merk"  class="form-control">
                            <option value="1">Testing1</option>
                            <option value="1">Testing2</option>
                            <option value="1">Testing2</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name">Harga</label>
                        <input type="text" name="price" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="name">Tanggal Beli</label>
                        <input type="text" name="tanggal_beli" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-block btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection