@extends('layouts.master')

@section('content')
<div class="my-5">
    <div class="card-title text-center">
        <h4 class="header-title-lg">Buat JO</h4>
        <p class="card-title-desc"></p>
    </div>
    <div class="col-sm-12 col-md-10 col-lg-7 mx-auto">
        {{ Form::open( array('url' => route('jo.store'), 'files' => true) ) }}
    
            <div class="form-group">
                <label for="parent_id">Jo Untuk di</label>
                {{ Form::select('parent_id', $parents, 1,
                    array('class' => 'form-control', 'id' => 'parent_id') )
                }}
            </div>
    
            <div class="form-group">
                <label for="serial_number">Code JO</label>
                {{ Form::text('title', 'auto_serial_number',
                    array('class' => 'form-control', 'placeholder' => 'Code JO'))
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
                <label for="notes">Notes!. Keterangan untuk Tim Produksi</label>
                {{ Form::textarea('notes') }}
                <small class="text-muted">Isi keterangan jo</small>
            </div>
            <div class="form-group">
                {{ Form::submit('submit', array('class' => 'btn btn-lg btn-block btn-primary')) }}
            </div>
        {{ Form::close() }}
    </div>
</div>
@endsection