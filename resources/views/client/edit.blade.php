@extends('layouts.master')

@section('content')
<div class="my-5">
    <div class="card-title mb-5 text-center">
        <h4 class="header-title-lg">Edit Data Klien {{ $client->name }}</h4>
    </div>

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

    <div class="col-sm-12 col-md-10 col-lg-7 mx-auto">
        {{ Form::model($client, array('url' => route('client.update', $client->id), 'method' => 'PUT', 'files' => true) ) }}

            <div class="form-group">
                <label for="name">Nama Klien</label>
                {{ Form::text('name', old('title'),
                    array('class' => 'form-control', 'placeholder' => 'Nama Klien'))
                }}
                @if ($errors->has('name'))
                <div class="mt-2 alert alert-danger font-weight-bold">
                    Nama Klien Harus Diisi
                </div>  
                @endif
            </div>
            <div class="form-group">
                <label for="phone">HP/Telepon</label>
                {{ Form::text('phone', old('title'),
                    array('class' => 'form-control', 'placeholder' => 'HP/Telepon'))
                }}
                @if ($errors->has('phone'))
                <div class="mt-2 alert alert-danger font-weight-bold">
                    Nomor HP klien harus diisi dong
                </div>  
                @endif
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                {{ Form::text('email', old('title'),
                    array('class' => 'form-control', 'placeholder' => 'Email'))
                }}
                @if ($errors->has('email'))
                <div class="mt-2 alert alert-danger font-weight-bold">
                    Email klien harus diisi ya
                </div>  
                @endif
            </div>
            <div class="form-group">
                <label for="address">Note!! alamat boleh diisi jika ada</label>
                {{ Form::textarea('address') }}
                <small class="text-muted">Alamat klien</small>
            </div>
            <div class="form-group">
                {{ Form::submit('submit', array('class' => 'btn btn-lg btn-block btn-primary')) }}
            </div>
        {{ Form::close() }}


        {{-- Modal Create Client --}}
        @include('client-ajax.modal-create')

    </div>
</div>
@endsection