@extends('layouts.backend')

@section('content')
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <div>
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">{{ $form_selected->type_procedure }}</h1>
                </div>
                <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">inicio</li>
                        <li class="breadcrumb-item">Reclamos Sugerencias y Felicitaciones</li>
                        <li class="breadcrumb-item active" aria-current="page">ver</li>
                    </ol>
                </nav>
            </div>
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">

            </div>
        </div>
    </div>

    <div class="content">
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <a type="submit" class="btn btn-md btn-alt-secondary" href="{{ route('rsf.index') }}"><i
                        class="fas fa-angle-left"></i>
                    Volver
                </a>
                {{-- <a type="submit" class="btn btn-md btn-alt-primary" href="{{ route('users.edit', $user->id) }}"><i
                        class="fas fa-user-pen"></i>
                    Editar Usuario
                </a> --}}

            </div>
            <div class="row items-push">
                <div class="col-md-6">
                    <a class="block block-rounded block-bordered block-link-shadow h-100 mb-0">
                        <div class="block-content block-content-full text-center bg-body-light">
                            <i class="fa fa-fw fa-circle-user fa-4x text-dark"></i>
                            <div class="mt-2">
                                <p class="fw-semibold mb-0">
                                    {{ mb_strtoupper($form_selected->name, 'UTF-8') }}
                                </p>
                            </div>
                        </div>
                        <div class="block-content block-content-full text-center">
                            <div class="row g-sm">
                                <div class="col-6">
                                    <div class="item item-circle mx-auto">
                                        <i class="fa fa-fw fa-envelope fa-2x text-dark"></i>
                                    </div>
                                    <p class="text-muted mb-0">
                                        {{ $form_selected->email }}
                                    </p>
                                </div>
                                <div class="col-6">
                                    <div class="item item-circle mx-auto">
                                        <i class="fa fa-fw fa-phone fa-2x text-dark"></i>
                                    </div>
                                    <p class="text-muted mb-0">
                                        +56 {{ $form_selected->phone }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-6">
                    <div class="block block-rounded block-bordered block-link-shadow h-100 mb-0">
                        <div class="block-content">
                            <table class="table table-borderless table-striped">
                                <tbody>
                                    <tr>
                                        <td>
                                            <i class="fa fa-fw fa-calendar me-1"></i>Fecha Atención:
                                            {{ date('d/m/Y', strtotime($form_selected->date_attention)) }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <i class="fa fa-fw fa-clock me-1"></i>Hora atención:
                                            {{ date('H:i', strtotime($form_selected->hour_attention)) }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <i class="fa fa-fw fa-home me-1"></i> Domicilio:
                                            {{ $form_selected->address }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <i class="fa fa-fw fa-briefcase me-1"></i> Lugar de trabajo:
                                            {{ $form_selected->place_job }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <i class="fa fa-fw fa-building me-1"></i> Area Atención:
                                            {{ $form_selected->area_attention }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                <div class="block-content">
                    <table class="table table-borderless table-vcenter">
                        <tbody>
                            <tr>
                                <td class="text-center w-25 d-none d-md-table-cell">
                                    <h3 class="text-center">Formulario N°</h3>
                                    <a class="item item-circle bg-primary text-white fs-2 mx-auto">
                                        {{ $form_selected->id }}
                                    </a>
                                </td>
                                <td>
                                    <div class="py-4">
                                        <p class="link-fx h5 mb-2 d-inline-blo">
                                            ASUNTO: {{ mb_strtoupper($form_selected->subject, 'UTF-8') }}
                                        </p>
                                        <div class="fs-sm fw-bold text-uppercase mb-2">
                                            <span class="text-muted me-3">fecha y hora ingreso</span>
                                            <span class="text-primary">
                                                <i class="fa fa-clock"></i>
                                                {{ date('d/m/Y', strtotime($form_selected->created_at)) }}, {{ date('H:i', strtotime($form_selected->created_at)) }}
                                            </span>
                                        </div>
                                        <p class="link-fx h4 mb-2 d-inline-blo">
                                            {{ $form_selected->observation }}
                                        </p>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>


            </div>
        </div>
    </div>
@endsection
