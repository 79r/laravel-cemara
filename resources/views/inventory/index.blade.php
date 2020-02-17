@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="main-heading mt-5 text-center">
                <h1>Cemara Inventory</h1>
            </div>
        </div>
        <div class="col-md-10 col-lg-12 mx-auto">
            <div class="box">
                <table class="table table-bordered">
                    <thead> 
                        <tr class="table-primary">
                            <th scope="col">Nama</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Merek</th>
                            <th scope="col">Supplier</th>
                            <th scope="col">Tahun Beli</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($inventory as $item)
                            <tr>
                                <td class="font-weight-bold">{{ $item->name }}</td>
                                <td>@currency($item->price)</td>
                                <td>{{ $item->category->name }}</td>
                                <td>{{ $item->merk->name }}</td>
                                <td>{{ $item->supplier->name }}</td>
                                <td>{{ $item->tahun_beli }}</td>
                                <td class="text-center">
                                    <a href="" class="btn btn-sm btn-success"><i class="material-icons icon-sm">search</i></a>
                                    <a href="" class="btn btn-sm btn-primary"><i class="material-icons icon-sm">edit</i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>
@endsection