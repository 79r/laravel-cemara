@extends('layouts.master')

@section('content')
<div class="my-5">
    <div class="card-title text-center mb-5">
        <h4 class="header-title-lg">Buat JO</h4>
        <p class="lead font-weight-bold">Don't Worry, program ini sudah pintar nomor JO akan dibuat secara otomatis</p>
    </div>
    <div class="col-sm-12 col-md-10 col-lg-7 mx-auto">
        {{ Form::open( array('url' => route('jo.cemara.store'), 'files' => true) ) }}
    
            <div class="form-group">
                <label for="parent_id">Jo dari</label>
                {{ Form::select('parent_id', $parents, 1,
                    array('class' => 'form-control', 'id' => 'parent_id') )
                }}
            </div>

            <div class="form-group">
                <label for="parent_id">Nama Klien</label>
                {{ Form::select('client_id', $clients, null,
                    array('class' => 'form-control', 'id' => 'client_id', 'placeholder' => "<-- Mohon Pilih Nama Klien -->") )
                }}
                <div class="mt-2 alert alert-warning">
                    <p>Apabila Klien tidak ada dalam daftar di atas silahkan buat klien baru dengan klik tombol dibawah ini.</p>
                    <a id="createNewClient" class="btn btn-primary create-client" data-toggle="modal" data-target="#create-client" class="text-light">Buat Client</a>
                </div>
            </div>

            <div class="form-group">
                <label for="jo_status">Status JO</label>
                {{ Form::select('jo_status_id', $status, 1,
                    array(
                        'class'         => 'form-control',
                        'id'            => 'jo_status_id',
                        'placeholder'   => 'Pilih status JO'
                        ))
                }}
                {{-- 
                    parameter pertama nama name
                    parameter kedua data,
                    parameter ketiga value
                    parameter ke empat opsional ini berupa array 
                --}}
            </div>

            {{ Form::select('client_id', $clients, null,
                    array('class' => 'form-control', 'id' => 'client_id', 'placeholder' => "<-- Mohon Pilih Nama Klien -->") )
                }}

            <div class="form-group">
                <label for="title">Nama JO</label>
                {{ Form::text('title', null,
                    array('class' => 'form-control', 'placeholder' => 'Nama JO'))
                }}
            </div>
    
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group mb-4">
                        <label>Tanggal Masuk</label>
                        {{ Form::text('start_date', \Carbon\Carbon::now(),
                            array(
                                    'class' => 'form-control datepicker-here',
                                    'data-timepicker' => 'true',
                                    'data-language'   => 'en'
                                ))
                        }}
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group mb-4">
                        <label>Deadline</label>
                        {{ Form::text('deadline', \Carbon\Carbon::now(),
                            array(
                                    'class' => 'form-control datepicker-here',
                                    'data-timepicker' => 'true',
                                    'data-language'   => 'en'
                                ))
                        }}
                    </div>
                </div>
            </div> <!-- row -->
            <div class="form-group">
                <label for="description">Deskripsi Jo</label>
                {{ Form::textarea('description')}}
                <small class="text-muted">Isi jika diperlukan</small>
            </div>
            <div class="form-group">
                <label for="material">Material</label>
                {{ Form::text('material', null, array('class' => 'form-control', 'placeholder' => 'Nama materialnya apa ?') )}}
            </div>
            <div class="form-group">
                <label for="finishing">Finishing</label>
                {{ Form::text('finishing', null, array('class' => 'form-control', 'placeholder' => 'Finishingnya apa ?') )}}
            </div>
            <div class="form-group">
                <label for="qty">QTY</label>
                {{ Form::text('qty', null, array('class' => 'form-control', 'placeholder' => 'QTY Berapa') )}}
            </div>
            <div class="form-group">
                <label for="size">Ukuran</label>
                {{ Form::text('size', null, array('class' => 'form-control', 'placeholder' => 'Ukurannya berapa') )}}
                <small class="text-muted">Misal 5x5 CM / 1 M</small>
            </div>
            <div class="form-group">
                <label for="notes">Notes!. Keterangan untuk Tim Produksi</label>
                {{ Form::textarea('notes') }}
                <small class="text-muted">Isi keterangan jo</small>
            </div>
            <div class="form-group">
                {{ Form::submit('submit', array('class' => 'btn btn-lg btn-block btn-primary')) }}
            </div>
        {{ Form::close() }}


        {{-- Modal Create Client --}}
        @include('client.modal-create')

    </div>
</div>
@endsection