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

                <li class="divider"></li>
                <li class="menu-title">Job Schedule</li>
                <li>
                    <a href="{{ route('job') }}" class="waves-effect">
                        <div class="d-inline-block icons-sm mr-1"><i class="uim uim-window-grid"></i></div>
                        <span>Semua JO</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('job-waiting-list') }}" class="waiting-list waves-effect">
                        <div class="d-inline-block icons-sm mr-1"><i class="uim uim-window-grid"></i></div>
                        <span>JO Waiting List</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('job-progress') }}" class="joprogress waves-effect">
                        <div class="d-inline-block icons-sm mr-1"><i class="uim uim-window-grid"></i></div>
                        <span>JO Selesai</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('job-done') }}" class="done waves-effect">
                        <div class="d-inline-block icons-sm mr-1"><i class="uim uim-window-grid"></i></div>
                        <span>JO Selesai</span>
                    </a>
                </li>
            </ul>

        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->