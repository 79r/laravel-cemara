@extends('layouts.master')

@section('content')
<h4 class="header-title">Input Data Inventory</h4>
<p class="card-title-desc"></p>

<form class="col-sm-12 col-md-10 mx-auto" id="form-input-data-inventory" action="{{ url('/inventory') }}" method="POST">
    <div class="form-group row">
        <label for="example-text-input" class="col-md-2 col-form-label">Nama item</label>
        <div class="col-md-10">
            <input class="form-control" type="text" placeholder="Masukan nama inventory" id="example-text-input">
        </div>
    </div>
    
    <div class="form-group row">
        <label class="col-md-2 col-form-label">Pilih Kategori</label>
        <div class="col-md-10">
            <select class="custom-select">
                <option selected>Pilih Katgeori</option>
                <option placeholder="1">One</option>
                <option placeholder="2">Two</option>
                <option placeholder="3">Three</option>
            </select>
        </div>
    </div>
    
    <div class="form-group row">
        <label for="example-search-input" class="col-md-2 col-form-label">Search</label>
        <div class="col-md-10">
            <input class="form-control" type="search" placeholder="How do I shoot web" id="example-search-input">
        </div>
    </div>

    <div class="form-group row">
        <label >Category</label>
        {!! Form::select('category_id', $category, null, ['class' => 'form-control select', 'placeholder' => '-- Choose Category --', 'id' => 'category_id', 'required']) !!}
        <span class="help-block with-errors"></span>
    </div>
    
    <div class="form-group row">
        <label for="example-email-input" class="col-md-2 col-form-label">Email</label>
        <div class="col-md-10">
            <input class="form-control" type="email" placeholder="bootstrap@example.com" id="example-email-input">
        </div>
    </div>
    <div class="form-group row">
        <label for="example-url-input" class="col-md-2 col-form-label">URL</label>
        <div class="col-md-10">
            <input class="form-control" type="url" placeholder="https://getbootstrap.com" id="example-url-input">
        </div>
    </div>
    <div class="form-group row">
        <label for="example-tel-input" class="col-md-2 col-form-label">Telephone</label>
        <div class="col-md-10">
            <input class="form-control" type="tel" placeholder="1-(555)-555-5555" id="example-tel-input">
        </div>
    </div>
    <div class="form-group row">
        <label for="example-password-input" class="col-md-2 col-form-label">Password</label>
        <div class="col-md-10">
            <input class="form-control" type="password" placeholder="hunter2" id="example-password-input">
        </div>
    </div>
    <div class="form-group row">
        <label for="example-number-input" class="col-md-2 col-form-label">Number</label>
        <div class="col-md-10">
            <input class="form-control" type="number" placeholder="42" id="example-number-input">
        </div>
    </div>
    <div class="form-group row">
        <label for="example-datetime-local-input" class="col-md-2 col-form-label">Date and time</label>
        <div class="col-md-10">
            <input class="form-control" type="datetime-local" placeholder="2019-08-19T13:45:00" id="example-datetime-local-input">
        </div>
    </div>
    <div class="form-group row">
        <label for="example-date-input" class="col-md-2 col-form-label">Date</label>
        <div class="col-md-10">
            <input class="form-control" type="date" placeholder="2019-08-19" id="example-date-input">
        </div>
    </div>
    <div class="form-group row">
        <label for="example-month-input" class="col-md-2 col-form-label">Month</label>
        <div class="col-md-10">
            <input class="form-control" type="month" placeholder="2019-08" id="example-month-input">
        </div>
    </div>
    <div class="form-group row">
        <label for="example-week-input" class="col-md-2 col-form-label">Week</label>
        <div class="col-md-10">
            <input class="form-control" type="week" placeholder="2019-W33" id="example-week-input">
        </div>
    </div>
    <div class="form-group row">
        <label for="example-time-input" class="col-md-2 col-form-label">Time</label>
        <div class="col-md-10">
            <input class="form-control" type="time" placeholder="13:45:00" id="example-time-input">
        </div>
    </div>
    <div class="form-group row">
        <label for="example-color-input" class="col-md-2 col-form-label">Color</label>
        <div class="col-md-10">
            <input class="form-control" type="color" placeholder="#3051d3" id="example-color-input">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-2 col-form-label">Select</label>
        <div class="col-md-10">
            <select class="form-control">
                <option>Select</option>
                <option>Large select</option>
                <option>Small select</option>
            </select>
        </div>
    </div>
</form> 

@endsection