@extends('layouts.backend')

@section('content')
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <div>
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Dashboard</h1>

                </div>
                <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Inicio</li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="row items-push">
            <div class="col-md-6 col-xl-4">
                <a class="block block-rounded block-link-shadow bg-danger" href="javascript:void(0)">
                    <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                        <div class="me-3">
                            <p class="text-white fs-3 fw-medium mb-0">
                                {{$surveys}}
                            </p>
                            <p class="text-white-75 mb-0">
                                Encuestas
                            </p>
                        </div>
                        <div>
                            <i class="fa fa-2x fa-boxes text-black-50"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-4">
                <a class="block block-rounded block-link-shadow bg-warning" href="javascript:void(0)">
                    <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                        <div class="me-3">
                            <p class="text-white fs-3 fw-medium mb-0">

                                {{$frs}}
                            </p>
                            <p class="text-white-75 mb-0">
                                Reclamos, Sugerencias y Felcitaciones
                            </p>
                        </div>
                        <div>
                            <i class="fa fa-2x fa-boxes text-black-50"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-4">
                <a class="block block-rounded block-link-shadow bg-success" href="javascript:void(0)">
                    <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                        <div class="me-3">
                            <p class="text-white fs-3 fw-medium mb-0">
                                {{$sugerencias}}
                            </p>
                            <p class="text-white-75 mb-0">
                                Ganancias
                            </p>
                        </div>
                        <div>
                            <i class="fa fa-2x fa-boxes text-black-50"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-6">
                <div class="block block-rounded h-100 mb-0">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">
                            Welcome to your app
                        </h3>
                    </div>
                    <div class="block-content">
                        <p>
                            We’ve put everything together, so you can start working on your Laravel project as soon as
                            possible! Dashmix assets are integrated and work seamlessly with Laravel Vite, so you can use
                            the npm scripts as you would in any other Laravel project.
                        </p>
                        <p>
                            Feel free to use any examples you like from the full HTML version to build your own pages.
                        </p>
                        <p class="fw-semibold">
                            Wish you all the best and happy coding!
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-6">
                <div class="block block-rounded h-100 mb-0">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">
                            Welcome to your app
                        </h3>
                    </div>
                    <div class="block-content">
                        <p>
                            We’ve put everything together, so you can start working on your Laravel project as soon as
                            possible! Dashmix assets are integrated and work seamlessly with Laravel Vite, so you can use
                            the npm scripts as you would in any other Laravel project.
                        </p>
                        <p>
                            Feel free to use any examples you like from the full HTML version to build your own pages.
                        </p>
                        <p class="fw-semibold">
                            Wish you all the best and happy coding!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
