<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('assets/images/sbl/favicon.png') }}" alt="" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Control Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="" class="img-circle elevation-2">
            </div>
            <div class="info">
                <a href="#" class="d-block">
                    <h5 class="my-0 py-0">{{ auth()->user()->name }}</h5>
                </a>
            </div>
        </div>

        {{--        <div class="form-inline"> --}}
        {{--            <div class="input-group" data-widget="sidebar-search"> --}}
        {{--                <input class="form-control form-control-sidebar" type="search" placeholder="Search" --}}
        {{--                       aria-label="Search"> --}}
        {{--                <div class="input-group-append"> --}}
        {{--                    <button class="btn btn-sidebar"> --}}
        {{--                        <i class="fas fa-search fa-fw"></i> --}}
        {{--                    </button> --}}
        {{--                </div> --}}
        {{--            </div> --}}
        {{--        </div> --}}

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}"
                        class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i> Dashboard
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.division.index') }}"
                        class="nav-link {{ request()->routeIs('admin.division.index') ? 'active' : '' }}">
                        <i class="nav-icon fa fa-th-large"></i> Divisions
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.category.index') }}"
                        class="nav-link {{ request()->routeIs('admin.category.index') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-th"></i> </i> Categories
                    </a>
                </li>
                <li class="nav-item menu-open-n">
                    <a href="#" class="nav-link {{ request()->routeIs('admin.product.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-box"></i>
                        <p>
                            Products
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.product.create') }}" class="nav-link pl-5">
                                <p>New Product</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.product.index') }}" class="nav-link pl-5">
                                <p>Product List</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item menu-open-n">
                    <a href="#" class="nav-link {{ request()->routeIs('admin.article.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-list"></i>
                        <p>
                            Articles
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.article.create') }}" class="nav-link pl-5 ">
                                <p>Post New</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.article.index') }}" class="nav-link pl-5">
                                <p>Article List</p>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item">
                    <a href="{{ route('admin.staff.index') }}"
                        class="nav-link {{ request()->routeIs('admin.staff.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-users"></i> Staff
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.message.index') }}"
                        class="nav-link {{ request()->routeIs('admin.message.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-envelope"></i> Messages
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.faq.index') }}"
                        class="nav-link {{ request()->routeIs('admin.faq.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-question-circle"></i> FAQ
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.settings') }}" class="nav-link">
                        <i class="nav-icon fas fa-cog"></i> Settings
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
