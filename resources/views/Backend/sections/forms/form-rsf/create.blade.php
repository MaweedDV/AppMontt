@extends('layouts.backend')

@section('content')
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <div>
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Reclamos Sugerencias y Felicitaciones</h1>

                </div>
                <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Inicio</li>
                        <li class="breadcrumb-item">Reclamos Sugerencias y Felicitaciones</li>
                        <li class="breadcrumb-item active" aria-current="page">Nuevo Ingreso</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="content">
        <form action="{{ route('rsf.store') }}" method="POST"enctype="multipart/form-data">
            @csrf
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Nuevo Ingreso</h3>
                </div>
                <div class="block-content block-content-full row g-2">
            {{-- cambiar name y id por nobres de la tabla bd --}}

            {{-- <div class="col-md-6">
                <label for="lblName" class="form-label ">Nombre Completo</label>
                <input type="text" class="form-control form-control-alt @error('name') is-invalid @enderror"
                    id="name" name="name" value="{{ old('name') }}"
                    placeholder="Ingrese nombre y apellidos">
                @error('name')
                    <div class="invalid-feedback animated fadeIn">{{ $message}}</div>
                    @enderror --}}

            <div class="col-md-4">
                <label for="lblName" class="form-label">Nombre Completo:</label>
                <input type="text" class="form-control form-control-alt @error('name') is-invalid
                @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="Ingrese su nombre y apellido">
                @error('name')
                            <div class="invalid-feedback animated fadeIn">{{ $message }}</div>
                @enderror
              </div>
              <div class="col-md-4">
                <label for="lblDate" class="form-label">Fecha de Atención</label>
                <input type="date" class="form-control form-control-alt  @error('date_attention') is-invalid
                @enderror" id="date_attention" name="date_attention" value="{{ old('date_attention') }}">
                @error('date_attention')
                    <div class="invalid-feedback animated fadeIn">{{ $message }}</div>
                 @enderror
              </div>
              <div class="col-md-4">
                <label for="lblHour" class="form-label">Hora de Atención</label>
                <input type="time" class="form-control form-control-alt  @error('hour_attention') is-invalid
                @enderror" id="hour_attention" name="hour_attention" value="{{ old('hour_attention') }}">
                @error('hour_attention')
                    <div class="invalid-feedback animated fadeIn">{{ $message }}</div>
                 @enderror
              </div>
              <div class="col-md-4">
                  <label for="lblEmail" class="form-label">Correo Electrónico:</label>
                  <input type="text" class="form-control form-control-alt @error('email') is-invalid
                  @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="Ingrese su Correo electrónico">
                  @error('email')
                    <div class="invalid-feedback animated fadeIn">{{ $message }}</div>
                 @enderror
                </div>
                <div class="col-md-4">
                  <label for="lblContactNumber" class="form-label">Numero de Telefono:</label>
                  <input type="text" class="form-control form-control-alt @error('phone') is-invalid
                  @enderror" id="phone" name="phone" value="{{ old('phone') }}" placeholder="Ingrese su número de teléfono">
                  @error('phone')
                    <div class="invalid-feedback animated fadeIn">{{ $message }}</div>
                 @enderror
                </div>
                <div class="col-md-4">
                  <label for="lblAddress" class="form-label">Domicilio:</label>
                  <input type="text" class="form-control form-control-alt @error('address') is-invalid
                  @enderror" id="address" name="address" value="{{ old('address') }}" placeholder="Ingrese su Dirección de domicilio">
                  @error('address')
                    <div class="invalid-feedback animated fadeIn">{{ $message }}</div>
                 @enderror
                </div>
              <div class="col-md-4">
                <label for="lblPlace" class="form-label">Dirección o Unidad en que Trabaja:</label>
                <select class="form-control form-control-alt  @error('place_job') is-invalid
                @enderror" id="place_job" name="place_job" value="{{ old('place_job') }}">
                  <option selected="">Seleccione una opción</option>
                @foreach ($places as $place)
                    <option value="{{$place->description}}">{{$place->description}}</option>
                @endforeach
                </select>
                @error('place_job')
                    <div class="invalid-feedback animated fadeIn">{{ $message }}</div>
                @enderror
              </div>
              <div class="col-md-4">
                  <label for="lblProcedure" class="form-label">Tipo de Trámite:</label>
                  <select class="form-control form-control-alt @error('type_procedure') is-invalid
                  @enderror" id="type_procedure" name="type_procedure" value="{{ old('type_procedure') }}">
                    <option selected="">Seleccione una opción</option>
                    <option value="Reclamo">Reclamo</option>
                    <option value="Sugerencia">Sugerencia</option>
                    <option value="Felicitacion">Felicitacion</option>
                  </select>
                @error('type_procedure')
                  <div class="invalid-feedback animated fadeIn">{{ $message }}</div>
                @enderror
                </div>
                <div class="col-md-4">
                  <label for="lblPlace" class="form-label">Seleccione Area:</label>
                  <select class="form-control form-control-alt  @error('area_attention') is-invalid
                  @enderror" id="area_attention" name="area_attention" value="{{ old('area_attention') }}">
                    <option selected="">Seleccione una opción</option>
                    <option value="Asistencia - Reloj Control">Asistencia - Reloj Control</option>
                    <option value="Capacitacion">Capacitacion</option>
                    <option value="Contratacion">Contratacion</option>
                    <option value="Horas Extras">Horas Extras</option>
                    <option value="Jefa/e de Personal">Jefa/e de Personal</option>
                    <option value="Licencias Medicas">Licencias Medicas</option>
                    <option value="Remuneraciones">Remuneraciones</option>
                    <option value="Retiro Cese de Funciones">Retiro Cese de Funciones</option>
                    <option value="Subdirector/a de Personal">Subdirector/a de Personal</option>
                    <option value="Vestuario">Vestuario</option>
                    <option value="Viaticos">Viaticos</option>
                  </select>
                @error('area_attention')
                  <div class="invalid-feedback animated fadeIn">{{ $message }}</div>
                @enderror
                </div>
                  <div class="content py-6">
                      <label class="form-label" for="example-textarea-input-alt">Observación:</label>
                      <textarea class="form-control form-control-alt @error('observation') is-invalid
                    @enderror" id="observation" name="observation" style="height: 100px" value="{{ old('observation') }}" placeholder="Escriba aquí"></textarea>
                    @error('observation')
                      <div class="invalid-feedback animated fadeIn">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light text-end">
                    <a type="button" class="btn btn-md btn-alt-secondary" href="{{ route('rsf.index') }}"><i
                            class="fa fa-angle-left opacity-50 me-1"></i> Volver</a>
                    <button type="submit" class="btn btn-md btn-alt-success">
                        <i class="fa fa-check opacity-50 me-1"></i> Guardar
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
