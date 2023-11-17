@extends('layouts.backendSurvey')

@section('content')
    <div class="bg-body-light">
        <div class="content content-full text-center ">
            <div class="align-items-sm-center">
                <div>
                    {{-- centrar etiquetas --}}
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">ENCUESTA DE SATISFACCIÓN</h1>
                </div>
                <p>parrafo de descripcion</p>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="row justify-content-center ">
            <div class=col-md-8>
                <div class="block block-rounded">
                    <div class="block-content align-items-sm-center">
                        {{-- cambiar la ruta para la insercion de datos en funcion store de conrolador tabla formulario srf --}}
                        <form class="row g-3" method="POST" action="{{ route('surveys.front.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-6">
                                <span class="form-label">1. Fecha de Atención:</span>
                                {{-- <label for="date_attention" class="form-label">1. Fecha de Atención:</label> --}}
                                <input type="date"
                                    class="form-control form-control-alt @error('date_attention') is-invalid
                                @enderror"
                                    id="date_attention" name="date_attention" value="{{ old('date_attention') }}"
                                    placeholder="Ingrese Fecha de atención">
                                @error('date_attention')
                                    <div class="invalid-feedback animated fadeIn">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <span class="form-label">2. ¿Cual es su calidad Jurídica?</span>
                                {{-- <label for="juridic_quality" class="form-label">2. ¿Cual es su calidad Jurídica?</label> --}}
                                <select
                                    class="form-select form-control-alt @error('juridic_quality') is-invalid @enderror"
                                    id="juridic_quality" name="juridic_quality" value="{{ old('juridic_quality') }}">
                                    <option value="" selected>Seleccione una opción</option>
                                    <option {{ old('juridic_quality') == 'Planta' ? 'selected' : '' }} value="Planta">Planta</option>
                                    <option {{ old('juridic_quality') == 'Contrata' ? 'selected' : '' }} value="Contrata">Contrata</option>
                                    <option {{ old('juridic_quality') == 'Código del Trabajo' ? 'selected' : '' }} value="Código del Trabajo">Código del Trabajo</option>
                                    <option {{ old('juridic_quality') == 'Honorario' ? 'selected' : '' }} value="Honorario">Honorario</option>
                                    <option {{ old('juridic_quality') == 'Suplencia' ? 'selected' : '' }} value="Suplencia">Suplencia</option>
                                    <option {{ old('juridic_quality') == 'Otro' ? 'selected' : '' }} value="Otro">Otro</option>
                                    @error('juridic_quality')
                                        <div class="invalid-feedback animated fadeIn">{{ $message }}</div>
                                    @enderror
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="escale" class="form-label">3. ¿Cual es su Escalafón?</label>
                                <select class="form-select form-control-alt @error('escale') is-invalid
                                @enderror"
                                    id="escale" name="escale" value="{{ old('escale') }}">
                                    <option value="" selected="">Seleccione una opción</option>
                                    <option {{ old('escale') == 'Directivo' ? 'selected' : '' }} value="Directivo">Directivo</option>
                                    <option {{ old('escale') == 'Profesional' ? 'selected' : '' }} value="Profesional">Profesional</option>
                                    <option {{ old('escale') == 'Jefatura' ? 'selected' : '' }} value="Jefatura">Jefatura</option>
                                    <option {{ old('escale') == 'Técnico' ? 'selected' : '' }} value="Técnico">Técnico</option>
                                    <option {{ old('escale') == 'Administrativo' ? 'selected' : '' }} value="Administrativo">Administrativo</option>
                                    <option {{ old('escale') == 'Auxiliar' ? 'selected' : '' }} value="Auxiliar">Auxiliar</option>
                                    <option {{ old('escale') == 'No Aplica' ? 'selected' : '' }} value="No Aplica">No Aplica (códigos - Honorarios - Otros)</option>
                                    @error('escale')
                                        <div class="invalid-feedback animated fadeIn">{{ $message }}</div>
                                    @enderror
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="age_range" class="form-label">4. Indique su rango de edad</label>
                                <select class="form-select form-control-alt @error('age_range') is-invalid
                                @enderror"
                                    id="age_range" name="age_range" value="{{ old('age_range') }}">
                                    <option value="" selected="">Seleccione una opción</option>
                                    <option {{ old('age_range') == 'Entre 18 y 25 años' ? 'selected' : '' }} value="Entre 18 y 25 años">Entre 18 y 25 años</option>
                                    <option {{ old('age_range') == 'Entre 26 y 30 años' ? 'selected' : '' }} value="Entre 26 y 30 años">Entre 26 y 30 años</option>
                                    <option {{ old('age_range') == 'Entre 31 y 35 años' ? 'selected' : '' }} value="Entre 31 y 35 años">Entre 31 y 35 años</option>
                                    <option {{ old('age_range') == 'Entre 36 y 40 años' ? 'selected' : '' }} value="Entre 36 y 40 años">Entre 36 y 40 años</option>
                                    <option {{ old('age_range') == 'Entre 41 y 45 años' ? 'selected' : '' }} value="Entre 41 y 45 años">Entre 41 y 45 años</option>
                                    <option {{ old('age_range') == 'Entre 46 y 50 años' ? 'selected' : '' }} value="Entre 46 y 50 años">Entre 46 y 50 años</option>
                                    <option {{ old('age_range') == 'Entre 51 y 55 años' ? 'selected' : '' }} value="Entre 51 y 55 años">Entre 51 y 55 años</option>
                                    <option {{ old('age_range') == 'Entre 56 y 60 años' ? 'selected' : '' }} value="Entre 56 y 60 años">Entre 56 y 60 años</option>
                                    <option {{ old('age_range') == 'Entre 61 y 65 años' ? 'selected' : '' }} value="Entre 61 y 65 años">Entre 61 y 65 años</option>
                                    <option {{ old('age_range') == 'Más de 65 años' ? 'selected' : '' }} value="Más de 65 años">Más de 65 años</option>
                                    @error('age_range')
                                        <div class="invalid-feedback animated fadeIn">{{ $message }}</div>
                                    @enderror
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="genre" class="form-label">5. Sexo</label>
                                <select class="form-select form-control-alt @error('genre') is-invalid
                                @enderror"
                                    id="genre" name="genre" value="{{ old('genre') }}">
                                    <option value="" selected="">Seleccione una opción</option>
                                    <option {{ old('genre') == 'Femenino' ? 'selected' : '' }} value="Femenino">Femenino</option>
                                    <option {{ old('genre') == 'Masculino' ? 'selected' : '' }} value="Masculino">Masculino</option>
                                    <option {{ old('genre') == 'Otro' ? 'selected' : '' }} value="Otro">Otro</option>
                                    @error('genre')
                                        <div class="invalid-feedback animated fadeIn">{{ $message }}</div>
                                    @enderror
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="years_antiquity" class="form-label">6. Antigüedad en el Municipio</label>
                                <select class="form-select form-control-alt @error('years_antiquity') is-invalid
                                @enderror"
                                    id="years_antiquity" name="years_antiquity" value="{{ old('years_antiquity') }}">
                                    <option value="" selected="">Seleccione una opción</option>
                                    <option {{ old('years_antiquity') == 'Menor a 1 año' ? 'selected' : '' }} value="Menor a 1 año">Menor a 1 año</option>
                                    <option {{ old('years_antiquity') == 'Entre 1 y 5 años' ? 'selected' : '' }} value="Entre 1 y 5 años">Entre 1 y 5 años</option>
                                    <option {{ old('years_antiquity') == 'Entre 6 y 10 años' ? 'selected' : '' }} value="Entre 6 y 10 años">Entre 6 y 10 años</option>
                                    <option {{ old('years_antiquity') == 'Entre 11 y 15 años' ? 'selected' : '' }} value="Entre 11 y 15 años">Entre 11 y 15 años</option>
                                    <option {{ old('years_antiquity') == 'Entre 16 y 20 años' ? 'selected' : '' }} value="Entre 16 y 20 años">Entre 16 y 20 años</option>
                                    <option {{ old('years_antiquity') == 'Más de 20 años' ? 'selected' : '' }} value="Más de 20 años">Más de 20 años</option>
                                    @error('years_antiquity')
                                        <div class="invalid-feedback animated fadeIn">{{ $message }}</div>
                                    @enderror
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="place_job" class="form-label">7. ¿En que dirección (Unidad) trabaja?</label>
                                <select class="form-select form-control-alt @error('place_job') is-invalid
                                @enderror"
                                    id="place_job" name="place_job" value="{{ old('place_job') }}">
                                    <option value="" selected="">Seleccione una opción</option>
                                    <option {{ old('place_job') == 'Administración Municipal' ? 'selected' : '' }} value="Administración Municipal">Administración Municipal (incluye Oirs,
                                        Licitaciones)</option>
                                    <option {{ old('place_job') == 'Alcaldía' ? 'selected' : '' }} value="Alcaldía">Alcaldía</option>
                                    <option {{ old('place_job') == 'Asesoría Jurídica' ? 'selected' : '' }} value="Asesoría Jurídica">Asesoría Jurídica</option>
                                    <option {{ old('place_job') == 'Dirección de Administración y Finanzas' ? 'selected' : '' }} value="Dirección de Administración y Finanzas">Dirección de Administración y
                                        Finanzas</option>
                                    <option {{ old('place_job') == 'Dirección de Control' ? 'selected' : '' }} value="Dirección de Control">Dirección de Control</option>
                                    <option {{ old('place_job') == 'Dirección de Desarrollo Comunitario DIDECO' ? 'selected' : '' }} value="Dirección de Desarrollo Comunitario DIDECO">Dirección de Desarrollo
                                        Comunitario DIDECO</option>
                                    <option {{ old('place_job') == 'Dirección de Medio Ambiente Aseo y Ornato DIMAO' ? 'selected' : '' }} value="Dirección de Medio Ambiente Aseo y Ornato DIMAO">Dirección de Medio
                                        Ambiente Aseo y Ornato DIMAO</option>
                                    <option {{ old('place_job') == 'Dirección de Obras Municipales DOM' ? 'selected' : '' }} value="Dirección de Obras Municipales DOM">Dirección de Obras Municipales DOM
                                    </option>
                                    <option {{ old('place_job') == 'Dirección de Operaciones' ? 'selected' : '' }} value="Dirección de Operaciones">Dirección de Operaciones</option>
                                    <option {{ old('place_job') == 'Dirección de Seguridad Pública' ? 'selected' : '' }} value="Dirección de Seguridad Pública">Dirección de Seguridad Pública</option>
                                    <option {{ old('place_job') == 'Dirección de Servicios Traspasados' ? 'selected' : '' }} value="Dirección de Servicios Traspasados">Dirección de Servicios Traspasados
                                    </option>
                                    <option {{ old('place_job') == 'Dirección de Tránsito' ? 'selected' : '' }} value="Dirección de Tránsito">Dirección de Tránsito</option>
                                    <option {{ old('place_job') == 'Dirección de Turismo' ? 'selected' : '' }} value="Dirección de Turismo">Dirección de Turismo</option>
                                    <option {{ old('place_job') == 'Oficina Territorial Alerce' ? 'selected' : '' }} value="Oficina Territorial Alerce">Oficina Territorial Alerce</option>
                                    <option {{ old('place_job') == 'Oficina Territorial Mirasol' ? 'selected' : '' }} value="Oficina Territorial Mirasol">Oficina Territorial Mirasol</option>
                                    <option {{ old('place_job') == 'Oficina Territorial Rural' ? 'selected' : '' }} value="Oficina Territorial Rural">Oficina Territorial Rural</option>
                                    <option {{ old('place_job') == 'Oficina Territorial Ruta Tepual' ? 'selected' : '' }} value="Oficina Territorial Ruta Tepual">Oficina Territorial Ruta Tepual
                                    </option>
                                    <option {{ old('place_job') == 'Primer Juzgado' ? 'selected' : '' }} value="Primer Juzgado">Primer Juzgado</option>
                                    <option {{ old('place_job') == 'Secretaría Municipal' ? 'selected' : '' }} value="Secretaría Municipal">Secretaría Municipal</option>
                                    <option {{ old('place_job') == 'Secretaría Cpmunal de Planificación SECPLAN' ? 'selected' : '' }} value="Secretaría Cpmunal de Planificación SECPLAN">Secretaría Comunal de
                                        Planificación SECPLAN</option>
                                    <option {{ old('place_job') == 'Segundo Juzgado' ? 'selected' : '' }} value="Segundo Juzgado">Segundo Juzgado</option>
                                    <option {{ old('place_job') == 'Tercer Juzgado' ? 'selected' : '' }} value="Tercer Juzgado">Tercer Juzgado</option>
                                    <option {{ old('place_job') == 'Otro' ? 'selected' : '' }} value="Otro">Otro</option>
                                    @error('place_job')
                                     <div class="invalid-feedback animated fadeIn">{{ $message }}</div>
                                    @enderror
                                </select>
                            </div>
                            <div></div>
                    </div>
                </div>

                <div class="block block-rounded">
                    <div class="block-content align-items-sm-center">
                        <div class="col-md-12 text-center">
                            <h4>En las siguientes preguntas, se le solicita evaluar la atencion recibida en cuanto a la
                                última visita realizada al Departamento de Personal y/o Subdirección de Personal
                                (IMPORTANTE! Favor solo evaluar el área principal de su trámite)</h4>
                        </div>
                        <div class="col-md-12">
                            <label for="a8" class="form-label">8. Indique a que área del Departamento de Personal
                                asistió:</label>
                            <select class="form-select form-control-alt @error('a8') is-invalid
                            @enderror"
                                id="a8" name="a8" value="{{ old('a8') }}">
                                <option value="" selected="">Seleccione una opción</option>
                                <option {{ old('a8') == 'Asistencia - Reloj Control' ? 'selected' : '' }} value="Asistencia - Reloj Control">Asistencia - Reloj Control</option>
                                <option {{ old('a8') == 'Capacitacion' ? 'selected' : '' }} value="Capacitacion">Capacitacion</option>
                                <option {{ old('a8') == 'Contratación' ? 'selected' : '' }} value="Contratación">Contratación</option>
                                <option {{ old('a8') == 'Horas Extras' ? 'selected' : '' }} value="Horas Extras">Horas Extras</option>
                                <option {{ old('a8') == 'Jefe/a de Personal' ? 'selected' : '' }} value="Jefe/a de Personal">Jefe/a de Personal</option>
                                <option {{ old('a8') == 'Licencias Médicas' ? 'selected' : '' }} value="Licencias Médicas">Licencias Médicas</option>
                                <option {{ old('a8') == 'Remuneraciones' ? 'selected' : '' }} value="Remuneraciones">Remuneraciones</option>
                                <option {{ old('a8') == 'Retiro Cese de Funciones' ? 'selected' : '' }} value="Retiro Cese de Funciones">Retiro Cese de Funciones</option>
                                <option {{ old('a8') == 'Subdirector/a de Personal' ? 'selected' : '' }} value="Subdirector/a de Personal">Subdirector/a de Personal</option>
                                <option {{ old('a8') == 'Vestuario' ? 'selected' : '' }} value="Vestuario">Vestuario</option>
                                <option {{ old('a8') == 'Viáticos' ? 'selected' : '' }} value="Viáticos">Viáticos</option>
                                <option {{ old('a8') == 'Departamento de Prevención de Riesgos' ? 'selected' : '' }} value="Departamento de Prevención de Riesgos">Departamento de Prevención de Riesgos
                                </option>
                                <option {{ old('a8') == 'Departamento de Bienestar' ? 'selected' : '' }} value="Departamento de Bienestar">Departamento de Bienestar</option>
                                <option {{ old('a8') == 'Otro' ? 'selected' : '' }} value="Otro">Otro</option>
                                @error('a8')
                                    <div class="invalid-feedback animated fadeIn">{{ $message }}</div>
                                @enderror
                            </select>
                        </div>
                        <br>
                        <div class="col-md-12">
                            <BR>
                            <label for="a9" class="form-label">9. En relación con la pregunta anterior, podría
                                indicarnos ¿qué trámite en especifico realizó?:</label>
                            <textarea class="form-control form-control-alt @error('a9') is-invalid @enderror"
                            id="a9" name="a9" value="{{ old('a9') }}" style="height: 50px" placeholder="Escriba aquí" maxlength="500"></textarea>
                            @error('a9')
                                <div class="invalid-feedback animated fadeIn">{{ $message }}</div>
                            @enderror
                            <br>
                        </div>
                        <div class="col-mb-12">
                            <label for="a10" class="form-label">10. Considera que la atención recibida del
                                funcionario de Personal, fue amable y cordial. Un trato amable
                                y cordial implica saludar, tratar con respeto, orientar al funcionario, y a su vez
                                despedirse correctamente
                            </label>
                            <div class="space-x-3 text-center">
                                <BR>
                                <label class="form-check-label" for="a10">Muy en desacuerdo </label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a10') is-invalid @enderror" type="radio" id="a10" name="a10"
                                        value="1" {{ old('a10') == '1' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a10">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a10') is-invalid @enderror" type="radio" id="b10" name="a10"
                                        value="2" {{ old('a10') == '2' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a10">2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a10') is-invalid @enderror" type="radio" id="c10" name="a10"
                                        value="3" {{ old('a10') == '3' ? 'checked' : '' }}>
                                    <label class="form-check-label @error('a10') is-invalid @enderror" for="a10">3</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a10') is-invalid @enderror" type="radio" id="d10" name="a10"
                                        value="4" {{ old('a10') == '4' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a10">4</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a10') is-invalid @enderror" type="radio" id="e10" name="a10"
                                        value="5" {{ old('a10') == '5' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a10">5</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a10') is-invalid @enderror" type="radio" id="f10" name="a10"
                                        value="6" {{ old('a10') == '6' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a10">6</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a10') is-invalid @enderror" type="radio" id="g10" name="a10"
                                        value="7" {{ old('a10') == '7' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a10">7</label>
                                </div>
                                <label class="form-check-label" for="a10">Muy de acuerdo </label>
                            </div>

                            <BR>
                        </div>

                        <div class="col-mb-12">
                            <br>
                            <label for="a11" class="form-label">11. El funcionario de Personal demostró interés en
                                atender mi necesidad o solicitud.
                            </label>

                            <div class="space-x-3 text-center">
                                <br>
                                <label class="form-check-label" for="a11">Muy en desacuerdo </label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a11') is-invalid @enderror" type="radio" id="a11" name="a11"
                                        value="1" {{ old('a11') == '1' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a11">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a11') is-invalid @enderror" type="radio" id="b11" name="a11"
                                        value="2" {{ old('a11') == '2' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a11">2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a11') is-invalid @enderror" type="radio" id="c11" name="a11"
                                        value="3" {{ old('a11') == '3' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a11">3</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a11') is-invalid @enderror" type="radio" id="d11" name="a11"
                                        value="4" {{ old('a11') == '4' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a11">4</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a11') is-invalid @enderror" type="radio" id="e11" name="a11"
                                        value="5" {{ old('a11') == '5' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a11">5</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a11') is-invalid @enderror" type="radio" id="f11" name="a11"
                                        value="6" {{ old('a11') == '6' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a11">6</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a11') is-invalid @enderror" type="radio" id="g11" name="a11"
                                        value="7" {{ old('a11') == '7' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a11">7</label>
                                </div>
                                <label class="form-check-label" for="a11">Muy de acuerdo </label>
                            </div>
                            <BR>
                        </div>

                        <div class="col-mb-12">
                            <br>
                            <label for="a12" class="form-label">12. El funcionario de Personal se tomó el tiempo
                                necesario en atenderme.
                            </label>

                            <div class="space-x-3 text-center">
                                <br>
                                <label class="form-check-label" for="a12">Muy en desacuerdo </label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input  @error('a12') is-invalid @enderror" type="radio" id="a12" name="a12"
                                        value="1" {{ old('a12') == '1' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a12">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a12') is-invalid @enderror" type="radio" id="b12" name="a12"
                                        value="2" {{ old('a12') == '2' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a12">2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a12') is-invalid @enderror" type="radio" id="c12" name="a12"
                                        value="3" {{ old('a12') == '3' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a12">3</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a12') is-invalid @enderror" type="radio" id="d12" name="a12"
                                        value="4" {{ old('a12') == '4' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a12">4</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a12') is-invalid @enderror" type="radio" id="e12" name="a12"
                                        value="5" {{ old('a12') == '5' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a12">5</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a12') is-invalid @enderror" type="radio" id="f12" name="a12"
                                        value="6" {{ old('a12') == '6' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a12">6</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a12') is-invalid @enderror" type="radio" id="g12" name="a12"
                                        value="7" {{ old('a12') == '7' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a12">7</label>
                                </div>
                                <label class="form-check-label" for="a12">Muy de acuerdo</label>
                            </div>
                            <BR>
                        </div>

                        <div class="col-mb-12">
                            <br>
                            <label for="a13" class="form-label">13. El funcionario de Personal se expresa con
                                claridad y me entrega la información adecuada.
                            </label>

                            <div class="space-x-3 text-center">
                                <br>
                                <label class="form-check-label" for="a13">Muy en desacuerdo </label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a13') is-invalid @enderror" type="radio" id="a13" name="a13"
                                        value="1" {{ old('a13') == '1' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a13">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a13') is-invalid @enderror" type="radio" id="b13" name="a13"
                                        value="2" {{ old('a13') == '2' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a13">2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a13') is-invalid @enderror" type="radio" id="c13" name="a13"
                                        value="3" {{ old('a13') == '3' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a13">3</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a13') is-invalid @enderror" type="radio" id="d13" name="a13"
                                        value="4" {{ old('a13') == '4' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a13">4</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a13') is-invalid @enderror" type="radio" id="e13" name="a13"
                                        value="5" {{ old('a13') == '5' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a13">5</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a13') is-invalid @enderror" type="radio" id="f13" name="a13"
                                        value="6" {{ old('a13') == '6' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a13">6</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a13') is-invalid @enderror" type="radio" id="g13" name="a13"
                                        value="7" {{ old('a13') == '7' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a13">7</label>
                                </div>
                                <label class="form-check-label" for="a13">Muy de acuerdo </label>
                            </div>
                            <BR>
                        </div>

                        <div class="col-mb-12">
                            <br>
                            <label for="a14" class="form-label">14. El tiempo total de espera, desde el momento en
                                que llegué hasta que fuí atendido, fué adecuado.
                            </label>

                            <div class="space-x-3 text-center">
                                <br>
                                <label class="form-check-label " for="a14">Muy en desacuerdo </label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a14') is-invalid @enderror" type="radio" id="a14" name="a14"
                                        value="1" {{ old('a14') == '1' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a14">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a14') is-invalid @enderror" type="radio" id="b14" name="a14"
                                        value="2" {{ old('a14') == '2' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a14">2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a14') is-invalid @enderror" type="radio" id="c14" name="a14"
                                        value="3" {{ old('a14') == '3' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a14">3</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a14') is-invalid @enderror" type="radio" id="d14" name="a14"
                                        value="4" {{ old('a14') == '4' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a14">4</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a14') is-invalid @enderror" type="radio" id="e14" name="a14"
                                        value="5" {{ old('a14') == '5' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a14">5</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a14') is-invalid @enderror" type="radio" id="f14" name="a14"
                                        value="6" {{ old('a14') == '6' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a14">6</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a14') is-invalid @enderror" type="radio" id="g14" name="a14"
                                        value="7" {{ old('a14') == '7' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a14">7</label>
                                </div>
                                <label class="form-check-label" for="a14">Muy de acuerdo </label>
                            </div>
                            <BR>
                        </div>

                        <div class="col-mb-12">
                            <br>
                            <label for="a15" class="form-label">15. El funcionario del departamento de Personal,
                                domina la materia relacionada con mi trámite o gestión.
                            </label>

                            <div class="space-x-3 text-center">
                                <br>
                                <label class="form-check-label" for="a15">Muy en desacuerdo </label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a15') is-invalid @enderror" type="radio" id="a15" name="a15"
                                        value="1" {{ old('a15') == '1' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a15">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a15') is-invalid @enderror" type="radio" id="b15" name="a15"
                                        value="2" {{ old('a15') == '2' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a15">2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a15') is-invalid @enderror" type="radio" id="c15" name="a15"
                                        value="3" {{ old('a15') == '3' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a15">3</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a15') is-invalid @enderror" type="radio" id="d15" name="a15"
                                        value="4" {{ old('a15') == '4' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a15">4</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a15') is-invalid @enderror" type="radio" id="e15" name="a15"
                                        value="5" {{ old('a15') == '5' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a15">5</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a15') is-invalid @enderror" type="radio" id="f15" name="a15"
                                        value="6" {{ old('a15') == '6' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a15">6</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a15') is-invalid @enderror" type="radio" id="g15" name="a15"
                                        value="7" {{ old('a15') == '7' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a15">7</label>
                                </div>
                                <label class="form-check-label" for="a15">Muy de acuerdo </label>
                            </div>
                            <BR>
                        </div>

                        <div class="col-mb-12">
                            <br>
                            <label for="a16" class="form-label">16. Siente que sufrió algún tipo de discriminación de
                                cualquier tipo. (Político, religioso, de genero, físico, etc.).
                            </label>
                            <div class="space-y-2">
                                <br>
                                <div class="form-check">
                                    <input class="form-check-input @error('a16') is-invalid @enderror" type="radio" id="a16" name="a16"
                                        value="SI" {{ old('a16') == 'SI' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a17">SI</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input @error('a16') is-invalid @enderror" type="radio" id="b16" name="a16"
                                        value="NO" {{ old('a16') == 'NO' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a17">NO</label>
                                    @error('a16')
                                        <div class="invalid-feedback animated fadeIn">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <BR>

                        </div>

                        <div class="col-mb-12">
                            <br>
                            <label for="a17" class="form-label">17. Si su respuesta anterior fue SI, indique por que
                                motivo se sintió discriminado.
                            </label>

                            <textarea class="form-control" id="a17" name="a17" style="height: 70px" maxlength="1000" placeholder="Escriba aquí"></textarea>
                            <BR>
                        </div>


                        <div class="mb-12">
                            <br>
                            <label for="a18" class="form-label">18. El Área de Personal es confiable.</label>

                            <div class="space-x-3 text-center">
                                <br>
                                <label class="form-check-label" for="a18">Muy en desacuerdo </label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a18') is-invalid @enderror" type="radio" id="a18" name="a18"
                                        value="1" {{ old('a18') == '1' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a18">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a18') is-invalid @enderror" type="radio" id="b18" name="a18"
                                        value="2" {{ old('a18') == '2' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a18">2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a18') is-invalid @enderror" type="radio" id="c18" name="a18"
                                        value="3" {{ old('a18') == '3' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a18">3</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a18') is-invalid @enderror" type="radio" id="d18" name="a18"
                                        value="4" {{ old('a18') == '4' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a18">4</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a18') is-invalid @enderror" type="radio" id="e18" name="a18"
                                        value="5" {{ old('a18') == '5' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a18">5</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a18') is-invalid @enderror" type="radio" id="f18" name="a18"
                                        value="6" {{ old('a18') == '6' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a18">6</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a18') is-invalid @enderror" type="radio" id="g18" name="a18"
                                        value="7" {{ old('a18') == '7' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a18">7</label>
                                </div>
                                <label class="form-check-label" for="a19">Muy de acuerdo</label>
                            </div>
                            <BR>


                        </div>

                        <div for="20" class="col-md-12">
                            <br>
                            <label for="a19" class="form-label">19. El Área de Personal es eficiente.</label>
                            <div class="space-x-3 text-center">
                                <br>
                                <label class="form-check-label" for="a19">Muy en desacuerdo </label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a19') is-invalid @enderror" type="radio" id="a19" name="a19"
                                        value="1" {{ old('a19') == '1' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a19">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a19') is-invalid @enderror" type="radio" id="b19" name="a19"
                                        value="2" {{ old('a19') == '2' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a19">2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a19') is-invalid @enderror" type="radio" id="c19" name="a19"
                                        value="3" {{ old('a19') == '3' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a19">3</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a19') is-invalid @enderror" type="radio" id="d19" name="a19"
                                        value="4" {{ old('a19') == '4' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a19">4</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a19') is-invalid @enderror" type="radio" id="e19" name="a19"
                                        value="5" {{ old('a19') == '5' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a19">5</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a19') is-invalid @enderror" type="radio" id="f19" name="a19"
                                        value="6" {{ old('a19') == '6' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a19">6</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a19') is-invalid @enderror" type="radio" id="g19" name="a19"
                                        value="7" {{ old('a19') == '7' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a19">7</label>
                                </div>
                                <label class="form-check-label" for="a19">Muy de acuerdo</label>
                            </div>
                            <BR>

                        </div>


                        <div class="col-mb-12">
                            <br>
                            <label for="a20" class="form-label">20. El Área de Personal es cercana.
                            </label>

                            <div class="space-x-3 text-center">
                                <br>
                                <label class="form-check-label" for="a20">Muy en desacuerdo </label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a20') is-invalid @enderror" type="radio" id="a20" name="a20"
                                        value="1" {{ old('a20') == '1' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a20">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a20') is-invalid @enderror" type="radio" id="b20" name="a20"
                                        value="2" {{ old('a20') == '2' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a20">2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a20') is-invalid @enderror" type="radio" id="c20" name="a20"
                                        value="3" {{ old('a20') == '3' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a20">3</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a20') is-invalid @enderror" type="radio" id="d20" name="a20"
                                        value="4" {{ old('a20') == '4' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a20">4</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a20') is-invalid @enderror" type="radio" id="e20" name="a20"
                                        value="5" {{ old('a20') == '5' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a20">5</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a20') is-invalid @enderror" type="radio" id="f20" name="a20"
                                        value="6" {{ old('a20') == '6' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a20">6</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a20') is-invalid @enderror" type="radio" id="g20" name="a20"
                                        value="7" {{ old('a20') == '7' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a20">7</label>
                                </div>
                                <label class="form-check-label" for="a20">Muy de acuerdo </label>
                            </div>
                            <BR>
                        </div>

                        <div class="col-mb-12">
                            <br>
                            <label for="a21" class="form-label">21. En relación a la solución de su trámite o
                                gestión, ¿fué solucionado satisfactoriamente?.
                            </label>

                            <div class="space-x-3 text-center">
                                <br>
                                <label class="form-check-label" for="a21">Totalmente insatisfecho </label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a21') is-invalid @enderror" type="radio" id="a21" name="a21"
                                        value="1" {{ old('a21') == '1' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a21">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a21') is-invalid @enderror" type="radio" id="b21" name="a21"
                                        value="2" {{ old('a21') == '2' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a21">2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a21') is-invalid @enderror" type="radio" id="c21" name="a21"
                                        value="3" {{ old('a21') == '3' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a21">3</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a21') is-invalid @enderror" type="radio" id="d21" name="a21"
                                        value="4" {{ old('a21') == '4' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a21">4</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a21') is-invalid @enderror" type="radio" id="e21" name="a21"
                                        value="5" {{ old('a21') == '5' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a21">5</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a21') is-invalid @enderror" type="radio" id="f21" name="a21"
                                        value="6" {{ old('a21') == '6' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a21">6</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a21') is-invalid @enderror" type="radio" id="g21" name="a21"
                                        value="7" {{ old('a21') == '7' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a21">7</label>
                                </div>
                                <label class="form-check-label" for="a21">Totalmente satisfecho </label>
                            </div>
                            <BR>
                        </div>

                        <div class="col-mb-12">
                            <br>
                            <label for="a22" class="form-label">22. En general, considerando todas las variables
                                anteriores, y a todas las secciones y áreas en una escala de 1 a 7, cómo evaluaría la
                                experiencia de su visita al área de personal a la cual se dirigió.
                            </label>

                            <div class="space-x-3 text-center">
                                <br>
                                <label class="form-check-label" for="a22">Pésimo</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a22') is-invalid @enderror" type="radio" id="a22" name="a22"
                                        value="1" {{ old('a22') == '1' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a22">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a22') is-invalid @enderror" type="radio" id="b22" name="a22"
                                        value="2" {{ old('a22') == '2' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a22">2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a22') is-invalid @enderror" type="radio" id="c22" name="a22"
                                        value="3" {{ old('a22') == '3' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a22">3</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a22') is-invalid @enderror" type="radio" id="d22" name="a22"
                                        value="4" {{ old('a22') == '4' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a22">4</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a22') is-invalid @enderror" type="radio" id="e22" name="a22"
                                        value="5" {{ old('a22') == '5' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a22">5</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a22') is-invalid @enderror" type="radio" id="f22" name="a22"
                                        value="6" {{ old('a22') == '6' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a22">6</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a22') is-invalid @enderror" type="radio" id="g22" name="a22"
                                        value="7" {{ old('a22') == '7' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a22">7</label>
                                </div>
                                <label class="form-check-label" for="a22">Excelente</label>
                            </div>
                            <BR>
                        </div>


                        <div class="col-md-12">
                            <br>
                            <label for="a23" class="form-label">23. Por último, tiene algún comentario respecto a la
                                última visita realizada al Departamento de Personal y/o a Subdirección de Personal, que nos
                                ayude a mejorar.</label>
                            <textarea class="form-control" id="a23" name="a23" style="height: 70px" placeholder="Escriba aquí" maxlength="1000"></textarea>
                        </div>
                        <div class="block-content block-content-full block-content-sm bg-body-light text-end">
                            <a type="button" class="btn btn-md btn-alt-secondary" href="{{ route('form.index') }}"><i
                                    class="fa fa-angle-left opacity-50 me-1"></i> Volver</a>
                            <button type="submit" class="btn btn-md btn-alt-success">
                                <i class="fa fa-check opacity-50 me-1"></i> Guardar
                            </button>
                        </div>
                        <br>
                    </div>
                </div>

                </form>

            </div>
        </div>
    </div>
    </div>
@endsection
