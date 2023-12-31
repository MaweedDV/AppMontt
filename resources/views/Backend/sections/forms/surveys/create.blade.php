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
        <div class="row justify-content-center ">
             <div class=col-md-8>
              <div class="block block-rounded">
                <div class="block-content align-items-sm-center">
                  {{-- cambiar la ruta para la insercion de datos en funcion store de conrolador tabla formulario srf--}}
                  <form class="row g-3" method="POST" action="{{route('surveys.store')}}" enctype="multipart/form-data">
                      @csrf

                        <div class="col-md-6">
                          <label for="lblFecha" class="form-label">1. Fecha de Atención:</label>
                          <input type="date" class="form-control" id="date_attention" name="date_attention">
                        </div>
                        <div class="col-md-6">
                          <label for="lblPlace" class="form-label">2. ¿Cual es su calidad Jurídica?</label>
                          <select class="form-select" id="juridic_quality" name="juridic_quality">
                            <option selected="">Seleccione una opción</option>
                            <option value="Planta">Planta</option>
                            <option value="Contrata">Contrata</option>
                            <option value="Código del Trabajo">Código del Trabajo</option>
                            <option value="Honorario">Honorario</option>
                            <option value="Suplencia">Suplencia</option>
                            <option value="Otro">Otro</option>
                          </select>
                        </div>
                        <div class="col-md-6">
                          <label for="lblPlace" class="form-label">3. ¿Cual es su Escalafón?</label>
                          <select class="form-select" id="escale" name="escale">
                            <option selected="">Seleccione una opción</option>
                            <option value="Directivo">Directivo</option>
                            <option value="Profesional">Profesional</option>
                            <option value="Jefatura">Jefatura</option>
                            <option value="Técnico">Técnico</option>
                            <option value="Administrativo">Administrativo</option>
                            <option value="Auxiliar">Auxiliar</option>
                            <option value="No Aplica">No Aplica (códigos - Honorarios - Otros)</option>
                          </select>
                        </div>
                        <div class="col-md-6">
                          <label for="lblPlace" class="form-label">4. Indique su rango de edad</label>
                          <select class="form-select" id="age_range" name="age_range">
                            <option selected="">Seleccione una opción</option>
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
                          </select>
                        </div>
                        <div class="col-md-6">
                          <label for="lblPlace" class="form-label">5. Sexo</label>
                          <select class="form-select" id="genre" name="genre">
                            <option selected="">Seleccione una opción</option>
                            <option value="Femenino">Femenino</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Otro">Otro</option>
                          </select>
                        </div>
                        <div class="col-md-6">
                          <label for="lblPlace" class="form-label">6. Antigüedad en el Municipio</label>
                          <select class="form-select" id="years_antiquity" name="years_antiquity">
                            <option selected="">Seleccione una opción</option>
                            <option value="Menor a 1 año">Menor a 1 año</option>
                            <option value="Entre 1 y 5 años">Entre 1 y 5 años</option>
                            <option value="Entre 6 y 10 años">Entre 6 y 10 años</option>
                            <option value="Entre 11 y 15 años">Entre 11 y 15 años</option>
                            <option value="Entre 16 y 20 años">Entre 16 y 20 años</option>
                            <option value="Más de 20 años">Más de 20 años</option>
                          </select>
                        </div>
                        <div class="col-md-6">
                          <label for="lblPlace" class="form-label">7. ¿En que dirección (Unidad) trabaja?</label>
                          <select class="form-select" id="place_job" name="place_job">
                            <option selected="">Seleccione una opción</option>
                            <option value="Administración Municipal">Administración Municipal (incluye Oirs, Licitaciones)</option>
                            <option value="Alcaldía">Alcaldía</option>
                            <option value="Asesoría Jurídica">Asesoría Jurídica</option>
                            <option value="Dirección de Administración y Finanzas">Dirección de Administración y Finanzas</option>
                            <option value="Dirección de Control">Dirección de Control</option>
                            <option value="Dirección de Desarrollo Comunitario DIDECO">Dirección de Desarrollo Comunitario DIDECO</option>
                            <option value="Dirección de Medio Ambiente Aseo y Ornato DIMAO">Dirección de Medio Ambiente Aseo y Ornato DIMAO</option>
                            <option value="Dirección de Obras Municipales DOM">Dirección de Obras Municipales DOM</option>
                            <option value="Dirección de Operaciones">Dirección de Operaciones</option>
                            <option value="Dirección de Seguridad Pública">Dirección de Seguridad Pública</option>
                            <option value="Dirección de Servicios Traspasados">Dirección de Servicios Traspasados</option>
                            <option value="Dirección de Tránsito">Dirección de Tránsito</option>
                            <option value="Dirección de Turismo">Dirección de Turismo</option>
                            <option value="Oficina Territorial Alerce">Oficina Territorial Alerce</option>
                            <option value="Oficina Territorial Mirasol">Oficina Territorial Mirasol</option>
                            <option value="Oficina Territorial Rural">Oficina Territorial Rural</option>
                            <option value="Oficina Territorial Ruta Tepual">Oficina Territorial Ruta Tepual</option>
                            <option value="Primer Juzgado">Primer Juzgado</option>
                            <option value="Secretaría Municipal">Secretaría Municipal</option>
                            <option value="Secretaría Cpmunal de Planificación SECPLAN">Secretaría Cpmunal de Planificación SECPLAN</option>
                            <option value="Segundo Juzgado">Segundo Juzgado</option>
                            <option value="Tercer Juzgado">Tercer Juzgado</option>
                            <option value="Otro">Otro</option>
                          </select>
                        </div>
                        <div></div>
                </div>
              </div>

              <div class="block block-rounded">
                <div class="block-content align-items-sm-center">
                  <div class="col-md-12 text-center">
                    <h4>En las siguientes preguntas, se le solicita evaluar la atencion recibida en cuanto a la última visita realizada al Departamento de Personal y/o Subdirección de Personal
                      (IMPORTANTE! Favor solo evaluar el área principal de su trámite)</h4>
                  </div>
                  <div class="col-md-12">
                      <label for="lblPlace" class="form-label">8. Indique a que área del Departamento de Personal asistió:</label>
                      <select class="form-select" id="a8" name="a8">
                        <option selected="">Seleccione una opción</option>
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
                        <option value="Departamento de Prevención de Riesgos">Departamento de Prevención de Riesgos</option>
                        <option value="Departamento de Bienestar">Departamento de Bienestar</option>
                        <option value="Otro">Otro</option>
                      </select>
                  </div>
                    <br>
                  <div class="col-md-12">
                      <BR>
                      <label for="lblPlace" class="form-label">9. En relación con la pregunta anterior, podría indicarnos ¿qué trámite en especifico realizó?:</label>
                      <textarea class="form-control" id="a9" name="a9" style="height: 50px" placeholder="Escriba aquí"></textarea>
                      <br>
                  </div>
                  <div class="col-mb-12">
                      <label class="form-label">10. Considera que la atención recibida del funcionario de Personal, fue amable y cordial. Un trato amable
                          y cordial implica saludar, tratar con respeto, orientar al funcionario, y a su vez despedirse correctamente
                      </label>

                      <div class="space-x-3 text-center">
                          <BR>
                          <label class="form-check-label" for="example-radios-inline1">Muy en desacuerdo </label>
                        <div class="form-check form-check-inline">
                          <label class="form-check-label" for="example-radios-inline1">1</label>
                          <input class="form-check-input" type="radio" id="a10" name="a10" value="1" >
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" id="a10" name="a10" value="2" >
                          <label class="form-check-label" for="example-radios-inline2">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" id="a10" name="a10" value="3" >
                          <label class="form-check-label" for="example-radios-inline1">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" id="a10" name="a10" value="4" >
                          <label class="form-check-label" for="example-radios-inline2">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" id="a10" name="a10" value="5" >
                          <label class="form-check-label" for="example-radios-inline1">5</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" id="a10" name="a10" value="6" >
                          <label class="form-check-label" for="example-radios-inline2">6</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" id="a10" name="a10" value="7" >
                          <label class="form-check-label" for="example-radios-inline2">7</label>
                        </div>
                        <label class="form-check-label" for="example-radios-inline1">Muy en desacuerdo </label>
                      </div>
                      <BR>
                  </div>

                  <div class="col-mb-12">
                    <br>
                    <label class="form-label">11. El funcionario de Personal demostró interés en atender mi necesidad o solicitud.
                    </label>

                    <div class="space-x-3 text-center">
                      <br>
                        <label class="form-check-label" for="example-radios-inline1">Muy en desacuerdo </label>
                      <div class="form-check form-check-inline">
                        <label class="form-check-label" for="example-radios-inline1">1</label>
                        <input class="form-check-input" type="radio" id="a11" name="a11" value="1" >
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="a11" name="a11" value="2" >
                        <label class="form-check-label" for="example-radios-inline2">2</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="a11" name="a11" value="3" >
                        <label class="form-check-label" for="example-radios-inline1">3</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="a11" name="a11" value="4" >
                        <label class="form-check-label" for="example-radios-inline2">4</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="a11" name="a11" value="5" >
                        <label class="form-check-label" for="example-radios-inline1">5</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="a11" name="a11" value="6" >
                        <label class="form-check-label" for="example-radios-inline2">6</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="a11" name="a11" value="7" >
                        <label class="form-check-label" for="example-radios-inline2">7</label>
                      </div>
                      <label class="form-check-label" for="example-radios-inline1">Muy en desacuerdo </label>
                    </div>
                    <BR>
                </div>

                <div class="col-mb-12">
                  <br>
                  <label class="form-label">12. El funcionario de Personal se tomó el tiempo necesario en atenderme.
                  </label>

                  <div class="space-x-3 text-center">
                    <br>
                      <label class="form-check-label" for="example-radios-inline1">Muy en desacuerdo </label>
                    <div class="form-check form-check-inline">
                      <label class="form-check-label" for="example-radios-inline1">1</label>
                      <input class="form-check-input" type="radio" id="a12" name="a12" value="1" >
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" id="a12" name="a12" value="2" >
                      <label class="form-check-label" for="example-radios-inline2">2</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" id="a12" name="a12" value="3" >
                      <label class="form-check-label" for="example-radios-inline1">3</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" id="a12" name="a12" value="4" >
                      <label class="form-check-label" for="example-radios-inline2">4</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" id="a12" name="a12" value="5" >
                      <label class="form-check-label" for="example-radios-inline1">5</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" id="a12" name="a12" value="6" >
                      <label class="form-check-label" for="example-radios-inline2">6</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" id="a12" name="a12" value="7" >
                      <label class="form-check-label" for="example-radios-inline2">7</label>
                    </div>
                    <label class="form-check-label" for="example-radios-inline1">Muy en desacuerdo </label>
                  </div>
                  <BR>
              </div>

              <div class="col-mb-12">
                <br>
                <label class="form-label">13. El funcionario de Personal se expresa con claridad y me entrega la información adecuada.
                </label>

                <div class="space-x-3 text-center">
                  <br>
                    <label class="form-check-label" for="example-radios-inline1">Muy en desacuerdo </label>
                  <div class="form-check form-check-inline">
                    <label class="form-check-label" for="example-radios-inline1">1</label>
                    <input class="form-check-input" type="radio" id="a13" name="a13" value="1" >
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="a13" name="a13" value="2" >
                    <label class="form-check-label" for="example-radios-inline2">2</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="a13" name="a13" value="3" >
                    <label class="form-check-label" for="example-radios-inline1">3</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="a13" name="a13" value="4" >
                    <label class="form-check-label" for="example-radios-inline2">4</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="a13" name="a13" value="5" >
                    <label class="form-check-label" for="example-radios-inline1">5</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="a13" name="a13" value="6" >
                    <label class="form-check-label" for="example-radios-inline2">6</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="a13" name="a13" value="7" >
                    <label class="form-check-label" for="example-radios-inline2">7</label>
                  </div>
                  <label class="form-check-label" for="example-radios-inline1">Muy en desacuerdo </label>
                </div>
                <BR>
            </div>

            <div class="col-mb-12">
              <br>
              <label class="form-label">14. El tiempo total de espera, desde el momento en que llegué hasta que fuí atendido, fué adecuado.
              </label>

              <div class="space-x-3 text-center">
                <br>
                  <label class="form-check-label" for="example-radios-inline1">Muy en desacuerdo </label>
                <div class="form-check form-check-inline">
                  <label class="form-check-label" for="example-radios-inline1">1</label>
                  <input class="form-check-input" type="radio" id="a14" name="a14" value="1" >
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" id="a14" name="a14" value="2" >
                  <label class="form-check-label" for="example-radios-inline2">2</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" id="a14" name="a14" value="3" >
                  <label class="form-check-label" for="example-radios-inline1">3</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" id="a14" name="a14" value="4" >
                  <label class="form-check-label" for="example-radios-inline2">4</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" id="a14" name="a14" value="5" >
                  <label class="form-check-label" for="example-radios-inline1">5</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" id="a14" name="a14" value="6" >
                  <label class="form-check-label" for="example-radios-inline2">6</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" id="a14" name="a14" value="7" >
                  <label class="form-check-label" for="example-radios-inline2">7</label>
                </div>
                <label class="form-check-label" for="example-radios-inline1">Muy en desacuerdo </label>
              </div>
              <BR>
          </div>

          <div class="col-mb-12">
            <br>
            <label class="form-label">15. En relación a la solución de su trámite o gestión, ¿cumplió sus expectativas?.
            </label>

            <div class="space-x-3 text-center">
              <br>
                <label class="form-check-label" for="example-radios-inline1">Muy en desacuerdo </label>
              <div class="form-check form-check-inline">
                <label class="form-check-label" for="example-radios-inline1">1</label>
                <input class="form-check-input" type="radio" id="a15" name="a15" value="1" >
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="a15" name="a15" value="2" >
                <label class="form-check-label" for="example-radios-inline2">2</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="a15" name="a15" value="3" >
                <label class="form-check-label" for="example-radios-inline1">3</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="a15" name="a15" value="4" >
                <label class="form-check-label" for="example-radios-inline2">4</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="a15" name="a15" value="5" >
                <label class="form-check-label" for="example-radios-inline1">5</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="a15" name="a15" value="6" >
                <label class="form-check-label" for="example-radios-inline2">6</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="a15" name="a15" value="7" >
                <label class="form-check-label" for="example-radios-inline2">7</label>
              </div>
              <label class="form-check-label" for="example-radios-inline1">Muy en desacuerdo </label>
            </div>
            <BR>
        </div>

              <div class="col-mb-12">
                <br>
                <label class="form-label">16. El funcionario del departamento de Personal, domina la materia relacionada con mi trámite o gestión.
                </label>

                <div class="space-x-3 text-center">
                  <br>
                    <label class="form-check-label" for="example-radios-inline1">Muy en desacuerdo </label>
                  <div class="form-check form-check-inline">
                    <label class="form-check-label" for="example-radios-inline1">1</label>
                    <input class="form-check-input" type="radio" id="a16" name="a16" value="1" >
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="a16" name="a16" value="2" >
                    <label class="form-check-label" for="example-radios-inline2">2</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="a16" name="a16" value="3" >
                    <label class="form-check-label" for="example-radios-inline1">3</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="a16" name="a16" value="4" >
                    <label class="form-check-label" for="example-radios-inline2">4</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="a16" name="a16" value="5" >
                    <label class="form-check-label" for="example-radios-inline1">5</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="a16" name="a16" value="6" >
                    <label class="form-check-label" for="example-radios-inline2">6</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="a16" name="a16" value="7" >
                    <label class="form-check-label" for="example-radios-inline2">7</label>
                  </div>
                  <label class="form-check-label" for="example-radios-inline1">Muy en desacuerdo </label>
                </div>
                <BR>
            </div>

            <div class="col-mb-12">
              <br>
              <label class="form-label">17. El funcionario de Personal que me atendió, es confiable.
              </label>

              <div class="space-x-3 text-center">
                <br>
                  <label class="form-check-label" for="example-radios-inline1">Muy en desacuerdo </label>
                <div class="form-check form-check-inline">
                  <label class="form-check-label" for="example-radios-inline1">1</label>
                  <input class="form-check-input" type="radio" id="a17" name="a17" value="1" >
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" id="a17" name="a17" value="2" >
                  <label class="form-check-label" for="example-radios-inline2">2</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" id="a17" name="a17" value="3" >
                  <label class="form-check-label" for="example-radios-inline1">3</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" id="a17" name="a17" value="4" >
                  <label class="form-check-label" for="example-radios-inline2">4</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" id="a17" name="a17" value="5" >
                  <label class="form-check-label" for="example-radios-inline1">5</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" id="a17" name="a17" value="6" >
                  <label class="form-check-label" for="example-radios-inline2">6</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" id="a17" name="a17" value="7" >
                  <label class="form-check-label" for="example-radios-inline2">7</label>
                </div>
                <label class="form-check-label" for="example-radios-inline1">Muy en desacuerdo </label>
              </div>
              <BR>
          </div>

          <div class="col-mb-12">
            <br>
            <label class="form-label">18. En general, considerando todas las variables anteriores, como evaluaría la experiencia de su visita al área de personal al cual se dirigió.
            </label>

            <div class="space-x-3 text-center">
              <br>
                <label class="form-check-label" for="example-radios-inline1">Muy en desacuerdo </label>
              <div class="form-check form-check-inline">
                <label class="form-check-label" for="example-radios-inline1">1</label>
                <input class="form-check-input" type="radio" id="a18" name="a18" value="1" >
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="a18" name="a18" value="2" >
                <label class="form-check-label" for="example-radios-inline2">2</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="a18" name="a18" value="3" >
                <label class="form-check-label" for="example-radios-inline1">3</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="a18" name="a18" value="4" >
                <label class="form-check-label" for="example-radios-inline2">4</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="a18" name="a18" value="5" >
                <label class="form-check-label" for="example-radios-inline1">5</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="a18" name="a18" value="6" >
                <label class="form-check-label" for="example-radios-inline2">6</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="a18" name="a18" value="7" >
                <label class="form-check-label" for="example-radios-inline2">7</label>
              </div>
              <label class="form-check-label" for="example-radios-inline1">Muy en desacuerdo </label>
            </div>
            <BR>
        </div>


          <div class="mb-12">
            <br>
            <label class="form-label">19. Siente que sufrió algún tipo de discriminación de cualquier tipo. (Político, religioso, de genero, físico, etc.)</label>
            <div class="space-y-2">
              <br>
              <div class="form-check">
                <input class="form-check-input" type="radio" id="a19" name="a19" value="SI" checked="">
                <label class="form-check-label" for="example-radios-default1">SI</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" id="a19" name="a19" value="NO">
                <label class="form-check-label" for="example-radios-default2">NO</label>
              </div>
            </div>
            <BR>
          </div>

          <div class="col-md-12">
            <br>
            <label for="lblPlace" class="form-label">20. Si su respuesta anterior fue SI, indique por que motivo se sintió discriminado.</label>
            <textarea class="form-control" id="a20" name="a20" style="height: 70px" placeholder="Escriba aquí"></textarea>
            <BR>
        </div>


        <div class="col-mb-12">
          <br>
          <label class="form-label">21. El Área de Personal es confiable.
          </label>

          <div class="space-x-3 text-center">
            <br>
              <label class="form-check-label" for="example-radios-inline1">Muy en desacuerdo </label>
            <div class="form-check form-check-inline">
              <label class="form-check-label" for="example-radios-inline1">1</label>
              <input class="form-check-input" type="radio" id="a21" name="a21" value="1" >
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" id="a21" name="a21" value="2" >
              <label class="form-check-label" for="example-radios-inline2">2</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" id="a21" name="a21" value="3" >
              <label class="form-check-label" for="example-radios-inline1">3</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" id="a21" name="a21" value="4" >
              <label class="form-check-label" for="example-radios-inline2">4</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" id="a21" name="a21" value="5" >
              <label class="form-check-label" for="example-radios-inline1">5</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" id="a21" name="a21" value="6" >
              <label class="form-check-label" for="example-radios-inline2">6</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" id="a21" name="a21" value="7" >
              <label class="form-check-label" for="example-radios-inline2">7</label>
            </div>
            <label class="form-check-label" for="example-radios-inline1">Muy en desacuerdo </label>
          </div>
          <BR>
        </div>

        <div class="col-mb-12">
          <br>
          <label class="form-label">22. El Área de Personal es eficiente.
          </label>

          <div class="space-x-3 text-center">
            <br>
              <label class="form-check-label" for="example-radios-inline1">Muy en desacuerdo </label>
            <div class="form-check form-check-inline">
              <label class="form-check-label" for="example-radios-inline1">1</label>
              <input class="form-check-input" type="radio" id="a22" name="a22" value="1" >
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" id="a22" name="a22" value="2" >
              <label class="form-check-label" for="example-radios-inline2">2</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" id="a22" name="a22" value="3" >
              <label class="form-check-label" for="example-radios-inline1">3</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" id="a22" name="a22" value="4" >
              <label class="form-check-label" for="example-radios-inline2">4</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" id="a22" name="a22" value="5" >
              <label class="form-check-label" for="example-radios-inline1">5</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" id="a22" name="a22" value="6" >
              <label class="form-check-label" for="example-radios-inline2">6</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" id="a22" name="a22" value="7" >
              <label class="form-check-label" for="example-radios-inline2">7</label>
            </div>
            <label class="form-check-label" for="example-radios-inline1">Muy en desacuerdo </label>
          </div>
          <BR>
        </div>

        <div class="col-mb-12">
          <br>
          <label class="form-label">23. El Área de Personal es cercana.
          </label>

          <div class="space-x-3 text-center">
            <br>
              <label class="form-check-label" for="example-radios-inline1">Muy en desacuerdo </label>
            <div class="form-check form-check-inline">
              <label class="form-check-label" for="example-radios-inline1">1</label>
              <input class="form-check-input" type="radio" id="a23" name="a23" value="1" >
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" id="a23" name="a23" value="2" >
              <label class="form-check-label" for="example-radios-inline2">2</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" id="a23" name="a23" value="3" >
              <label class="form-check-label" for="example-radios-inline1">3</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" id="a23" name="a23" value="4" >
              <label class="form-check-label" for="example-radios-inline2">4</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" id="a23" name="a23" value="5" >
              <label class="form-check-label" for="example-radios-inline1">5</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" id="a23" name="a23" value="6" >
              <label class="form-check-label" for="example-radios-inline2">6</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" id="a23" name="a23" value="7" >
              <label class="form-check-label" for="example-radios-inline2">7</label>
            </div>
            <label class="form-check-label" for="example-radios-inline1">Muy en desacuerdo </label>
          </div>
          <BR>
        </div>

        <div class="col-mb-12">
          <br>
          <label class="form-label">24. En general, considerando todas las variables anteriores, y a todas las secciones y áreas en una escala de 1 a 7, cuan satisfactoria fue la visita realizada.
          </label>

          <div class="space-x-3 text-center">
            <br>
              <label class="form-check-label" for="example-radios-inline1">Muy en desacuerdo </label>
            <div class="form-check form-check-inline">
              <label class="form-check-label" for="example-radios-inline1">1</label>
              <input class="form-check-input" type="radio" id="a24" name="a24" value="1" >
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" id="a24" name="a24" value="2" >
              <label class="form-check-label" for="example-radios-inline2">2</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" id="a24" name="a24" value="3" >
              <label class="form-check-label" for="example-radios-inline1">3</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" id="a24" name="a24" value="4" >
              <label class="form-check-label" for="example-radios-inline2">4</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" id="a24" name="a24" value="5" >
              <label class="form-check-label" for="example-radios-inline1">5</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" id="a24" name="a24" value="6" >
              <label class="form-check-label" for="example-radios-inline2">6</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" id="a24" name="a24" value="7" >
              <label class="form-check-label" for="example-radios-inline2">7</label>
            </div>
            <label class="form-check-label" for="example-radios-inline1">Muy en desacuerdo </label>
          </div>
          <BR>
        </div>

        <div class="col-md-12">
          <br>
          <label for="lblPlace" class="form-label">25. Por último, tiene algún comentario respecto a la última visita realizada al Departamento de Personal y/o a Subdirección de Personal, que nos ayude al mejorar.</label>
          <textarea class="form-control" id="a25" name="a25" style="height: 70px" placeholder="Escriba aquí"></textarea>
        </div>

              <div class="content py-12 text-center">
                  <button type="button" class="btn btn-hero btn-primary">Enviar</button>
                  <button type="button" class="btn btn-hero btn-danger">Cancelar</button>
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
