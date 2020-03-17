@extends('layouts.master')

@section('content')

@if ($message = Session::get('updateSuccess'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Oke Sip!',
        text: 'JO berhasil di update!',
    });
</script>
@endif

<div id="jo-item">
    <div class="row">

        {{-- Left --}}
        <div class="col-xl-6">
            <div class="card pl-sm-0 pl-md-4">
                <div class="bg-transparent">
                    <div class="my-3">
                        <a href="#"
                            class="btn btn-sm btn-prmary"
                            style="padding-left: 2rem; padding-right: 2rem;
                            color: #fff;
                            background-color:{{ $jo->jo_status->color }}">
                            <span>
                                @if($jo->jo_status_id == 1)
                                <i class="mdi mdi-clock"></i>
                                @elseif($jo->jo_status_id == 2)
                                <i class="mdi mdi-trending-up"></i>
                                @else
                                <i class="mdi mdi-check"></i>
                                @endif
                                {{ $jo->jo_status->name }}
                            </span>
                        </a>

                        <a href="{{ route('jo.cemara.edit' , $jo->id) }}" class="btn btn-sm btn-success">
                            <i class="mdi mdi-pencil"></i> Edit JO ini
                        </a>
                        
                    </div>
                    <h5 class="header-title-lg mb-2 mt-4" data-toggle="tooltip" data-placement="top" title="{{ $jo->jo_code }}"> {{ $jo->title }}</h5>
                    <h2><span class="badge badge-primary">{{ $jo->jo_code }}</span></h2>
                </div>
                <ul class="list-group list-group-flush">

                    <li class="list-group-item">
                        <div class="media my-2">
                            <div class="media-body">
                                <p class="text-muted mb-1">Image</p>
                                <div class="col-md-10">
                                    @if($jo->image_url !==  NULL)
                                        <img class="img-fluid" src="{{ asset('uploads/jo/') }}/{{$jo->image_url}}" alt="">
                                    @else
                                        <img class="img-fluid" src="{{ asset('images/alc_snapicon.webp') }}" alt="">
                                    @endif
                                </div>
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
                                <p class="text-muted mb-1">Ukuran</p>
                                <h5 class="mb-0">
                                    {{ $jo->size }}
                                </h5>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="media my-2">
                            <div class="media-body">
                                <p class="text-muted mb-1">Material</p>
                                <h5 class="mb-0">
                                    {{ $jo->material }}
                                </h5>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="media my-2">
                            <div class="media-body">
                                <p class="text-muted mb-1">Finishing</p>
                                <h5 class="mb-0">
                                    {{ $jo->finishing }}
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

        {{-- Right --}}
        <div class="col-xl-6">
            <div class="card pl-sm-0 pl-md-4">
                <div class="bg-transparent">
                    <h5 class="header-title-lg mb-3" data-toggle="tooltip" data-placement="top" title="{{ $jo->client->name }}">Kontak Klien</h5>
                </div>
                <ul class="list-group list-group-flush">

                    <li class="list-group-item">
                        <div class="media my-2">
                            <div class="media-body">
                                <p class="text-muted mb-1">Nama</p>
                                <h5 class="mb-0">{{ $jo->client->name }}</h5>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="media my-2">
                            <div class="media-body">
                                <p class="text-muted mb-1">HP/Telp</p>
                                <h5 class="mb-0">{{ $jo->client->phone }}</h5>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="media my-2">
                            <div class="media-body">
                                <p class="text-muted mb-1">Email</p>
                                <h5 class="mb-0">{{ $jo->client->email }}</h5>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="media my-2">
                            <div class="media-body">
                                <p class="text-muted mb-1">Alamat</p>
                                <h5 class="mb-0">{{ $jo->client->address }}</h5>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="my-3">
                    <a href="{{ route('client.show', $jo->client->id) }}" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Show">
                        <i class="mdi mdi-launch"></i> <span>Lihat data klien</span>
                    </a>
                </div>
            </div>
        </div>
    </div>    
</div>



@endsection