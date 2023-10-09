@extends('layouts.backendSurvey')

@section('content')
    <div class="bg-body-light">
        <div class="content content-full text">
            <div class="align-items-sm-center text-center">
                <div>
                    {{-- centrar etiquetas --}}
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Formulario de Reclamos, Sugerencias y/o Felicitaciones</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
      <div class="row items-push">
        <form class="row g-3" method="POST" action="{{route('form_rsf.store')}}" enctype="multipart/form-data">
            @csrf

            <div class="col-md-4">
              <label for="lblName" class="form-label">Nombre Completo:</label>
              <input type="text" class="form-control" id="txtName" name="txtName">
            </div>
            <div class="col-md-4">
              <label for="lblDate" class="form-label">Fecha de Atención</label>
              <input type="date" class="form-control" id="txtDate" name="txtDate">
            </div>
            <div class="col-md-4">
              <label for="lblHour" class="form-label">Hora de Atención</label>
              <input type="time" class="form-control" id="txtHour" name="txtHour" placeholder="">
            </div>
            <div class="col-md-4">
                <label for="lblEmail" class="form-label">Correo Electrónico:</label>
                <input type="text" class="form-control" id="txtEmail" name="txtEmail">
              </div>
              <div class="col-md-4">
                <label for="lblContactNumber" class="form-label">Numero de Telefono:</label>
                <input type="text" class="form-control" id="txtPhone" name="txtPhone">
              </div>
              <div class="col-md-4">
                <label for="lblAddress" class="form-label">Domicilio:</label>
                <input type="text" class="form-control" id="txtAddress" name="txtAddress">
              </div>
            <div class="col-md-4">
              <label for="lblPlace" class="form-label">Dirección o Unidad en que Trabaja:</label>
              <select class="form-select" id="txtPlace_Job" name="txtPlace_Job">
                <option selected="">Seleccione una opción</option>
                <option value="Administracion Municipal">Administracion Municipal</option>
                <option value="Alcaldia">Alcaldia</option>
                <option value="Asesoria Juridica">Asesoria Juridica</option>
                <option value="Direccion de Administración y Finanzas">Direccion de Administración y Finanzas</option>
                <option value="Direccion de Desarrollo Comunitario">Direccion de Desarrollo Comunitario</option>
                <option value="Direccion de Medio Ambiente Aseo y Ornato (Dimao)">Direccion de Medio Ambiente Aseo y Ornato (Dimao)</option>
                <option value="Direccion de Transito">Direccion de Transito</option>
                <option value="Direccion de Operaciones">Direccion de Operaciones</option>
                <option value="Direccion de Obras Municipales (Dom)">Direccion de Obras Municipales (Dom)</option>
                <option value="Direccion de Control">Direccion de Control</option>
                <option value="Direccion de Seguridad Publica">Direccion de Seguridad Publica</option>
                <option value="Direccion de Turismo">Direccion de Turismo</option>
                <option value="Direccion de Servicios Traspasados">Direccion de Servicios Traspasados</option>
                <option value="Oficina Territorial Alerce">Oficina Territorial Alerce</option>
                <option value="Oficina Territorial Mirasol">Oficina Territorial Mirasol</option>
                <option value="Oficina Territorial Ruta Tepual">Oficina Territorial Ruta Tepual</option>
                <option value="Oficina Territorial Rural">Oficina Territorial Rural</option>
                <option value="Primer Juzgado">Primer Juzgado</option>
                <option value="Segundo Juzgado">Segundo Juzgado</option>
                <option value="Tercer Juzgado">Tercer Juzgado</option>
                <option value="Secretaria Municipal">Secretaria Municipal</option>
                <option value="Secretaria Comunal de Planificacion Secplan">Secretaria Comunal de Planificacion Secplan</option>
              </select>
            </div>
            <div class="col-md-4">
                <label for="lblProcedure" class="form-label">Tipo de Trámite:</label>
                <select class="form-select" id="txtType_Procedure" name="txtType_Procedure">
                  <option selected="">Seleccione una opción</option>
                  <option value="Reclamo">Reclamo</option>
                  <option value="Sugerencia">Sugerencia</option>
                  <option value="Felicitacion">Felicitacion</option>
                </select>
              </div>
              <div class="col-md-4">
                <label for="lblPlace" class="form-label">Seleccione Area:</label>
                <select class="form-select" id="txtArea_attention" name="txtArea_attention">
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
              </div>
                <div class="content py-6">
                    <label class="form-label" for="example-textarea-input-alt">Observación:</label>
                    <textarea class="form-control" id="txtObservation" name="txtObservation" style="height: 200px" placeholder="Escriba aquí"></textarea>
                    <br>
                    <button type="submit" class="btn btn-hero btn-primary" >Enviar</button>
                    <button type="button" class="btn btn-hero btn-danger">Cancelar</button>
                </div>
        </form>
      </div>
    </div>


@endsection












