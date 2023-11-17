@extends('layouts.backend')

@section('content')
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <div>
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Detalle de Encuestas</h1>
                </div>
                <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Inicio</li>
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active" aria-current="page">Detalle</li>
                    </ol>
                </nav>
            </div>
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">

            </div>
        </div>
    </div>
    <div class="content">
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                evaluar boton
            </div>

            <div class="row">

                  <div class="col-md-4 col-xl-4">
                    <div class="block block-rounded" >
                      <div class="block-content block-content-full bg-white text-center">
                      <div style="height: 100px" class="text-center"><h3>{{ $chart->options['chart_title'] }}</h3></div>
                      <div class="d-flex justify-content-center align-items-center">
                        <div class="justify-content-center align-items-center">
                            <div class="py-3" >
                                <!-- Lines Chart Container -->
                                {!! $chart->renderHtml() !!}
                              </div>
                        </div>
                    </div>
                      </div>
                      <div class="block-content block-content-full">
                        <table class="table table-borderless table-striped table-hover">
                          <tbody>
                            <tr>
                              <td class="text-center" style="width: 40px;">01</td>
                              <td>
                                <strong>Planta</strong>
                              </td>
                              <td class="text-center" style="width: 40px;">
                                <strong class="text-success">9.6</strong>
                              </td>
                            </tr>
                            <tr>
                              <td class="text-center">02</td>
                              <td>
                                <strong>Contrata</strong>
                              </td>
                              <td class="text-center">
                                <strong class="text-success">9.6</strong>
                              </td>
                            </tr>
                            <tr>
                              <td class="text-center">03</td>
                              <td>
                                <strong>Código del Trabajo</strong>
                              </td>
                              <td class="text-center">
                                <strong class="text-success">9.6</strong>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                        <div class="text-center">
                          <a class="btn btn-sm btn-primary" href="javascript:void(0)">
                            <i class="fa fa-eye me-1 opacity-50"></i> Show All..
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4 col-xl-4">
                    <div class="block block-rounded">
                      <div class="block-content block-content-full bg-white text-center">
                        <div style="height: 100px" class="text-center"><h3>{{ $chart1->options['chart_title'] }}</h3></div>
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="justify-content-center align-items-center">
                                <div class="py-3" >
                                    <!-- Lines Chart Container -->
                                    {!! $chart1->renderHtml() !!}
                                  </div>
                            </div>
                        </div>

                      </div>
                      <div class="block-content block-content-full">
                        <table class="table table-borderless table-striped table-hover">
                          <tbody>
                            <tr>
                              <td class="text-center" style="width: 40px;">01</td>
                              <td>
                                <strong>Masculino</strong>
                              </td>
                              <td class="text-center" style="width: 60px;">
                                <strong class="text-success">10%</strong>
                              </td>
                            </tr>
                            <tr>
                              <td class="text-center">02</td>
                              <td>
                                <strong>Femenino</strong>
                              </td>
                              <td class="text-center">
                                <strong class="text-success">9.6</strong>
                              </td>
                            </tr>
                            <tr>
                              <td class="text-center">03</td>
                              <td>
                                <strong>Otro</strong>
                              </td>
                              <td class="text-center">
                                <strong class="text-success">9.6</strong>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                        <div class="text-center">
                          <a class="btn btn-sm btn-primary" href="javascript:void(0)">
                            <i class="fa fa-eye me-1 opacity-50"></i> Show All..
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4 col-xl-4">
                    <div class="block block-rounded">
                      <div class="block-content block-content-full bg-white text-center">
                        <div style="height: 100px" class="text-center"><h3>{{ $chart2->options['chart_title'] }}</h3></div>
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="justify-content-center align-items-center">
                                <div class="py-3">
                                    <!-- Lines Chart Container -->
                                    {!! $chart2->renderHtml() !!}
                                  </div>
                            </div>
                        </div>
                      </div>
                      <div class="block-content block-content-full">
                        <table class="table table-borderless table-striped table-hover">
                          <tbody>
                            <tr>
                              <td class="text-center" style="width: 40px;">01</td>
                              <td>
                                <strong>Masculino</strong>
                              </td>
                              <td class="text-center" style="width: 60px;">
                                <strong class="text-success">10%</strong>
                              </td>
                            </tr>
                            <tr>
                              <td class="text-center">02</td>
                              <td>
                                <strong>Femenino</strong>
                              </td>
                              <td class="text-center">
                                <strong class="text-success">9.6</strong>
                              </td>
                            </tr>
                            <tr>
                              <td class="text-center">03</td>
                              <td>
                                <strong>Otro</strong>
                              </td>
                              <td class="text-center">
                                <strong class="text-success">9.6</strong>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                        <div class="text-center">
                          <a class="btn btn-sm btn-primary" href="javascript:void(0)">
                            <i class="fa fa-eye me-1 opacity-50"></i> Show All..
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4 col-xl-4">
                    <div class="block block-rounded">
                      <div class="block-content block-content-full bg-white text-center">
                        <div style="height: 150px" class="text-center"><h5>Considera que la atención recibida del funcionario de Personal, fue amable y cordial. Un trato amable y cordial implica saludar, tratar con respeto, orientar al funcionario, y a su vez despedirse correctamente</h5></div>
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="justify-content-center align-items-center">
                                <div class="py-3">
                                    <!-- Lines Chart Container -->
                                    {!! $chart3->renderHtml() !!}
                                  </div>
                            </div>
                        </div>

                      </div>
                    </div>
                  </div>






            </div>
        </div>
    </div>
@endsection

@section('javascript1')
{!! $chart->renderChartJsLibrary() !!}
{!! $chart->renderJs() !!}
{!! $chart1->renderJs() !!}
{!! $chart2->renderJs() !!}
{!! $chart3->renderJs() !!}
@endsection



