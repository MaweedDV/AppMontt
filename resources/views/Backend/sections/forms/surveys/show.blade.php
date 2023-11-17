@extends('layouts.backend')

@section('content')
    <div class="bg-body-light">
        <div class="content content-full text">
            <div class="align-items-sm-center text-center">
                <div>
                    {{-- centrar etiquetas --}}
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">{{ $survey->name_survey }}</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="content content-boxed">
            <!-- Invoice -->
            <div class="block block-rounded">
              <div class="block-header block-header-default">
                <h3 class="block-title">Encuesta N° {{ $survey->id }}</h3>
                <div class="block-options">
                  <!-- Print Page functionality is initialized dmPrint() -->
                  <button type="button" class="btn-block-option" onclick="Dashmix.helpers('dm-print');">
                    <i class="si si-printer me-1"></i> Print Invoice
                  </button>
                </div>
              </div>
              <div class="block-content">
                <div class="p-sm-4 p-xl-7">
                  <!-- Invoice Info -->
                  <div class="row mb-5">
                    <!-- Company Info -->
                    <div class="col-6">
                      <p class="h3">Datos de quién evalúa</p>
                      <address>
                        Calidad Juridica: {{ $survey->juridic_quality }}<br>
                        Escalafón: {{ $survey->escale }}<br>
                        Años de antigüedad: {{ $survey->years_antiquity }}<br>
                        Rango de edad: {{ $survey->age_range }}<br>
                        Sexo: {{ $survey->genre }}<br>
                        Lugar de Trabajo: {{ $survey->place_job }}
                      </address>
                    </div>
                    <!-- END Company Info -->

                    <!-- Client Info -->
                    <div class="col-6 text-end">
                      <p class="h3">Datos Generales</p>
                      <address>
                        Fecha de Atención: {{ $survey->date_attention}}<br>
                        Lugar visitado: {{ $survey->a8 }}<br>
                        Trámite realizado: {{ $survey->a9 }}<br>
                      </address>
                    </div>
                    <!-- END Client Info -->
                  </div>
                  <!-- END Invoice Info -->

                  <!-- Table -->
                  <div class="table-responsive push">
                    <table class="table table-bordered">
                      <thead class="bg-body">
                        <tr>
                          <th class="text-center" style="width: 60px;"></th>
                          <th>Pregunta</th>
                          <th class="text-center" style="width: 90px;">Respuesta</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="text-center">1</td>
                          <td>
                            <p class="fw-semibold mb-1">Logo Creation</p>
                            <div class="text-muted">Logo and business cards design</div>
                          </td>
                          <td class="text-center">
                            <span class="badge rounded-pill bg-primary">1</span>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-center">2</td>
                          <td>
                            <p class="fw-semibold mb-1">Online Store Design &amp; Development</p>
                            <div class="text-muted">Design/Development for all popular modern browsers</div>
                          </td>
                          <td class="text-center">
                            <span class="badge rounded-pill bg-primary">1</span>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-center">3</td>
                          <td>
                            <p class="fw-semibold mb-1">App Design</p>
                            <div class="text-muted">Promotional mobile application</div>
                          </td>
                          <td class="text-center">
                            <span class="badge rounded-pill bg-primary">1</span>
                          </td>
                        </tr>
                        <tr>
                      </tbody>
                    </table>
                  </div>
                  <!-- END Table -->

                  <!-- Footer -->
                  <p class="text-muted text-center my-5">
                    Thank you for doing business with us.
                  </p>
                  <!-- END Footer -->
                </div>
              </div>
            </div>
            <!-- END Invoice -->
          </div>
    </div>
@endsection
