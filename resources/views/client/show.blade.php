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
                    <div class="col-sm-6 mx-auto">
                        <div class="img-fluid">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 512.012 512.012" style="enable-background:new 0 0 512.012 512.012;" xml:space="preserve">
                            <circle style="fill:#FAD55C;" cx="256.006" cy="256.006" r="256.006"/>
                            <path style="fill:#E3C04D;" d="M501.635,328.317C470.426,434.489,372.278,512,256.006,512c-10.157,0-20.165-0.611-30.022-1.764
                                L118.336,402.588l176.939,0.623l-2.26-133.266l-4.623-17.72l11.679-125.472L501.635,328.317z"/>
                            <path style="fill:#F9F9F9;" d="M185.643,285.67h4.923l28.835-15.726l4.692-18.343c-18.585-14.227-31.117-39.13-31.117-61.243
                                v-20.441c0-33.273,28.35-60.505,63.03-60.505l0,0c34.668,0,63.042,27.232,63.042,60.505v20.441
                                c0,22.113-12.544,47.016-31.129,61.232l4.692,18.354h0.404l28.027,15.726h5.327c37.032,0,67.319,29.146,67.319,64.598v52.319
                                H118.336v-52.319C118.336,314.735,148.611,285.67,185.643,285.67z"/>
                            <path style="fill:#EAEAED;" d="M230.711,114.531c7.759-3.286,16.314-5.119,25.295-5.119l0,0c34.668,0,63.042,27.232,63.042,60.505
                                v20.441c0,22.113-12.544,47.016-31.129,61.232l4.692,18.354h0.404l28.027,15.726h5.327c37.032,0,67.319,29.146,67.319,64.598v52.319
                                h-12.59v-48.446c0-35.452-30.287-64.598-67.319-64.598h-5.326l-28.027-15.726h-0.404l-4.692-18.354
                                c18.585-14.215,31.117-39.119,31.117-61.232v-20.441c0-33.273-28.362-60.505-63.03-60.505h-0.012
                                C239.069,113.286,234.815,113.712,230.711,114.531z"/>
                            <g>
                            </g>
                            </svg>
                        </div>
                    </div>
                    <h5 class="header-title mb-3 mt-4">{{ $client->name }}</h5>
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
                            <a href="{{ route('jo.cemara.show', $jo->id) }}">
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