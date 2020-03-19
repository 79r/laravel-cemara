@extends('layouts.master-alternatif')
@section('pageTitle', $pageTitle)

@section('breadcrumb')
<ol class="breadcrumb m-0">
    <li class="breadcrumb-item"><a href="javascript: void(0);">Cemara App</a></li>
<li class="breadcrumb-item active">Buat Jo</li>
</ol>
@endsection

@section('content')

@if ($message = Session::get('success'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Oke Sip',
        text: 'Jo Berhasil Dibuat',
    });
</script>
@endif

{{ Form::open( array('url' => route('jo.cemara.store'), 'files' => true, 'id' => 'form-jo-custom', 'class' => 'row w-100') ) }}
<div class="col-lg-4">
    <div class="card h-100">
        <div class="card-body email-leftbar">

            <div class="mail-list mt-3">
                <h4 class="text-center font-weight-bold mb-4">
                    Pilih Klien dulu ya
                </h4>
                <div class="form-group">
                    <label for="parent_id">Pilih Klien</label>
                    {{ Form::select('client_id', $clients, null,
                        array('class' => 'form-control', 'id' => 'client-select2js', 'placeholder' => "Mohon Pilih Nama Klien") )
                    }}
                    @if ($errors->has('client_id'))
                    <div class="mt-2 alert alert-danger font-weight-bold">
                        Mohon isi nama klien
                    </div>
                    @endif
                </div>
                <script>
                    $(document).ready(function() {
                        $('#client-select2js').select2();
                    });
                </script>
            </div>

            <div class="alert alert-danger">
                Apabila Klien tidak ada dalam daftar di atas silahkan buat klien baru dengan klik tombol dibawah ini.
            </div>

            <div class="mt-3">
                <a href="" id="createNewClient" data-toggle="modal" data-target="#create-client" class="create-client btn btn-danger btn-block btn-rounded waves-effect waves-light"><i class="mdi mdi-plus mr-1"></i> Buat Klien Baru</a>
            </div>

        </div>
    </div>
</div>

<div class="col-lg-8">
    <div class="card mb-0">
        <div class="card-body">

            <div id="error-fields"> 
                <div class="row">
                    <div class="col-sm-12 col-md-10 col-lg-7 mx-auto">
                        @if(!empty($errors->all()))
                            <div class="alert alert-danger font-weight-bold">Ada kesalahan, Mohon diperiksa kembali ya</div>
                            <script>
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops.. :(',
                                text: 'Ada kesalahan, mohon periksa kembali ya',
                            });
                            </script>
                        @endif
                    </div>
                </div>
            </div>

            <div class="card-title mb-5 text-center mt-4">
                <div class="col-lg-10 mx-auto">
                    <div class="alert alert-primary">
                        Don't Worry, program ini sudah pintar nomor JO akan dibuat secara otomatis
                    </div> 
                </div>
            </div>

            <div class="badge badge-success position-absolute" style="font-size:16px;top:4px;right:5px">{{ $newJoCode }}</div>

        <div class="col-sm-12 col-md-10 mx-auto">
            
                <div class="form-group d-none">
                    <label for="parent_id">Jo dari</label>
                    {{ Form::select('parent_id', $parents, 1,
                        array('class' => 'form-control', 'id' => 'parent_id') )
                    }}
                    @if ($errors->has('parent_id'))
                    <div class="mt-2 alert alert-danger font-weight-bold">
                        {{-- {{ $errors->first('title') }} --}}
                        Jo dari mana ? mohon disii
                    </div>
                    @endif
                </div>

                
                <div class="form-group d-none">
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
                    @if ($errors->has('jo_status_id'))
                    <div class="mt-2 alert alert-danger font-weight-bold">
                        Mohon pilih status JO
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="title">Nama JO</label>
                    {{ Form::text('title', null,
                        array('class' => 'form-control', 'placeholder' => 'Nama JO'))
                    }}
                    @if ($errors->has('title'))
                    <div class="mt-2 alert alert-danger font-weight-bold">
                        Mohon isi judul JO :))
                    </div>
                    @endif
                </div>
        
                <div class="form-group uploader">
                    {{ Form::file('image_url', array('id' => 'file-upload', 'accept' => 'image/*', 'onchange' => 'readURL(this)')) }}
                    <label for="file-upload" id="file-drag">

                        {{-- Jika ada error tampilkan pesan ini agar upload ulang gambar --}}
                        @if(!empty($errors->all()))
                            <div id="show-error-image-upload">
                                <span>Mohon upload gambar JO</span>
                            </div>
                        @endif

                        <img id="file-image" src="#" alt="Preview" class="hidden">
                        <div id="start" >
                            <i class="mdi mdi-upload" aria-hidden="true"></i>
                            <div>Ambil gambar atau drag disini</div>
                            <div id="notimage" class="hidden">Silahkan pilih gambarnya</div>
                            <span id="file-upload-btn" class="btn btn-primary">Pilih gambar</span>
                            <br>
                            <span class="text-danger">{{ $errors->first('image_url') }}</span>
                        </div>
                    </label>
                    @if ($errors->has('image_url'))
                    <div class="mt-2 alert alert-danger font-weight-bold">
                        Mohon upload gambar
                    </div>
                    @endif
                </div>
                <script>
                    function readURL(input, id) {
                        id = id || '#file-image';
                        if (input.files && input.files[0]) {
                            var reader = new FileReader();
                    
                            reader.onload = function (e) {
                                $(id).attr('src', e.target.result);
                            };
                    
                            reader.readAsDataURL(input.files[0]);
                            $('#file-image').removeClass('hidden');
                            $('#start').hide();
                            $('#show-error-image-upload').hide();
                        }
                    }
                </script> 
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
                            @if ($errors->has('start_date'))
                            <div class="mt-2 alert alert-danger font-weight-bold">
                                Ups.. tanggal masuk harus diisi.
                            </div>
                            @endif
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
                            @if ($errors->has('deadline'))
                            <div class="mt-2 alert alert-danger font-weight-bold">
                                Ups.. deadline harus diisi
                            </div>
                            @endif
                        </div>
                    </div>
                </div> <!-- row -->
                <div class="form-group d-none">
                    <label for="description">Deskripsi Jo</label>
                    {{ Form::textarea('description')}}
                    <small class="text-muted">Isi jika diperlukan</small>
                </div>
                <div class="form-group">
                    <label for="material">Material</label>
                    {{ Form::text('material', null, array('class' => 'form-control', 'placeholder' => 'Nama materialnya apa ?') )}}
                    @if ($errors->has('material'))
                    <div class="mt-2 alert alert-danger font-weight-bold">
                        Ups.. bahan harus di isi dong
                    </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="finishing">Finishing</label>
                    {{ Form::text('finishing', null, array('class' => 'form-control', 'placeholder' => 'Finishingnya apa ?') )}}
                    @if ($errors->has('finishing'))
                    <div class="mt-2 alert alert-danger font-weight-bold">
                        Ups.. finishing harus diisi
                    </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="qty">QTY</label>
                    {{ Form::text('qty', null, array('class' => 'form-control', 'placeholder' => 'QTY Berapa') )}}
                    @if ($errors->has('qty'))
                    <div class="mt-2 alert alert-danger font-weight-bold">
                        Ups.. qty harus di isi
                    </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="size">Ukuran</label>
                    {{ Form::text('size', null, array('class' => 'form-control', 'placeholder' => 'Ukurannya berapa') )}}
                    @if ($errors->has('size'))
                    <div class="mt-2 alert alert-danger font-weight-bold">
                        Mohon ukuran harus di isi
                    </div>
                    @endif
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
            


            

        </div>


        </div>
    </div>
    <!-- end card -->
</div>
{{ Form::close() }}


{{-- Modal Create Client --}}
@include('client-ajax.modal-create')

@endsection