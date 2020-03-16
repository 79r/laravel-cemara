@extends('layouts.client-base')
@section('pageTitle', $pageTitle)

@section('breadcrumb')
<ol class="breadcrumb m-0">
    <li class="breadcrumb-item"><a href="javascript: void(0);">Cemara App</a></li>
<li class="breadcrumb-item active">Client</li>
</ol>
@endsection

@section('content')
<div class="col-lg-4">
    <div class="card h-100">
        <div class="card-body email-leftbar">
            <a href="{{ route('client.edit', $client->id) }}" class="btn btn-danger btn-block btn-rounded waves-effect waves-light"><i class="mdi mdi-pencil"></i> Edit Client ini</a>
            
            <ul class="list-group list-group-flush mt-4">
                <li class="list-group-item">
                    <h5 class="header-title-lg mb-3">{{ $client->name }}</h5>
                    <div class="media my-2">
                        <div class="media-body">
                            <p class="text-muted mb-1">Telpon/HP</p>
                            <h5 class="mb-0">{{ $client->phone }}</h5>
                        </div>
                    </div>
                </li>

                <li class="list-group-item">
                    <div class="media my-2">
                        <div class="media-body">
                            <p class="text-muted mb-1">Email</p>
                            <h5 class="mb-0">{{ $client->email }}</h5>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="media my-2">
                        <div class="media-body">
                            <p class="text-muted mb-1">Alamat</p>
                            <h5 class="mb-0">{{ $client->address }}</h5>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="col-lg-8">
    <div class="card mb-0">
        <div class="card-body">
            <h5 class="card-title text-center">Jo dari <b>{{ $client->name }}</b></h5>
            <!-- Tab panes -->
            <div class="tab-content pt-3">
                <div>
                    <ul class="message-list mb-0">
                        @foreach($client->jo as $jo)
                        <li>
                            <a href="">
                                <div class="col-mail col-mail-1">
                                    <div>
                                        <span class="badge badge-primary">{{ $jo->jo_code }}</span>
                                    </div>
                                    <p  class="title">{{ $jo->title }}</p>
                                </div>
                                <div class="col-mail col-mail-2">
                                    <span>{{ date('d, F', strtotime($jo->start_date)) }}</span>
                                    <div class="date">
                                        <a href="{{ route('jo.cemara.show', $jo->id) }}" class="btn btn-sm btn-success"><i class="mdi mdi-eye"></i> Lihat</a>
                                    </div>
                                </div>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>                        
            </div>
            
        </div>
    </div>
    <!-- end card -->
</div>
@endsection