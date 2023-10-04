<!doctype html>
<html lang="{{ config('app.locale') }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>PERSONAL | Inicio de sesion</title>

    <meta name="description" content="">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">
    <link rel="shortcut icon" href="{{ asset('media/favicons/favicon.png') }}">
    <link rel="icon" sizes="192x192" type="image/png" href="{{ asset('media/favicons/favicon-192x192.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('media/favicons/apple-touch-icon-180x180.png') }}">

    @yield('css')
    @vite(['resources/sass/main.scss', 'resources/sass/dashmix/themes/_base.scss', 'resources/js/dashmix/app.js'])

    @yield('js')
</head>

<body>
    <div id="page-container" class="enable-page-overlay dark-mode side-scroll">
        <main id="main-container">
            <div class="bg-image" style="background-image: url({{ asset('media/muni.jpg') }})">
                <div class="row g-0 justify-content-center bg-primary-dark-op">
                    <div class="hero-static col-sm-8 col-md-6 col-xl-4 d-flex align-items-center p-2 px-sm-0">
                        <div class="block block-transparent block-rounded w-100 mb-0 overflow-hidden">
                            <div
                                class="block-content block-content-full px-lg-5 px-xl-6 py-4 py-md-5 py-lg-6 bg-body-extra-light">
                                <div class="mb-2 text-center">
                                    <a class="link-fx fw-bold fs-1" href="index.html">
                                        <span class="text-dark">SUBDIRECCION DE</span><span class="text-primary"> PERSONAL</span>
                                    </a>
                                    <p class="text-uppercase fw-bold fs-sm text-muted">
                                        Inicio de sesion
                                    </p>
                                </div>
                                <form class="js-validation-signin" action="{{ route('login') }}" method="POST">
                                    @csrf
                                    <div class="mb-4">
                                        <div class="input-group input-group-lg">
                                            <input type="email" class="form-control" id="login-username"
                                                name="email" placeholder="correo electronico" />
                                            <span class="input-group-text">
                                                <i class="fa fa-user-circle"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <div class="input-group input-group-lg">
                                            <input type="password" class="form-control" id="login-password"
                                                name="password" placeholder="contraseña" />
                                            <span class="input-group-text">
                                                <i class="fa fa-asterisk"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div
                                        class="d-sm-flex justify-content-sm-between align-items-sm-center text-center text-sm-start mb-4">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="login-remember-me"
                                                name="login-remember-me" checked />
                                            <label class="form-check-label" for="login-remember-me">Recuerdame
                                            </label>
                                        </div>
                                        <div class="fw-semibold fs-sm py-1">
                                            <a href="#">¿Olvidaste tu contraseña?</a>
                                        </div>
                                    </div>
                                    <div class="text-center mb-4">
                                        <button type="submit" class="btn btn-hero btn-primary">
                                            <i class="fa fa-fw fa-sign-in-alt opacity-50 me-1"></i>
                                            Entrar
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>
