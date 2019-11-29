@extends('template')

@section('conteudo_principal')


@push('script')
<link rel="stylesheet" href="{{asset('assets/css/colorpicker.css')}}" />
<link rel="stylesheet" href="{{asset('assets/css/datepicker.css')}}" />
<link rel="stylesheet" href="{{asset('assets/css/uniform.css')}}" />
<link rel="stylesheet" href="{{asset('assets/css/select2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/css/matrix-style.css')}}" />
<link rel="stylesheet" href="{{asset('assets/css/matrix-media.css')}}" />
<link rel="stylesheet" href="{{asset('assets/css/bootstrap-wysihtml5.css')}}" />
<link href="{{asset('assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
@endpush



<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="index.html" title="Ir para página inicial" class="tip-bottom"><i class="icon-home"></i> Página principal</a> <a href="#" class="tip-bottom">Consulta</a> <a href="#" class="current">Pesquisar</a> </div>
        <h1>Pesquisar Consulta</h1>
    </div>
    <div class="container-fluid">
        
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                        <h5>Dados da Consulta</h5>
                    </div>
                    <div class="widget-content nopadding">

                            <table class="table table-bordered data-table">
                                    <thead>
                                      <tr>
                                        <th>Nome do Paciente</th>
                                        <th>Nome do Procedimento</th>
                                        <th>Valor</th>
                                        <th>Data de realização</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      
                                      
                                      <tr class="gradeC">
                                        <td>Misc</td>
                                        <td>PSP browser</td>
                                        <td>PSP</td>
                                        <td class="center">-</td>
                                      </tr>
                                      <tr class="gradeU">
                                        <td>Other browsers</td>
                                        <td>All others</td>
                                        <td>-</td>
                                        <td class="center">-</td>
                                      </tr>
                                    </tbody>
                                  </table>
                        
                    </div>
                </div>
                
            </div>
            
           
        </div>
        
        
        
        
        
    </div>
</div>

@endsection