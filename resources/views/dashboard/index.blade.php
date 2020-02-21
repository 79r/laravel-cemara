<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8" />
        <title>{{ config('app.name', 'Laravel') }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Cemara Inventory - Build with Laravel" name="description" />
        <meta content="Riski" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

        <!-- Bootstrap Css -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('app.css') }}" rel="stylesheet" type="text/css" />

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

                    </div>
                    <!-- end page title end breadcrumb -->

                    <div class="page-content-wrapper">
                        <div class="container-fluid">
                            <div class="row">

                                <div class="col-md-6 col-lg-3">
                                    <div class="card">
                                        <div class="card-body">
                                        <div class="row">
                                                <div class="col-7">
                                                    <h5>Brand</h5>
                                                    <span class="big-count">{{ \App\Brand::count() }}</span>

                                                    <div class="mt-4">
                                                        <a href="{{ route('brands.index') }}" class="btn btn-primary btn-sm">View more <i class="mdi mdi-arrow-right ml-1"></i></a>
                                                    </div>
                                                </div>

                                                <div class="col-5 ml-auto d-none">
                                                    <div>
                                                        <img src="assets/images/widget-img.png" alt="" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-3">
                                    <div class="card">
                                        <div class="card-body">
                                        <div class="row">
                                                <div class="col-7">
                                                    <h5>Category</h5>
                                                    <span class="big-count">{{ \App\Category::count() }}</span>

                                                    <div class="mt-4">
                                                        <a href="{{ route('categories.index') }}" class="btn btn-primary btn-sm">View more <i class="mdi mdi-arrow-right ml-1"></i></a>
                                                    </div>
                                                </div>

                                                <div class="col-5 ml-auto d-none">
                                                    <div>
                                                        <img src="assets/images/widget-img.png" alt="" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                        <div class="row">
                                                <div class="col-7">
                                                    <h5>Total Asset</h5>
                                                    <span class="big-count">{{ \App\Inventory::count() }}</span>

                                                    <div class="mt-4">
                                                        <a href="{{ route('inventory.index') }}" class="btn btn-primary btn-sm">View more <i class="mdi mdi-arrow-right ml-1"></i></a>
                                                    </div>
                                                </div>

                                                <div class="col-5 ml-auto d-none">
                                                    <div>
                                                        <img src="assets/images/widget-img.png" alt="" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="float-right ml-2">
                                                <a href="{{ route('inventory.index') }}">View all</a>
                                            </div>
                                            <h5 class="text-center header-title mb-4">Overview</h5>
                                            <div class="table-responsive">
                                                <table id="table-cemara-inventory" class="table table-centered table-hover mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Serial Number</th>
                                                            <th scope="col">Nama</th>
                                                            <th scope="col">Qty</th>
                                                            <th scope="col">Kategori</th>
                                                            <th scope="col">Harga (Rp)</th>
                                                            <th scope="col">Tahun Beli</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($inventories as $item)
                                                        <tr>
                                                            <th scope="row">
                                                                <a href="{{ url('inventory', $item->id) }}"><span class="badge badge-primary badge-sn">{{ $item->serial_number }}</a></span>
                                                            </th>
                                                            <td>{{ $item->name }}</td>
                                                            <td>{{ $item->qty }}</td>
                                                            <td>{{ $item->category->name }}</td>
                                                            <td class="font-weight-bold">@currency($item->price)</td>
                                                            <td>{{ date('Y', strtotime($item->year_of_purchase)) }}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="mt-4">
                                                <div class="text-center">
                                                    {{ $inventories->links() }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- end row -->


                            <div class="row">


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
        <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>

        <script src="https://unicons.iconscout.com/release/v2.0.1/script/monochrome/bundle.js"></script>


        <script src="{{ asset('assets/js/app.js') }}"></script>

    </body>
</html>
