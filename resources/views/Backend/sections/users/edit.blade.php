@extends('layouts.backend')

@section('content')
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <div>
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Editando a {{ $user->name }}</h1>
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
        <div class="block block-rounded">
            <div class="block-content block-content-full col-md-12 col-xl-12">
                <form class="row g-3" method="POST" action="{{ route('users.update', $user->id) }}"
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="col-md-6">
                        <label for="lblName" class="form-label">Nombre Completo</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                            name="name" value="{{ old('name', $user->name) }}">
                        @error('name')
                            <div class="invalid-feedback animated fadeIn">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="lblEmail" class="form-label">Correo Electronico</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                            name="email" value="{{ $user->email }}">
                        @error('email')
                            <div class="invalid-feedback animated fadeIn">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="lblPlaces" class="form-label">Dirección de Trabajo</label>
                        <input type="text" class="form-control @error('txtPlace') is-invalid @enderror" id="txtPlace"
                            name="txtPlace" placeholder="Ingrese direccion de trabajo" value="{{ $user->id_places }}">
                        @error('txtPlace')
                            <div class="invalid-feedback animated fadeIn">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="lblRole" class="form-label">Rol</label>
                        <select class="form-select @error('role') is-invalid @enderror" id="role" name="role">
                            <option>Seleccione una opción</option>
                            <option {{ old('role', $user->role) == 'admin' ? 'selected' : '' }} value="admin">admin
                            </option>
                            <option {{ old('role', $user->role) == 'customer' ? 'selected' : '' }} value="customer">customer
                            </option>
                        </select>
                        @error('role')
                            <div class="invalid-feedback animated fadeIn">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="lblRole" class="form-label">TEST</label>
                        <select class="select2" name="category">
                            <option value="{{ $user->name }}">{{ $user->name }}</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="inputCity" class="form-label">Contraseña</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                            name="password">
                        @error('password')
                            <div class="invalid-feedback animated fadeIn">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="inputState" class="form-label">Confirmar contraseña</label>
                        <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror"
                            id="password_confirmation" name="password_confirmation">
                        @error('password_confirmation')
                            <div class="invalid-feedback animated fadeIn">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <a type="button" class="btn btn-danger" href="{{ route('users.index') }}">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection

@section('js')
    <script>
        $(function() {
            $('#txtRole').select2({
                theme: "bootstrap-5",
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' :
                    'style',
                placeholder: $(this).data('placeholder'),
            });
        });
    </script>
@endsection
