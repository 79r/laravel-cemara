@extends('layouts.master')

@section('content')
<div id="job-list">
    <div class="text-center mt-5">
        <h4 class="header-title-lg">Client</h4>
    </div>
    <div class="table-rep-plugin">
        <div class="table-responsive mb-0" data-pattern="priority-columns">
            <table id="table-cemara-inventory" class="table table-striped">
                <thead>
                <tr>
                    <th>ID Client</th>
                    <th data-priority="1">Nama</th>
                    <th data-priority="2">Phone</th>
                    <th data-priority="3">Email</th>
                    <th data-priority="5">Action</th>

                </tr>
                </thead>
                <tbody>
                @foreach($clients as $client)
                <tr>
                    <th>
                        <a href="{{ route('jo.cemara.show', $client->id) }}">
                            <span class="badge badge-primary badge-sn">
                                {{ $client->id }}
                            </span>
                        </a>
                    </th>
                    <th>{{ $client->name }}</th>
                    <th>{{ $client->phone }}</th>
                    <th>{{ $client->email }}</th>
                    <th>
                        <div class="btn-group" role="group">
                            <a href="{{ route('client.show', $client->id) }}" class="btn btn-outline-success btn-sm" data-toggle="tooltip" data-placement="top" title="Lihat">
                                <i class="mdi mdi-eye"></i>
                            </a>
    
                            <a href="{{ route('client.index') }}/{{ $client->id }}/edit" class="btn btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Edit">
                                <i class="mdi mdi-pencil"></i>
                            </a>
    
                            <a href="{{ route('client.index') }}/{{ $client->id }}" class="btn btn-outline-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Hapus">
                                <i class="mdi mdi-trash-can"></i>
                            </a>
                        </div>
                    </th>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
    
    {{-- Redirect ke halaman single item jika hasil pencarian yang ditampilkan cuma 1 data --}}
    <script>
        // const result = document.querySelectorAll('.table-responsive tbody tr');
        // if(result.length == 1) {
        //     const linkItem = document.querySelector('.table-responsive tbody tr th a');
        //     linkItem.click();
        // }
    </script>
    
    
    <div class="mt-4 text-center">
        {{ $clients->links() }}
    </div>
    
</div>
@endsection