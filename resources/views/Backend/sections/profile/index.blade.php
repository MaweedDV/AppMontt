@extends('layouts.backend')

@section('content')
    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        <div class="content content-full content-boxed">
            <!-- Hero -->
            <div class="rounded border overflow-hidden push">
                <div class="bg-image pt-9" style="background-image: url('https://picsum.photos/1920/1080');"></div>
                <div class="px-4 py-3 bg-body-extra-light d-flex flex-column flex-md-row align-items-center">
                    <a class="d-block img-link mt-n5" href="be_pages_generic_profile_v2.html">
                        <img class="img-avatar img-avatar128 img-avatar-thumb"
                            src="{{ Storage::url($user->profile_photo_path) }}" alt="">
                    </a>
                    <div class="ms-3 flex-grow-1 text-center text-md-start my-3 my-md-0">
                        <h1 class="fs-4 fw-bold mb-1">{{ $user->first_name }} {{ $user->last_name }}</h1>
                        <h2 class="fs-sm fw-medium text-muted mb-0">
                            <a href="javascript:void(0)"
                                class="text-muted"><strong>{{ Str::upper($user->role) }}</strong></a> &bull;
                            <a href="javascript:void(0)" class="text-muted">{{ $user->email }}</a>
                        </h2>
                    </div>
                    {{-- <div class="space-x-1">
                        <a href="#" class="btn btn-sm btn-alt-secondary space-x-1">
                            <i class="fa fa-pencil-alt opacity-50"></i>
                            <span>Edit Profile</span>
                        </a>
                    </div> --}}
                </div>
            </div>
            <div>
                <div class="block block-rounded block-bordered">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Informacion Personal</h3>
                    </div>
                    <div class="block-content">
                        <div class="row">
                            <div class="col-sm-6 col-lg-4">
                                <p class="fs-sm fw-medium text-muted mb-1">Nombre</p>
                                <p class="fs-sm fw-semibold mb-0">
                                    {{ $user->first_name }} {{ $user->last_name }}
                                </p>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <p class="fs-sm fw-medium text-muted mb-1">Correo Electronico</p>
                                <p class="fs-sm fw-semibold mb-0">
                                    {{ $user->email }}
                                </p>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <p class="fs-sm fw-medium text-muted mb-1">Rut</p>
                                <p class="fs-sm fw-semibold mb-0">
                                    {{ $user->rut }}
                                </p>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <p class="fs-sm fw-medium text-muted mb-1">Telefono</p>
                                <p class="fs-sm fw-semibold mb-0">
                                    {{ $user->phone }}
                                </p>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <p class="fs-sm fw-medium text-muted mb-1">Direccion</p>
                                <p class="fs-sm fw-semibold mb-0">
                                    {{ $user->address }}
                                </p>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <p class="fs-sm fw-medium text-muted mb-1">Ciudad</p>
                                <p class="fs-sm fw-semibold mb-0">
                                    {{ $user->city }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- END Main Container -->
@endsection
