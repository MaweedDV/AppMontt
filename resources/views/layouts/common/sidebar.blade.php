<nav id="sidebar" aria-label="Main Navigation">
    <div class="bg-header-dark">
        <div class="content-header bg-white-5">
            <a class="fw-semibold text-white tracking-wide" href="/admin/dashboard">
                <span class="smini-visible">
                    Pers<span class="opacity-75">onal</span>
                </span>
                <span class="smini-hidden">
                    APP<span class="opacity-75"> MONTT</span>
                </span>
            </a>
            <div>
                <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle"
                    data-target="#dark-mode-toggler" data-class="far fa" onclick="Dashmix.layout('dark_mode_toggle');">
                    <i class="far fa-moon" id="dark-mode-toggler"></i>
                </button>
                <button type="button" class="btn btn-sm btn-alt-secondary d-lg-none" data-toggle="layout"
                    data-action="sidebar_close">
                    <i class="fa fa-times-circle"></i>
                </button>

            </div>
        </div>
    </div>
    <div class="js-sidebar-scroll">
        <!-- Side Navigation -->
        <div class="content-side content-side-full">
            <ul class="nav-main">
                <li class="nav-main-item">
                    <a class="nav-main-link{{ request()->is('/admin/dashboard') ? ' active' : '' }}"
                        href="/admin/dashboard">
                        <i class="nav-main-link-icon fa fa-chart-line"></i>
                        <span class="nav-main-link-name">Dashboard</span>

                    </a>
                </li>
                <li class="nav-main-heading">Tienda</li>
                <li class="nav-main-item{{ request()->is('pages/*') ? ' open' : '' }}">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                        aria-expanded="true" href="#">
                        <i class="nav-main-link-icon fa fa-lightbulb"></i>
                        <span class="nav-main-link-name">Examples</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link{{ request()->is('pages/datatables') ? ' active' : '' }}"
                                href="/pages/datatables">
                                <span class="nav-main-link-name">DataTables</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link{{ request()->is('pages/slick') ? ' active' : '' }}"
                                href="/pages/slick">
                                <span class="nav-main-link-name">Slick Slider</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link{{ request()->is('pages/blank') ? ' active' : '' }}"
                                href="/pages/blank">
                                <span class="nav-main-link-name">Blank</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-main-heading">Administrador</li>
                <li class="nav-main-item">
                    <a class="nav-main-link{{ request()->is('/surveys') ? ' active' : '' }}" href="/surveys">
                        <i class="nav-main-link-icon fa fa-clipboard-list"></i>
                        <span class="nav-main-link-name">Encuestas</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link{{ request()->is('/surveys') ? ' active' : '' }}" href="/surveys">
                        <i class="nav-main-link-icon fa fa-book-open-reader"></i>
                        <span class="nav-main-link-name">Sugerencias, Reclamos y/o Felicitaciones</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link"{{ request()->is('/users-index') ? ' active' : '' }}"
                        href="{{ route('users.index') }}">
                        <i class="nav-main-link-icon fa fa-user-group"></i>
                        <span class="nav-main-link-name">Administración de Usuarios</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- END Side Navigation -->
    </div>
    <!-- END Sidebar Scrolling -->
</nav>
