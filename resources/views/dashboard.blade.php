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
            <div class="col-md-4">
                <div class="block block-rounded block-link-shadow">
                    <div class="block-content block-content-full">
                        <p>
                            <strong>Reclamos, Sugerencias y Felicitaciones</strong>
                        </p>
                        {!! $FormRsfChart->container() !!}
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="block block-rounded block-link-shadow">
                    <div class="block-content block-content-full">
                        <p>
                            <strong>General</strong>
                        </p>
                        {!! $MantainersCountChart->container() !!}
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="row text-center">
                            <div class="col-4 border-end">
                                <div class="py-3">
                                    <div class="item item-circle bg-body-light mx-auto">
                                        <i class="fa fa-3x fa fa-clipboard-list text-primary"></i>
                                    </div>
                                    <p class="fs-3 fw-medium mt-3 mb-0">
                                        {{ $surveys_count }}
                                    </p>
                                    <p class="text-muted mb-0">
                                        Encuestas completadas
                                    </p>
                                </div>

                            </div>
                            <div class="col-4 border-end">
                                <div class="py-3">
                                    <div class="item item-circle bg-body-light mx-auto">
                                        <i class="fa fa-3x fa fa-book-open text-primary"></i>
                                    </div>
                                    <p class="fs-3 fw-medium mt-3 mb-0">
                                        {{ $frs_count }}
                                    </p>
                                    <p class="text-muted mb-0">
                                        Formularios Reclamos, Sugerencias y/o Felicitaciones
                                    </p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="py-3">
                                    <div class="item item-circle bg-body-light mx-auto">
                                        <i class="fa fa-3x fa fa-users text-primary"></i>
                                    </div>
                                    <p class="fs-3 fw-medium mt-3 mb-0">
                                        {{ $users_count }}
                                    </p>
                                    <p class="text-muted mb-0">
                                        Usuarios
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <h3>Reclamos, Sugerencias y Felicitaciones</h3>
            <div class="col-md-6 col-xl-4">
                <a class="block block-rounded block-link-shadow bg-success" href="">
                    <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                        <div class="me-3">
                            <p class="text-white fs-3 fw-medium mb-0">
                                {{ $felicitaciones_count }}
                            </p>
                            <p class="text-white-75 mb-0">
                                FELICITACIONES
                            </p>
                            <p class="text-white fs-3 fw-medium mb-0">
                                {{ $felicitaciones_porcent }}%
                            </p>
                        </div>
                        <div>
                            <i class="fa fa-2x fa-circle-check text-black-50"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-4">
                <a class="block block-rounded block-link-shadow bg-warning" href="">
                    <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                        <div class="me-3">
                            <p class="text-white fs-3 fw-medium mb-0">
                                {{ $sugerencias_count }}
                            </p>
                            <p class="text-white-75 mb-0">
                                SUGERENCIAS
                            </p>
                            <p class="text-white fs-3 fw-medium mb-0">
                                {{ $sugerencias_porcent }}%
                            </p>
                        </div>
                        <div>
                            <i class="fa fa-2x fa-envelope-open-text text-black-50"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-4">
                <a class="block block-rounded block-link-shadow bg-danger" href="">
                    <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                        <div class="me-3">
                            <p class="text-white fs-3 fw-medium mb-0">
                                {{ $reclamos_count }}
                            </p>
                            <p class="text-white-75 mb-0">
                                RECLAMOS
                            </p>
                            <p class="text-white fs-3 fw-medium mb-0">
                                {{ $reclamos_porcent }}%
                            </p>
                        </div>
                        <div>
                            <i class="fa fa-2x fa-circle-xmark text-black-50"></i>
                        </div>
                    </div>
                </a>
            </div>
            <h3>Satisfacción encuestas</h3>
            <div class="col-md-6 col-xl-4">
                <a class="block block-rounded block-link-shadow bg-success" href="javascript:void(0)">
                    <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                        <div class="me-3">
                            <p class="text-white fs-3 fw-medium mb-0">
                                {{ round($satisfaccion_max_porcent) }}%
                            </p>
                            <p class="text-white-75 mb-0">
                                Muy satisfactorio
                            </p>
                        </div>
                        <div>
                            <i class="fa fa-2x fa-circle-check text-black-50"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-4">
                <a class="block block-rounded block-link-shadow bg-warning" href="javascript:void(0)">
                    <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                        <div class="me-3">
                            <p class="text-white fs-3 fw-medium mb-0">
                                {{ round($satisfaccion_med_porcent) }}%
                            </p>
                            <p class="text-white-75 mb-0">
                                Medianamente satisfactorio
                            </p>
                        </div>
                        <div>
                            <i class="fa fa-2x fa-envelope-open-text text-black-50"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-4">
                <a class="block block-rounded block-link-shadow bg-danger" href="javascript:void(0)">
                    <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                        <div class="me-3">
                            <p class="text-white fs-3 fw-medium mb-0">
                                {{ round($satisfaccion_min_porcent) }}%
                            </p>
                            <p class="text-white-75 mb-0">
                                Muy insatisfactorio
                            </p>
                        </div>
                        <div>
                            <i class="fa fa-2x fa-circle-xmark text-black-50"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ $MantainersCountChart->cdn() }}"></script>
    <script src="{{ $FormRsfChart->cdn() }}"></script>
@endsection

@push('scripts')
    {{ $MantainersCountChart->script() }}
    {{ $FormRsfChart->script() }}
@endpush
