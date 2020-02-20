<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{ route('dashboard') }}" class="waves-effect">
                        <div class="d-inline-block icons-sm mr-1"><i class="uim uim-airplay"></i></div>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('inventory.index') }}" class="waves-effect">
                        <div class="d-inline-block icons-sm mr-1"><i class="uim uim-table"></i></div>
                        <span>Inventory</span>
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
                    <a href="" class="waves-effect">
                        <div class="d-inline-block icons-sm mr-1"><i class="uim uim-grids"></i></div>
                        <span>Update</span>
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

                <li>
                    <a href="{{ route('divisions.index') }}" class="waves-effect">
                        <div class="d-inline-block icons-sm mr-1"><i class="uim uim-box"></i></div>
                        <span>Divisi</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <div class="d-inline-block icons-sm mr-1"><i class="uim uim-layers-alt"></i></div>
                        <span>Multi Level</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="javascript: void(0);">Level 1.1</a></li>
                        <li><a href="javascript: void(0);" class="has-arrow">Level 1.2</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="javascript: void(0);">Level 2.1</a></li>
                                <li><a href="javascript: void(0);">Level 2.2</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

            </ul>

        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->