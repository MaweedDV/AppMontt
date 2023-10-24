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
                                    <option value="Planta">Planta</option>
                                    <option value="Contrata">Contrata</option>
                                    <option value="Código del Trabajo">Código del Trabajo</option>
                                    <option value="Honorario">Honorario</option>
                                    <option value="Suplencia">Suplencia</option>
                                    <option value="Otro">Otro</option>
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
                                    <option value="Directivo">Directivo</option>
                                    <option value="Profesional">Profesional</option>
                                    <option value="Jefatura">Jefatura</option>
                                    <option value="Técnico">Técnico</option>
                                    <option value="Administrativo">Administrativo</option>
                                    <option value="Auxiliar">Auxiliar</option>
                                    <option value="No Aplica">No Aplica (códigos - Honorarios - Otros)</option>
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
                                    <option value="Entre 18 y 25 años">Entre 18 y 25 años</option>
                                    <option value="Entre 26 y 30 años">Entre 26 y 30 años</option>
                                    <option value="Entre 31 y 35 años">Entre 31 y 35 años</option>
                                    <option value="Entre 36 y 40 años">Entre 36 y 40 años</option>
                                    <option value="Entre 41 y 45 años">Entre 41 y 45 años</option>
                                    <option value="Entre 46 y 50 años">Entre 46 y 50 años</option>
                                    <option value="Entre 51 y 55 años">Entre 51 y 55 años</option>
                                    <option value="Entre 56 y 60 años">Entre 56 y 60 años</option>
                                    <option value="Entre 61 y 65 años">Entre 61 y 65 años</option>
                                    <option value="Más de 65 años">Más de 65 años</option>
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
                                    <option value="Femenino">Femenino</option>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Otro">Otro</option>
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
                                    <option value="Menor a 1 año">Menor a 1 año</option>
                                    <option value="Entre 1 y 5 años">Entre 1 y 5 años</option>
                                    <option value="Entre 6 y 10 años">Entre 6 y 10 años</option>
                                    <option value="Entre 11 y 15 años">Entre 11 y 15 años</option>
                                    <option value="Entre 16 y 20 años">Entre 16 y 20 años</option>
                                    <option value="Más de 20 años">Más de 20 años</option>
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
                                    <option value="Administración Municipal">Administración Municipal (incluye Oirs,
                                        Licitaciones)</option>
                                    <option value="Alcaldía">Alcaldía</option>
                                    <option value="Asesoría Jurídica">Asesoría Jurídica</option>
                                    <option value="Dirección de Administración y Finanzas">Dirección de Administración y
                                        Finanzas</option>
                                    <option value="Dirección de Control">Dirección de Control</option>
                                    <option value="Dirección de Desarrollo Comunitario DIDECO">Dirección de Desarrollo
                                        Comunitario DIDECO</option>
                                    <option value="Dirección de Medio Ambiente Aseo y Ornato DIMAO">Dirección de Medio
                                        Ambiente Aseo y Ornato DIMAO</option>
                                    <option value="Dirección de Obras Municipales DOM">Dirección de Obras Municipales DOM
                                    </option>
                                    <option value="Dirección de Operaciones">Dirección de Operaciones</option>
                                    <option value="Dirección de Seguridad Pública">Dirección de Seguridad Pública</option>
                                    <option value="Dirección de Servicios Traspasados">Dirección de Servicios Traspasados
                                    </option>
                                    <option value="Dirección de Tránsito">Dirección de Tránsito</option>
                                    <option value="Dirección de Turismo">Dirección de Turismo</option>
                                    <option value="Oficina Territorial Alerce">Oficina Territorial Alerce</option>
                                    <option value="Oficina Territorial Mirasol">Oficina Territorial Mirasol</option>
                                    <option value="Oficina Territorial Rural">Oficina Territorial Rural</option>
                                    <option value="Oficina Territorial Ruta Tepual">Oficina Territorial Ruta Tepual
                                    </option>
                                    <option value="Primer Juzgado">Primer Juzgado</option>
                                    <option value="Secretaría Municipal">Secretaría Municipal</option>
                                    <option value="Secretaría Cpmunal de Planificación SECPLAN">Secretaría Cpmunal de
                                        Planificación SECPLAN</option>
                                    <option value="Segundo Juzgado">Segundo Juzgado</option>
                                    <option value="Tercer Juzgado">Tercer Juzgado</option>
                                    <option value="Otro">Otro</option>
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
                                <option value="Asistencia - Reloj Control">Asistencia - Reloj Control</option>
                                <option value="Capacitacion">Capacitacion</option>
                                <option value="Contratación">Contratación</option>
                                <option value="Horas Extras">Horas Extras</option>
                                <option value="Jefe/a de Personal">Jefe/a de Personal</option>
                                <option value="Licencias Médicas">Licencias Médicas</option>
                                <option value="Remuneraciones">Remuneraciones</option>
                                <option value="Retiro Cese de Funciones">Retiro Cese de Funciones</option>
                                <option value="Subdirector/a de Personal">Subdirector/a de Personal</option>
                                <option value="Vestuario">Vestuario</option>
                                <option value="Viáticos">Viáticos</option>
                                <option value="Departamento de Prevención de Riesgos">Departamento de Prevención de Riesgos
                                </option>
                                <option value="Departamento de Bienestar">Departamento de Bienestar</option>
                                <option value="Otro">Otro</option>
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
                            id="a9" name="a9" value="{{ old('a9') }}" style="height: 50px" placeholder="Escriba aquí"></textarea>
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
                                <label class="form-check-label" for="a10">Muy en desacuerdo </label>
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
                                <label class="form-check-label" for="a11">Muy en desacuerdo </label>
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
                                <label class="form-check-label" for="a12">Muy en desacuerdo </label>
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
                                <label class="form-check-label" for="a13">Muy en desacuerdo </label>
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
                            <label for="a16" class="form-label">16. El funcionario de Personal que me atendió, es
                                confiable.
                            </label>

                            <div class="space-x-3 text-center">
                                <br>
                                <label class="form-check-label" for="a16">Muy en desacuerdo </label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a16') is-invalid @enderror" type="radio" id="a16" name="a16"
                                        value="1" {{ old('a16') == '1' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a16">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a16') is-invalid @enderror" type="radio" id="b16" name="a16"
                                        value="2" {{ old('a16') == '2' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a16">2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a16') is-invalid @enderror" type="radio" id="c16" name="a16"
                                        value="3" {{ old('a16') == '3' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a16">3</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a16') is-invalid @enderror" type="radio" id="d16" name="a16"
                                        value="4" {{ old('a16') == '4' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a16">4</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a16') is-invalid @enderror" type="radio" id="e16" name="a16"
                                        value="5" {{ old('a16') == '5' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a16">5</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a16') is-invalid @enderror" type="radio" id="f16" name="a16"
                                        value="6" {{ old('a16') == '6' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a16">6</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a16') is-invalid @enderror" type="radio" id="g16" name="a16"
                                        value="7" {{ old('a16') == '7' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a16">7</label>
                                </div>
                                <label class="form-check-label" for="a16">Muy de acuerdo </label>
                            </div>
                            <BR>
                        </div>

                        <div class="col-mb-12">
                            <br>
                            <label for="a17" class="form-label">17. Siente que sufrió algún tipo de discriminación de
                                cualquier tipo. (Político, religioso, de genero, físico, etc.).
                            </label>
                            <div class="space-y-2">
                                <br>
                                <div class="form-check">
                                    <input class="form-check-input @error('a17') is-invalid @enderror" type="radio" id="a17" name="a17"
                                        value="SI" {{ old('a17') == 'SI' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a17">SI</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input @error('a17') is-invalid @enderror" type="radio" id="b17" name="a17"
                                        value="NO" {{ old('a17') == 'NO' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a17">NO</label>
                                    @error('a17')
                                        <div class="invalid-feedback animated fadeIn">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <BR>

                        </div>

                        <div class="col-mb-12">
                            <br>
                            <label for="a18" class="form-label">18. Si su respuesta anterior fue SI, indique por que
                                motivo se sintió discriminado.
                            </label>

                            <textarea class="form-control" id="a18" name="a18" style="height: 70px" placeholder="Escriba aquí"></textarea>
                            <BR>
                        </div>


                        <div class="mb-12">
                            <br>
                            <label for="a19" class="form-label">19. El Área de Personal es confiable.</label>

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

                        <div for="20" class="col-md-12">
                            <br>
                            <label for="a20" class="form-label">20. El Área de Personal es eficiente.</label>
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
                                <label class="form-check-label" for="a20">Muy de acuerdo</label>
                            </div>
                            <BR>

                        </div>


                        <div class="col-mb-12">
                            <br>
                            <label for="a21" class="form-label">21. El Área de Personal es cercana.
                            </label>

                            <div class="space-x-3 text-center">
                                <br>
                                <label class="form-check-label" for="a21">Muy en desacuerdo </label>
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
                                <label class="form-check-label" for="a21">Muy de acuerdo </label>
                            </div>
                            <BR>
                        </div>

                        <div class="col-mb-12">
                            <br>
                            <label for="a22" class="form-label">22. En relación a la solución de su trámite o
                                gestión, ¿fué solucionado satisfactoriamente?.
                            </label>

                            <div class="space-x-3 text-center">
                                <br>
                                <label class="form-check-label" for="a22">Totalmente insatisfecho </label>
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
                                <label class="form-check-label" for="a22">Totalmente satisfecho </label>
                            </div>
                            <BR>
                        </div>

                        <div class="col-mb-12">
                            <br>
                            <label for="a23" class="form-label">23. En general, considerando todas las variables
                                anteriores, y a todas las secciones y áreas en una escala de 1 a 7, cómo evaluaría la
                                experiencia de su visita al área de personal a la cual se dirigió.
                            </label>

                            <div class="space-x-3 text-center">
                                <br>
                                <label class="form-check-label" for="a23">Pésimo</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a23') is-invalid @enderror" type="radio" id="a23" name="a23"
                                        value="1" {{ old('a23') == '1' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a23">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a23') is-invalid @enderror" type="radio" id="b23" name="a23"
                                        value="2" {{ old('a23') == '2' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a23">2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a23') is-invalid @enderror" type="radio" id="c23" name="a23"
                                        value="3" {{ old('a23') == '3' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a23">3</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a23') is-invalid @enderror" type="radio" id="d23" name="a23"
                                        value="4" {{ old('a23') == '4' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a23">4</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a23') is-invalid @enderror" type="radio" id="e23" name="a23"
                                        value="5" {{ old('a23') == '5' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a23">5</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a23') is-invalid @enderror" type="radio" id="f23" name="a23"
                                        value="6" {{ old('a23') == '6' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a23">6</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('a23') is-invalid @enderror" type="radio" id="g23" name="a23"
                                        value="7" {{ old('a23') == '7' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="a23">7</label>
                                </div>
                                <label class="form-check-label" for="a23">Excelente</label>
                            </div>
                            <BR>
                        </div>


                        <div class="col-md-12">
                            <br>
                            <label for="a24" class="form-label">24. Por último, tiene algún comentario respecto a la
                                última visita realizada al Departamento de Personal y/o a Subdirección de Personal, que nos
                                ayude a mejorar.</label>
                            <textarea class="form-control" id="a24" name="a24" style="height: 70px" placeholder="Escriba aquí"></textarea>
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
