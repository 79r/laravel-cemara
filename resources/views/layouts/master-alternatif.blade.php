<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8" />
        <title>Cemara Multi Kreatif App</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Cemara Inventory - Build with Laravel" name="description" />
        <meta content="Riski" name="author" />
        <meta name='robots' content='noindex,follow' />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

        <!-- Bootstrap Css -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

        <!-- datepicker -->
        <link href="{{ asset('assets/libs/air-datepicker/css/datepicker.min.css') }}" rel="stylesheet" type="text/css" />

        <!-- DataTables -->
        <link href="{{ asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css') }}" />
        <link href="{{ asset('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css') }}" />
        <!-- Responsive datatable examples -->
        <link href="{{ asset('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css') }}" />  

        <!-- Icons Css -->
        <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('app.css') }}" rel="stylesheet" type="text/css" />

        {{-- JQuery --}}
        <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>

        {{-- Datatables --}}
        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

        <!-- toastify -->
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
        <script src="{{ asset('assets/js/toastify.js') }}"></script>

        <!-- Sweet Alerts js -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

        <!-- select2 -->
        <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

        <script>
        var sounds = {
            "dead": {
                url: "{{ asset('assets/sounds/dead.wav') }}"
            },
            "smash": {
                url: "{{ asset('assets/sounds/smash.mp3') }}"
            },
            "ping": {
                url: "{{ asset('assets/sounds/ping.mp3') }}"
            },
            "bump": {
                url: "{{ asset('assets/sounds/bump.mp3') }}"
            },
            "jump": {
                url: "{{ asset('assets/sounds/jump.wav') }}"
            },
            "coin": {
                url: "{{ asset('assets/sounds/coin.mp3') }}"
            }
        };
        </script>

        <!-- sound js -->
        <script src="{{ asset('assets/js/sound.js') }}"></script>

    </head>

    <body data-topbar="colored">

        <!-- Begin page -->
        <div id="layout-wrapper">

            @include('layouts.header')

            @include('layouts.sidebar')

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">

                    <!-- Page-Title -->
                    <div class="page-title-box">
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h4 class="page-title mb-1">@yield('pageTitle')</h4>
                                    @yield('breadcrumb')
                                </div>
                                <div class="col-md-4">
                                    <div class="float-right d-none d-md-block">
                                        <div class="dropdown">
                                            <button class="btn btn-help btn-rounded">
                                                <i class="mdi mdi-coffee mr-1"></i> Bantuan
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title end breadcrumb -->

                    <div class="page-content-wrapper">
                        <div class="container-fluid">
                            <div class="row mb-4">
                            @yield('content')
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end container-fluid -->
                    </div> 
                    <!-- end page-content-wrapper -->
                </div>
                <!-- End Page-content -->

                @include('layouts.footer')
                
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        @include('layouts.right_sidebar')
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>

        <script src="https://unicons.iconscout.com/release/v2.0.1/script/monochrome/bundle.js"></script>

        <!-- datepicker -->
        <script src="{{ asset('assets/libs/air-datepicker/js/datepicker.min.js') }}"></script>
        <script src="{{ asset('assets/libs/air-datepicker/js/i18n/datepicker.en.js') }}"></script>

        <!--tinymce js-->
        <script src="{{ asset('assets/libs/tinymce/tinymce.min.js') }}"></script>
        <script>
            tinymce.init({
                selector:'textarea',
                plugins: "table",
                menubar: "table"    
            });
        </script>
        
        <script src="{{ asset('assets/js/app.js') }}"></script>

        <script src="https://js.pusher.com/5.1/pusher.min.js"></script>
        <script>
        var pusher = new Pusher('72f209b771778f605aa1', {
            cluster: 'ap1',
            encrypted: true
        });

        var channel = pusher.subscribe('notification');
        channel.bind('notification-event', function(message) {
            Swal.fire({
                icon: 'info',
                title: '<h2><strong>JO Baru Nih!</strong></h2>',
                text: 'Ada jo baru',
                footer: '<a href="{{ route('job') }}">Refresh Halaman JO</a>'
            });
            playSound("coin");
        });
        </script>

    </body>
</html>