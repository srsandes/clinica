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
        <div id="breadcrumb"> <a href="index.html" title="Ir para página inicial" class="tip-bottom"><i class="icon-home"></i> Página principal</a> <a href="#" class="tip-bottom">Paciente</a> <a href="#" class="current">Cadastrar</a> </div>
        <h1>Cadastrar Paciente</h1>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                        <h5>Dados Pessoais</h5>
                    </div>
                    <div class="widget-content nopadding">
                        
                        <form action="#" method="get" class="form-horizontal">
                            <div class="control-group">
                                <label class="control-label">Nome Completo:</label>
                                <div class="controls">
                                    <input type="text" class="span3" placeholder="Digite.." />
                                </div>
                            </div>
                            
                            <div class="control-group">
                                <label class="control-label">CPF:</label>
                                <div class="controls">
                                    <input type="text" class="span3" placeholder="Digite.." />
                                </div>
                            </div>
                            
                            <div class="control-group">
                                <label class="control-label">RG:</label>
                                <div class="controls">
                                    <input type="text" class="span3" placeholder="Digite.." />
                                </div>
                            </div>
                            
                            <div class="control-group">
                                <label class="control-label">Data de Nascimento:</label>
                                <div class="controls">
                                    <input type="text" class="span3" placeholder="Digite.." />
                                </div>
                            </div>
                            
                            
                        
                    </div>
                </div>
                
            </div>
            
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                            <h5>Contatos e Endereço</h5>
                        </div>
                        <div class="widget-content nopadding form-horizontal">
                            
                            
                                <div class="control-group">
                                    <label class="control-label">Telefone Fixo:</label>
                                    <div class="controls">
                                        <input type="text" class="span3" placeholder="Digite.." />
                                    </div>
                                </div>
                                
                                <div class="control-group">
                                    <label class="control-label">Telefone Celular:</label>
                                    <div class="controls">
                                        <input type="text" class="span3" placeholder="Digite.." />
                                    </div>
                                </div>
                                
                                <div class="control-group">
                                    <label class="control-label">E-mail:</label>
                                    <div class="controls">
                                        <input type="text" class="span3" placeholder="Digite.." />
                                    </div>
                                </div>
                                
                                <div class="control-group">
                                    <label class="control-label">CEP:</label>
                                    <div class="controls">
                                        <input type="text" class="span3" placeholder="Digite.." />
                                    </div>
                                </div>
                                
                                
                                
                                
                                <div class="control-group">
                                    <label class="control-label">Nº da casa ou apto:</label>
                                    <div class="controls">
                                        <input type="text" class="span3" placeholder="Digite.." />
                                    </div>
                                </div>
                                
                                <div class="control-group">
                                    <label class="control-label">Complemento (opcional):</label>
                                    <div class="controls">
                                        <input type="text" class="span3" placeholder="Digite.." />
                                    </div>
                                </div>
                                
                                <div class="control-group">
                                    <label class="control-label">Bairro:</label>
                                    <div class="controls">
                                        <input type="text" class="span3" placeholder="Digite.." />
                                    </div>
                                </div>
                                
                                <div class="control-group">
                                    <label class="control-label">Cidade:</label>
                                    <div class="controls">
                                        <input type="text" class="span3" placeholder="Digite.." />
                                    </div>
                                </div>
                                
                                <div class="control-group">
                                    <label class="control-label">UF:</label>
                                    <div class="controls">
                                        <input type="text" class="span3" placeholder="Digite.." />
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
</div>

@endsection