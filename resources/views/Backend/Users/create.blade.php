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
                        <li class="breadcrumb-item">Usuario</li>
                        <li class="breadcrumb-item active" aria-current="page">Crear Usuario</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="content">

        <form class="row g-3" method="POST" action="{{route('users.store')}}" enctype="multipart/form-data">
            @csrf

            <div class="col-md-6">
              <label for="lblEmail" class="form-label">Email</label>
              <input type="email" class="form-control" id="txtEmail" name="txtEmail">
            </div>
            <div class="col-md-6">
              <label for="lblName" class="form-label">Nombre Usuario</label>
              <input type="text" class="form-control" id="txtName" name="txtName">
            </div>
            <div class="col-md-6">
              <label for="lblPlaces" class="form-label">Dirección de Trabajo</label>
              <input type="text" class="form-control" id="txtPlace" name="txtPlace" placeholder="">
            </div>
            <div class="col-md-6">
              <label for="lblRole" class="form-label">Rol</label>
              <select class="form-select" id="txtRole" name="txtRole">
                <option selected="">Seleccione una opción</option>
                <option value="admin">admin</option>
                <option value="customer">customer</option>
              </select>
            </div>
            <div class="col-md-6">
              <label for="inputCity" class="form-label">Contraseña</label>
              <input type="password" class="form-control" id="txtPassword" name="txtPassword">
            </div>
            <div class="col-md-6">
              <label for="inputState" class="form-label">Confirmar contraseña</label>
              <input type="password" class="form-control" id="txtConfirmPsw" name="txtConfirmPsw">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Guardar</button>
              </div>
          </form>

    </div>
@endsection
