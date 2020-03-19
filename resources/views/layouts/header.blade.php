<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="{{ route('dashboard') }}" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ asset('images/logo.png') }}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('images/logo.png') }}" alt="" height="20">
                    </span>
                </a>

                <a href="{{ route('dashboard') }}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('images/logo.png') }}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('images/logo.png') }}" alt="" height="20">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                <i class="mdi mdi-backburger"></i>
            </button>

            <!-- App Search-->
            {!! Form::open( array(
                'method' => 'POST', 
                'url' => route('job.search'),
                'class' => 'app-search d-none d-lg-block',
                'placeholder' => 'Cari inventory',
                'value' => old('keyword')
                )) !!}
                <div class="position-relative">
                    <input type="text" class="form-control" name="keyword" placeholder="Cari .." value="{{ old('keyword') }}">
                    <span class="mdi mdi-magnify"></span>
                </div>
            {!! Form::close() !!}
        </div>

        <div class="d-flex">

            <div class="dropdown d-inline-block d-lg-none ml-2">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="mdi mdi-magnify"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                    aria-labelledby="page-header-search-dropdown">


                    {!! Form::open( array(
                        'method' => 'POST',
                        'url' => route('job.search'),
                        'class' => 'p-3'
                        )) !!}
                        <div class="form-group m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" name="keyword" placeholder="Cari .." value="{{ old('keyword') }}">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                </div>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>

            <div class="dropdown d-inline-block">
            </div>

            <div class="dropdown d-none d-md-inline-block">
                <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                    <i class="mdi mdi-tune"></i>
                </button>
                @if(Auth::user()->role->id !== 3)
                <a href="{{ route('jo.cemara.create') }}" class="btn btn-light"><i class="mdi mdi-plus-box"></i> Buat JO Baru</a>
                @endif
                @if(Auth::user()->role->id == 3)
                <a href="{{ route('job') }}" class="btn btn-danger"><i class="mdi mdi-format-list-checks"></i> Buka JO<a>
                @endif
            </div>

            <div class="dropdown d-inline-block">
            @guest
            @else
            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                @if(Auth::user()->role->id  == 1)
                    <img class="rounded-circle header-profile-user" src="{{ asset('images/avatars/owner.png') }}" alt="Header Avatar">
                    <span class="d-none d-sm-inline-block ml-1">{{ Auth::user()->name }}</span>
                @elseif(Auth::user()->role->id  == 2)
                    <img class="rounded-circle header-profile-user" src="{{ asset('images/avatars/admin.png') }}" alt="Header Avatar">
                        <span class="d-none d-sm-inline-block ml-1">{{ Auth::user()->name }}</span>
                @else
                    <img class="rounded-circle header-profile-user" src="{{ asset('images/avatars/team.png') }}" alt="Header Avatar">
                        <span class="d-none d-sm-inline-block ml-1">{{ Auth::user()->name }}</span>
                @endif
                
                <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-right">
                <!-- item-->
                <a class="dropdown-item" href="#"><i class="mdi mdi-face-profile font-size-16 align-middle mr-1"></i> Profile</a>
                <a class="dropdown-item" href="#"><i class="mdi mdi-credit-card-outline font-size-16 align-middle mr-1"></i> Change Password</a>
                <a class="dropdown-item" href="#"><i class="mdi mdi-account-settings font-size-16 align-middle mr-1"></i> Settings</a>
                <div class="dropdown-divider"></div>
                {{ Form::open(array('url' => route('logout')) )}}
                    <button type="submit" class="dropdown-item"><i class="mdi mdi-logout font-size-16 align-middle mr-1"></i> Logout Aja</button>
                {{ Form::close() }}
            </div>
            @endguest
        </div>

        </div>
    </div>

</header>