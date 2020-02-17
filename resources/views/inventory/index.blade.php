@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="main-heading mt-5 text-center">
                <h1>Cemara Inventory</h1>
            </div>
        </div>
        <div class="col-md-10 col-lg-9 mx-auto">
            <div class="box">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Item</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Merek</th>
                            <th scope="col">Tahun Beli</th>
                            <th scope="col">Supplier</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($inventory as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td></td>
                                <td>{{ $item->merk->name }}</td>
                                <td>{{ $item->year_of_purchase }}</td>
                                <td></td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>
@endsection