@extends('layouts.backendSurvey')

@section('content')
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <div>
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Formularios</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
      <div class="row items-push">
        <div class="col-md-6">
            <a class="block block-rounded text-center block-link-pop" href="{{route('form_rsf.create')}}">
              <div class="block-header block-header-default" style="align-content: center">
                <h2>Sugerencias, Reclamos y/o Felicitaciones</h2>
                {{-- centrar etiqueta de titulo tarjeta --}}
              </div>
              <div class="block-content">
                <div class="block-content block-content-full ">
                    <div class="d-flex justify-content-center align-items-center">
                      <div class="justify-content-center align-items-center">
                        <h1><i class="fa fa-6x fa-book-open text-primary"></i></h1><br>
                        <H3>Ingrese Aquí</H3>
                      </div>
                    </div>
                </div>
                <p>Formulario para ingresar felicitaciones, reclamos o sugerencias para la mejora de gestión administrativa </p>
              </div>
            </a>
        </div>

        <div class="col-md-6">
            <a class="block block-rounded text-center block-link-pop" href="{{route('surveysFront.create')}}">
              <div class="block-header block-header-default">
                <h2>Encuesta de satisfacción</h2>
              </div>
              <div class="block-content">
                <div class="block-content block-content-full ">
                    <div class="d-flex justify-content-center align-items-center">
                      <div class="justify-content-center align-items-center">
                        <h1><i class="fa fa-6x fa-clipboard-list text-primary"></i></h1><br>
                        <H3>Ingrese Aquí</h3>
                      </div>
                    </div>
                </div>
                <p>Encuesta de satisfaccion realizada por funcionarios Municipales</p>
              </div>
            </a>
        </div>




      </div>
    </div>


@endsection














