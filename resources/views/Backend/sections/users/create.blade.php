@extends('layouts.backend')

@section('content')
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <div>
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Crear Usuario</h1>

                </div>
                <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Inicio</li>
                        <li class="breadcrumb-item">Usuarios</li>
                        <li class="breadcrumb-item active" aria-current="page">Crear Usuario</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="content">
        <form action="{{ route('users.store') }}" method="POST"enctype="multipart/form-data">
            @csrf
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Nuevo Usuario</h3>
                </div>
                <div class="block-content block-content-full row g-2">
                    <div class="col-md-6">
                        <label for="first_name" class="form-label ">Nombre</label>
                        <input type="text"
                            class="form-control form-control-alt @error('first_name') is-invalid @enderror" id="first_name"
                            name="first_name" value="{{ old('first_name') }}" placeholder="Ingrese nombre">
                        @error('first_name')
                            <div class="invalid-feedback animated fadeIn">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="last_name" class="form-label ">Apellido</label>
                        <input type="text" class="form-control form-control-alt @error('last_name') is-invalid @enderror"
                            id="last_name" name="last_name" value="{{ old('last_name') }}" placeholder="Ingrese apellido">
                        @error('last_name')
                            <div class="invalid-feedback animated fadeIn">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="lblEmail" class="form-label">Correo Electronico</label>
                        <input type="email" class="form-control form-control-alt @error('email') is-invalid @enderror"
                            id="email" name="email" value="{{ old('email') }}"
                            placeholder="Ingrese su correo electronico">
                        @error('email')
                            <div class="invalid-feedback animated fadeIn">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-3">
                        <label for="rut" class="form-label ">Rut</label>
                        <input type="text" class="form-control form-control-alt @error('rut') is-invalid @enderror"
                            id="rut" name="rut" value="{{ old('rut') }}" placeholder="Ingrese rut">
                        @error('rut')
                            <div class="invalid-feedback animated fadeIn">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-3">
                        <label for="lblRole" class="form-label">Rol</label>
                        <select class="form-control form-control-alt @error('role') is-invalid @enderror" id="role"
                            name="role">
                            <option value="" selected>Seleccione una opción</option>
                            <option {{ old('role') == 'admin' ? 'selected' : '' }} value="admin">admin</option>
                            <option {{ old('role') == 'customer' ? 'selected' : '' }} value="customer">customer</option>
                        </select>
                        @error('role')
                            <div class="invalid-feedback animated fadeIn">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="department_id" class="form-label">Departamento</label>
                        <select class="form-control form-control-alt @error('department_id') is-invalid @enderror"
                            id="department_id" name="department_id" value="{{ old('department_id') }}">
                            <option value="" selected>Seleccione una opción</option>
                            @foreach ($departments as $department)
                                <option value="{{ $department->id }}">{{ $department->name }}</option>
                            @endforeach
                        </select>
                        @error('department_id')
                            <div class="invalid-feedback animated fadeIn">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="id_places" class="form-label">Dirección de Trabajo</label>
                        <select class="form-control form-control-alt @error('id_places') is-invalid @enderror"
                            id="id_places" name="id_places" value="{{ old('id_places') }}">
                            <option value="" selected>Seleccione una opción</option>
                            @foreach ($places as $place)
                                <option value="{{ $place->id }}">{{ $place->description }}</option>
                            @endforeach
                        </select>
                        @error('id_places')
                            <div class="invalid-feedback animated fadeIn">{{ $message }}</div>
                        @enderror
                    </div>
                    {{-- profile_photo_path --}}
                    <div class="col-md-6">
                        <label for="lblProfilePhoto" class="form-label">Foto de Perfil</label>
                        <input type="file"
                            class="form-control form-control-alt @error('profile_photo_path') is-invalid @enderror"
                            id="profile_photo_path" name="profile_photo_path" value="{{ old('profile_photo_path') }}"
                            placeholder="Ingrese foto de perfil">
                        @error('profile_photo_path')
                            <div class="invalid-feedback animated fadeIn">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="inputCity" class="form-label">Contraseña</label>
                        <input type="password"
                            class="form-control form-control-alt @error('password') is-invalid @enderror" id="password"
                            name="password" placeholder="Ingrese su contraseña">
                        @error('password')
                            <div class="invalid-feedback animated fadeIn">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="inputState" class="form-label">Confirmar contraseña</label>
                        <input type="password"
                            class="form-control form-control-alt @error('password_confirmation') is-invalid @enderror"
                            id="password_confirmation" name="password_confirmation" placeholder="Confirme su contraseña">
                        @error('password_confirmation')
                            <div class="invalid-feedback animated fadeIn">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light text-end">
                    <a type="button" class="btn btn-md btn-alt-secondary" href="{{ route('users.index') }}"><i
                            class="fa fa-angle-left opacity-50 me-1"></i> Volver</a>
                    <button type="submit" class="btn btn-md btn-alt-success">
                        <i class="fa fa-check opacity-50 me-1"></i> Guardar
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('js')
    <script type="module">
        $("#id_places").Select2({
            theme: "bootstrap-5",
            containerCssClass: "select2--small", // For Select2 v4.0
            selectionCssClass: "select2--small", // For Select2 v4.1
            dropdownCssClass: "select2--small",
        });
    </script>
@endsection
