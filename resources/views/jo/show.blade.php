@extends('layouts.master')

@section('content')
<div id="jo-item">
    <div class="row">
        <div class="col-xl-7">
            <div class="card pl-sm-0 pl-md-4">
                <div class="bg-transparent">
                    <div class="my-3">
                        <a href="{{ route('jo.cemara.index') }}/{{ $jo->id }}/edit" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Edit">
                            <i class="mdi mdi-pencil"></i> <span>Edit JO ini</span>
                        </a>
                    </div>
                    <h5 class="header-title-lg mb-3">{{ $jo->jo_code }}</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="media my-2">
                            <div class="media-body">
                                <p class="text-muted mb-1">Nama Jo</p>
                                <h5 class="mb-0">{{ $jo->title }}</h5>
                            </div>
                        </div>
                    </li>

                    <li class="list-group-item">
                        <div class="media my-2">
                            <div class="media-body">
                                <p class="text-muted mb-1">Tanggal Masuk</p>
                                <h5 class="mb-0">
                                    <span class="start_date">
                                        {{ date('d-m-Y : H:i', strtotime($jo->start_date)) }}
                                    </span>
                                </h5>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="media my-2">
                            <div class="media-body">
                                <p class="text-muted mb-1">Deadline</p>
                                <h5 class="mb-0">
                                    <span class="deadline">
                                        {{ date('d-m-Y : H:i', strtotime($jo->deadline)) }}
                                    </span>
                                </h5>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="media my-2">
                            <div class="media-body">
                                <p class="text-muted mb-1">Catatan</p>
                                <div id="inventory-notes">
                                    @if (!empty($jo->notes))
                                        <h6 class="mb-0">{!! $jo->notes !!}</h6>
                                        <script>
                                            const table = document.querySelector('#inventory-notes table');
                                            table.classList = 'table table-striped table-dark';
                                        </script>
                                    @else
                                        <h6 class="mb-0">Nggak ada catatan untuk JO ini</h6>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>    
</div>



@endsection