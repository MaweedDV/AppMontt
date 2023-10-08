@extends('layouts.backend')

@section('content')
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <div>
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">{{ $user->name }}</h1>
                </div>
                <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">inicio</li>
                        <li class="breadcrumb-item">usuarios</li>
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
                <a type="submit" class="btn btn-md btn-alt-secondary" href="{{ route('users.index') }}"><i
                        class="fas fa-angle-left"></i>
                    Volver
                </a>
                <a type="submit" class="btn btn-md btn-alt-primary" href="{{ route('users.edit', $user->id) }}"><i
                        class="fas fa-user-pen"></i>
                    Editar Usuario
                </a>

            </div>
            <div class="block-content block-content-full col-md-12 col-xl-12">
                <div class="bg-image" style="background-image: url('https://picsum.photos/1920/1080');">
                    <div class="bg-black-25">
                        <div class="content content-full">
                            <div class="py-5 text-center">
                                <a class="img-link" href="#">
                                    <img class="img-avatar img-avatar96 img-avatar-thumb"
                                        src="https://picsum.photos/640/480" alt="">
                                </a>
                                <h1 class="fw-bold my-2 text-white">{{ $user->name }}</h1>
                                <h2 class="h4 fw-bold text-white-75">
                                    {{ $user->role }}
                                </h2>
                                <div class="fs-sm fw-medium text-white-75">
                                    {{ $user->email }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
