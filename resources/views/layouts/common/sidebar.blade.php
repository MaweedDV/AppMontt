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
                    <a class="nav-main-link{{ request()->is('admin/dashboard') ? ' active' : '' }}"
                        href="/admin/dashboard">
                        <i class="nav-main-link-icon fa fa-chalkboard"></i>
                        <span class="nav-main-link-name">Dashboard</span>

                    </a>
                </li>
                <li class="nav-main-heading">Mantenedores</li>
                <li class="nav-main-item">
                    <a class="nav-main-link {{ request()->is('admin/users', 'admin/users/create') ? 'active' : '' }}"
                        href="{{ route('users.index') }}">
                        <i class="nav-main-link-icon fa fa-user-group"></i>
                        <span class="nav-main-link-name">Usuarios</span>
                    </a>
                </li>
                <li class="nav-main-heading">Formularios</li>
                <li class="nav-main-item">
                    <a class="nav-main-link {{ request()->is('admin/forms/rsf', 'admin/forms/rsf/create') ? 'active' : '' }}"
                        href="{{ route('rsf.index') }}">
                        <i class="nav-main-link-icon fa fa-book-open"></i>
                        <span class="nav-main-link-name">Reclamos, Sugerencias y Felicitaciones</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link {{ request()->is('admin/forms/surveys', 'admin/forms/surveys/create') ? 'active' : '' }}"
                        href="{{ route('surveys.index') }}">
                        <i class="nav-main-link-icon fa fa-clipboard-list"></i>
                        <span class="nav-main-link-name">Encuestas</span>
                    </a>
                </li>
                <li class="nav-main-heading">Accesos</li>
                <li class="nav-main-item">
                    <a class="nav-main-link{{ request()->is('/form.index') ? ' active' : '' }}" href="{{ route('form.index') }}">
                        <i class="nav-main-link-icon fa fa-book-open-reader"></i>
                        <span class="nav-main-link-name">Formularios cliente</span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- END Side Navigation -->
    </div>
    <!-- END Sidebar Scrolling -->
</nav>
