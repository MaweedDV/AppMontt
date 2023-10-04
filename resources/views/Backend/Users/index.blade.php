@extends('layouts.backend')

@section('content')
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <div>
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Usuarios</h1>
                </div>
                <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Inicio</li>
                        <li class="breadcrumb-item active" aria-current="page">Usuario</li>
                    </ol>
                </nav>
            </div>
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <button type="button" class="btn btn-primary push" data-bs-toggle="modal" data-bs-target="#modal-block-popout">Agregar Nuevo Usuario</button>
            </div>
        </div>
    </div>
    <a class="block block-rounded  block-link-pop">
        <div class="content">
            <div class="col-md-12 col-xl-12">
                {{$dataTable->table()}}
            </div>

        </div>
    </a>

        <!-- Pop Out Block Modal -->
        <div class="modal fade" id="modal-block-popout" tabindex="-1" role="dialog" aria-labelledby="modal-block-popout" aria-hidden="true">
            <div class="modal-dialog modal-dialog-popout" role="document">
              <div class="modal-content">
                <div class="block block-rounded block-themed block-transparent mb-0">
                  <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Agregar Usuario</h3>
                    <div class="block-options">
                      <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa fa-fw fa-times"></i>
                      </button>
                    </div>
                  </div>

                  <div class="block-content">
                    <form class="row g-3" method="POST" action="{{route('users.store')}}" enctype="multipart/form-data">
                        @csrf

                        <div class="col-md-12">
                          <label for="lblEmail" class="form-label">Email</label>
                          <input type="email" class="form-control" id="txtEmail" name="txtEmail">
                        </div>
                        <div class="col-md-12">
                          <label for="lblName" class="form-label">Nombre Usuario</label>
                          <input type="text" class="form-control" id="txtName" name="txtName">
                        </div>
                        <div class="col-md-12">
                          <label for="lblPlaces" class="form-label">Dirección de Trabajo</label>
                          <input type="text" class="form-control" id="txtPlace" name="txtPlace" placeholder="">
                        </div>
                        <div class="col-md-12">
                          <label for="lblRole" class="form-label">Rol</label>
                          <select class="form-select" id="txtRole" name="txtRole">
                            <option selected="">Seleccione una opción</option>
                            <option value="admin">admin</option>
                            <option value="customer">customer</option>
                          </select>
                        </div>
                        <div class="col-md-12">
                          <label for="inputCity" class="form-label">Contraseña</label>
                          <input type="password" class="form-control" id="txtPassword" name="txtPassword">
                        </div>
                        <div class="col-md-12">
                          <label for="inputState" class="form-label">Confirmar contraseña</label>
                          <input type="password" class="form-control" id="txtConfirmPsw" name="txtConfirmPsw">
                        </div>
                        <div class="col-12">

                    </div>

                  </div>
                  <div class="block-content block-content-full text-end bg-body">
                    {{-- <a href="/create" class="btn btn-primary">Agregar Nuevo Usuario</a> --}}
                    <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                  </div>
                </form>
                </div>
              </div>
            </div>
          </div>
          <!-- END Pop Out Block Modal -->


    </div>


@endsection


@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
