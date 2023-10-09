@extends('layouts.backend')

@section('content')
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <div>
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Administracion de Formularios Reclamos, Sugerencias y/o Felicitaciones</h1>
                </div>
                <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Inicio</li>
                        <li class="breadcrumb-item active" aria-current="page">Reclamos Sugerencias y Felicitaciones</li>
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
                <a type="submit" class="btn btn-md btn-alt-primary" href="{{ route('rsf.create') }}"><i
                        class="fas fa-user-plus"></i>
                    Nuevo Formulario
                </a>
            </div>
            <div class="block-content block-content-full col-md-12 col-xl-12">
                {{ $dataTable->table() }}
            </div>
        </div>
    </div>
@endsection


@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
