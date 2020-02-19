@extends('layouts.master')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="card-title text-center">
            <h4 class="header-title-lg">Edit Inventory</h4>
            <p class="card-title-desc"></p>
        </div>

        <form class="col-sm-12 col-md-10 mx-auto" 
                    id="form-input-data-inventory"
                    action="{{url('/inventory', $inventory->id)}}"
                    enctype="multipart/form-data" method="POST">
        
            <div id="error">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
            </div>
        
            <div class="form-group row">
                <label for="example-text-input" class="col-md-2 col-form-label">Nama item</label>
                <div class="col-md-10">
                    <input class="form-control" 
                            name="name" 
                            type="text" 
                            placeholder="Masukan nama inventory" 
                            id="input-name"
                            value="{{ $inventory->name }}">
                </div>
            </div>
            
            <div class="form-group row">
                <label class="col-md-2 col-form-label">Pilih Kategori</label>
                <div class="col-md-10">
                    {!! Form::select('category_id', $category, null, ['class' => 'form-control select', 'placeholder' => 'Pilih Kategori Inventory', 'id' => 'input-catagory-id', 'required']) !!}
                </div>
            </div>
        
            <div class="form-group row">
                <label class="col-md-2 col-form-label">Pilih Merek</label>
                <div class="col-md-10">
                    {!! Form::select('brand_id', $brand, null, ['class' => 'form-control select', 'placeholder' => 'Pilih Merk Inventory', 'id' => 'input-brand-id', 'required']) !!}
                </div>
            </div>
        
            <div class="form-group row">
                <label class="col-md-2 col-form-label">Pilih Supplier</label>
                <div class="col-md-10">
                    {!! Form::select('supplier_id', $supplier, null, ['class' => 'form-control select', 'placeholder' => 'Pilih Supplier', 'id' => 'input-supplier-id', 'required']) !!}
                </div>
            </div>
        
            <div class="form-group row">
                <label for="example-number-input" class="col-md-2 col-form-label">Harga</label>
                <div class="col-md-10">
                    <div class="input-group mt-3 mt-sm-0">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Rp. </div>
                        </div>
                        <input 
                                type="text"
                                class="form-control"
                                name="price"
                                id="input-price"
                                placeholder="100000"
                                value={{ $inventory->price }}>
                    </div>
                </div>
            </div>
        
            <div class="form-group row">
                <label for="example-number-input" class="col-md-2 col-form-label">Qty</label>
                <div class="col-md-10">
                    <input 
                        class="form-control"
                        name="qty" type="number"
                        placeholder="" id="input-qty"
                        value="{{ $inventory->qty }}">
                </div>
            </div>
        
            <div class="form-group row">
                <label for="example-date-input" class="col-md-2 col-form-label">Tahun Beli</label>
                <div class="col-md-10">
                    <input 
                            class="form-control"
                            type="date"
                            name="year_of_purchase"
                            placeholder="2019-01-01"
                            id="input-year-of-purchase"
                            value="{{ $inventory->year_of_purchase }}">
                </div>
            </div>
        
            <div class="form-group row">
                <label for="example-date-input" class="col-md-2 col-form-label">Catatan (Opsional)</label>
                <div class="col-md-10">
                    <textarea 
                            class="form-control"
                            type="date" name="notes"
                            placeholder="Tulis catatan bila diperlukan"
                            id="input-notes">{{ $inventory->notes }}</textarea>
                </div>
            </div>
        
            <div class="form-group row">
                <label for="example-date-input" class="col-md-2 col-form-label">Photo Inventory</label>
                <div class="col-md-10">
                    <input
                        class="form-control"
                        type="file"
                        name="image_url"
                        id="input-image-url"
                        value="{{ $inventory->image_url }}">
                </div>
            </div>
            
            <input type="hidden" name="_method" value="PUT">
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