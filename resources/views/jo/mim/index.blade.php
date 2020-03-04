@extends('layouts.master')

@section('content')
<div id="job-list">
    <div class="text-center mt-5">
        <h4 class="header-title-lg">{{ strtoupper('Job List') }}</h4>
        <div class="sub-str mb-3">
            <p>MIM</p>
        </div>
        <div class="text-center mb-5">
            <a href="{{ route('jo.cemara.index') }}" class="btn btn-primary">Buka JO di Cemara Kreatif</a>
        </div>
    </div>
    <div class="table-rep-plugin">
        <div class="table-responsive mb-0" data-pattern="priority-columns">
            <table id="table-cemara-inventory" class="table table-striped">
                <thead>
                <tr>
                    <th>Kode JO</th>
                    <th data-priority="1">Nama</th>
                    <th data-priority="2">Tanggal Masuk</th>
                    <th data-priority="3">Deadline</th>
                    <th data-priority="4">Material</th>
                    <th data-priority="5">Finishing</th>
                    <th data-priority="6">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($job_list as $jo)
                <tr>
                    <th>
                        <a href="{{ route('jo.mim.show', $jo->id) }}">
                            <span class="badge badge-primary badge-sn">
                                {{ $jo->jo_code }}
                            </span>
                        </a>
                    </th>
                    <th>{{ $jo->title }}</th>
                    <th>{{ date('d-m-Y : H:i', strtotime($jo->start_date)) }}
                    <th>{{ date('d-m-Y : H:i', strtotime($jo->deadline)) }}
                    <th>{{ $jo->material }}</th>
                    <th>{{ $jo->finishing }}</th>
                    <th>
                        <div class="btn-group" role="group">
                            <a href="{{ route('jo.mim.show', $jo->id) }}" class="btn btn-outline-success btn-sm" data-toggle="tooltip" data-placement="top" title="Lihat">
                                <i class="mdi mdi-eye"></i>
                            </a>
    
                            <a href="{{ route('jo.mim.index') }}/{{ $jo->id }}/edit" class="btn btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Edit">
                                <i class="mdi mdi-pencil"></i>
                            </a>
    
                            <a href="{{ route('jo.mim.index') }}/{{ $jo->id }}" class="btn btn-outline-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Hapus">
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
        {{ $job_list->links() }}
    </div>
</div>
@endsection