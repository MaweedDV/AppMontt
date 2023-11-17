@extends('layouts.backendSurvey')

@section('content')
    <div class="bg-body-light">
        <div class="content content-full text">
            <div class="align-items-sm-center text-center">
                <div>
                    {{-- centrar etiquetas --}}
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Formulario de Reclamos, Sugerencias y/o
                        Felicitaciones</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="row items-push">
            <form action="{{ route('rsf.front.store') }}" method="POST"enctype="multipart/form-data">
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
                            <input type="text"
                                class="form-control form-control-alt @error('name') is-invalid
                @enderror"
                                id="name" name="name" value="{{ old('name') }}"
                                placeholder="Ingrese su nombre y apellido">
                            @error('name')
                                <div class="invalid-feedback animated fadeIn">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="lblDate" class="form-label">Fecha de Atención</label>
                            <input type="date"
                                class="form-control form-control-alt  @error('date_attention') is-invalid
                @enderror"
                                id="date_attention" name="date_attention" value="{{ old('date_attention') }}">
                            @error('date_attention')
                                <div class="invalid-feedback animated fadeIn">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="lblHour" class="form-label">Hora de Atención</label>
                            <input type="time"
                                class="form-control form-control-alt  @error('hour_attention') is-invalid
                @enderror"
                                id="hour_attention" name="hour_attention" value="{{ old('hour_attention') }}">
                            @error('hour_attention')
                                <div class="invalid-feedback animated fadeIn">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="lblEmail" class="form-label">Correo Electrónico:</label>
                            <input type="text"
                                class="form-control form-control-alt @error('email') is-invalid
                  @enderror"
                                id="email" name="email" value="{{ old('email') }}"
                                placeholder="Ingrese su Correo electrónico">
                            @error('email')
                                <div class="invalid-feedback animated fadeIn">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="lblContactNumber" class="form-label">Numero de Telefono:</label>
                            <input type="text"
                                class="form-control form-control-alt @error('phone') is-invalid
                  @enderror"
                                id="phone" name="phone" value="{{ old('phone') }}"
                                placeholder="Ingrese su número de teléfono">
                            @error('phone')
                                <div class="invalid-feedback animated fadeIn">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="lblAddress" class="form-label">Domicilio:</label>
                            <input type="text"
                                class="form-control form-control-alt @error('address') is-invalid
                  @enderror"
                                id="address" name="address" value="{{ old('address') }}"
                                placeholder="Ingrese su Dirección de domicilio">
                            @error('address')
                                <div class="invalid-feedback animated fadeIn">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="lblPlace" class="form-label">Dirección o Unidad en que Trabaja:</label>
                            <select
                                class="form-control form-control-alt  @error('place_job') is-invalid
                @enderror"
                                id="place_job" name="place_job" value="{{ old('place_job') }}">
                                <option selected="">Seleccione una opción</option>
                                @foreach ($places as $place)
                                    <option {{ old('place_job') == $place->description ? 'selected' : '' }} value="{{ $place->description }}">{{ $place->description }}</option>
                                @endforeach
                            </select>
                            @error('place_job')
                                <div class="invalid-feedback animated fadeIn">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="lblProcedure" class="form-label">Tipo de Trámite:</label>
                            <select
                                class="form-control form-control-alt @error('type_procedure') is-invalid
                  @enderror"
                                id="type_procedure" name="type_procedure" value="{{ old('type_procedure') }}">
                                <option selected="">Seleccione una opción</option>
                                <option {{ old('type_procedure') == 'Reclamo' ? 'selected' : '' }} value="Reclamo">Reclamo</option>
                                <option {{ old('type_procedure') == 'Sugerencia' ? 'selected' : '' }} value="Sugerencia">Sugerencia</option>
                                <option {{ old('type_procedure') == 'Felicitacion' ? 'selected' : '' }} value="Felicitacion">Felicitacion</option>
                            </select>
                            @error('type_procedure')
                                <div class="invalid-feedback animated fadeIn">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="lblPlace" class="form-label">Seleccione Area:</label>
                            <select
                                class="form-control form-control-alt  @error('area_attention') is-invalid
                  @enderror"
                                id="area_attention" name="area_attention" value="{{ old('area_attention') }}">
                                <option selected="">Seleccione una opción</option>
                                <option {{ old('area_attention') == 'Asistencia - Reloj Control' ? 'selected' : '' }} value="Asistencia - Reloj Control">Asistencia - Reloj Control</option>
                                <option {{ old('area_attention') == 'Capacitacion' ? 'selected' : '' }} value="Capacitacion">Capacitacion</option>
                                <option {{ old('area_attention') == 'Contratacion' ? 'selected' : '' }} value="Contratacion">Contratacion</option>
                                <option {{ old('area_attention') == 'Horas Extras' ? 'selected' : '' }} value="Horas Extras">Horas Extras</option>
                                <option {{ old('area_attention') == 'Jefa/e de Personal' ? 'selected' : '' }} value="Jefa/e de Personal">Jefa/e de Personal</option>
                                <option {{ old('area_attention') == 'Licencias Medicas' ? 'selected' : '' }} value="Licencias Medicas">Licencias Medicas</option>
                                <option {{ old('area_attention') == 'Remuneraciones' ? 'selected' : '' }} value="Remuneraciones">Remuneraciones</option>
                                <option {{ old('area_attention') == 'Retiro Cese de Funciones' ? 'selected' : '' }} value="Retiro Cese de Funciones">Retiro Cese de Funciones</option>
                                <option {{ old('area_attention') == 'Subdirector/a de Personal' ? 'selected' : '' }} value="Subdirector/a de Personal">Subdirector/a de Personal</option>
                                <option {{ old('area_attention') == 'Vestuario' ? 'selected' : '' }} value="Vestuario">Vestuario</option>
                                <option {{ old('area_attention') == 'Viaticos' ? 'selected' : '' }} value="Viaticos">Viaticos</option>
                            </select>
                            @error('area_attention')
                                <div class="invalid-feedback animated fadeIn">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="content py-6">
                            <label class="form-label" for="example-textarea-input-alt">Asunto:</label>
                            <input type="text"
                                class="form-control form-control-alt @error('subject') is-invalid
                            @enderror"
                                id="subject" name="subject" value="{{ old('subject') }}" placeholder="Ingrese asunto">
                            @error('subject')
                                <div class="invalid-feedback animated fadeIn">{{ $message }}</div>
                            @enderror
                            <label class="form-label" for="example-textarea-input-alt">Observación:</label>
                            <textarea class="form-control form-control-alt @error('observation') is-invalid
                    @enderror"
                                id="observation" name="observation" style="height: 100px" value="{{ old('observation') }}"
                                placeholder="Escriba aquí"></textarea>
                            @error('observation')
                                <div class="invalid-feedback animated fadeIn">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="block-content block-content-full block-content-sm bg-body-light text-end">
                        <a type="button" class="btn btn-md btn-alt-secondary" href="{{ route('form.index') }}"><i
                                class="fa fa-angle-left opacity-50 me-1"></i> Volver</a>
                        <button type="submit" class="btn btn-md btn-alt-success">
                            <i class="fa fa-check opacity-50 me-1"></i> Guardar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
