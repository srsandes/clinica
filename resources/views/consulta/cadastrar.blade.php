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
        <div id="breadcrumb"> <a href="index.html" title="Ir para página inicial" class="tip-bottom"><i class="icon-home"></i> Página principal</a> <a href="#" class="tip-bottom">Consulta</a> <a href="#" class="current">Cadastrar</a> </div>
        <h1>Cadastrar Consulta</h1>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                        <h5>Dados da Consulta</h5>
                    </div>
                    <div class="widget-content nopadding">

                        @if (session('sucessful') == "s")
                        <div class="alert alert-success alert-block"> <a class="close" data-dismiss="alert" href="#">×</a>
                            <h4 class="alert-heading">Success!</h4>
                            Tou're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. </div>  
                        @endif
                            
                        @if (session('sucessful') == 'n')
                        <div class="alert alert-error alert-block"> <a class="close" data-dismiss="alert" href="#">×</a>
                            <h4 class="alert-heading">Error!</h4>
                            You're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. </div>  
                        @endif

                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Erro(s):</strong>
                            @foreach ($errors->all() as $e)
                            <p>{{$e}}</p>
                            @endforeach
                        </div>@endif

                    <form action="{{route ('cadastrar.consulta')}}" method="post" class="form-horizontal">
                        @csrf
                            <div class="control-group">
                                <label class="control-label">Nome do Paciente:</label>
                                <div class="controls">
                                    <input type="text" name="nome_paciente" class="span3" placeholder="Digite.." />
                                </div>
                            </div>
                            
                            <div class="control-group">
                                <label class="control-label">Nome do Procedimento:</label>
                                <div class="controls">
                                    <input type="text" name="nome_procedimento" class="span3" placeholder="Digite.." />
                                </div>
                            </div>
                            
                            <div class="control-group">
                                <label class="control-label">Valor:</label>
                                <div class="controls">
                                    <input type="text" name="valor" class="span3" placeholder="Digite.." />
                                </div>
                            </div>
                            
                            <div class="control-group">
                                <label class="control-label">Data de realização:</label>
                                <div class="controls">
                                    <input type="text" name="dt_realizacao" class="span3" placeholder="Digite.." />
                                </div>
                            </div>

                            <div class="form-actions">
                                    <button type="submit" class="btn btn-success">Cadastrar</button>
                                </div>
                            
                    </form>    
                        
                    </div>
                </div>
                
            </div>
            
            
        </div>
        
        
        
        
        
    </div>
</div>

@endsection