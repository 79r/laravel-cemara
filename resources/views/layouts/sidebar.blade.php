<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Navigasi</li>

                <li>
                    <a href="{{ route('dashboard') }}" class="waves-effect">
                        <div class="d-inline-block icons-sm mr-1"><i class="uim uim-airplay"></i></div>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <div class="d-inline-block icons-sm mr-1"><i class="uim uim-layers-alt"></i></div>
                        <span>Inventory</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="{{ route('inventory.index') }}" class="waves-effect">
                                <div class="d-inline-block icons-sm mr-1"><i class="uim uim-table"></i></div>
                                <span>Semua inventory</span>
                            </a>
                        </li>
        
                        <li>
                            <a href="{{ route('inventory.create') }}" class="waves-effect">
                                <div class="d-inline-block icons-sm mr-1"><i class="uim uim-comment-message"></i></div>
                                <span>Input Data</span>
                            </a>
                        </li>
        
                        <li>
                            <a href="{{ route('inventory.import.excel') }}" class="waves-effect">
                                <div class="d-inline-block icons-sm mr-1"><i class="uim uim-sign-in-alt"></i></div>
                                <span>Import Excel</span>
                            </a>
                        </li>
        
                        <li>
                            <a href="{{ route('categories.index') }}" class="waves-effect">
                                <div class="d-inline-block icons-sm mr-1"><i class="uim uim-document-layout-left"></i></div>
                                <span>Category</span>
                            </a>
                        </li>
        
                        <li>
                            <a href="{{ route('suppliers.index') }}" class="waves-effect">
                                <div class="d-inline-block icons-sm mr-1"><i class="uim uim-document-layout-left"></i></div>
                                <span>Supplier</span>
                            </a>
                        </li>
        
                        <li>
                            <a href="{{ route('brands.index') }}" class="waves-effect">
                                <div class="d-inline-block icons-sm mr-1"><i class="uim uim-document-layout-left"></i></div>
                                <span>Merek</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <div class="d-inline-block icons-sm mr-1"><i class="uim uim-layers-alt"></i></div>
                        <span>Job List</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="{{ route('jo.cemara.create') }}" class="waves-effect">
                                <div class="d-inline-block icons-sm mr-1"><i class="uim uim-comment-plus"></i></div>
                                <span>Buat JO</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('jo.cemara.index') }}" class="waves-effect">
                                <div class="d-inline-block icons-sm mr-1"><i class="uim uim-window-grid"></i></div>
                                <span>Jo Cemara</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('jo.mim.index') }}" class="waves-effect">
                                <div class="d-inline-block icons-sm mr-1"><i class="uim uim-window-grid"></i></div>
                                <span>Jo MIM</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->