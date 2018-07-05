@extends('adminlte::page')
@section('content')
<div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Cadastrar Tema</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
        
        
          <form  method="post" role="form" action="{{ route('temas.store')}} " enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                    @csrf
                    <input type="hidden" class="form-control"  name="user_id" value="{{Auth::user()->id}}">
                  <label for="title">Titulo</label>
                  <input type="text" class="form-control" id="title" name="title" placeholder="Exemplo: Votação do Orçamento 2019" required>
                </div>

                 <!-- textarea -->
                 <div class="form-group">
                  <label>Descrição</label>
                  <textarea class="form-control" rows="3" name="description" maxlength="250" placeholder="Descrição ..." required></textarea>
                </div>
                
                <div class="form-group">
                <label>Visualização</label>
                  <div class="radio">
                    <label>
                    <input type="radio" name="visible"  value="0" checked>
                    Não visivel
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                    <input type="radio" name="visible" value="1">
                      Visivel para todos
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="visible"  value="2">
                      Visivel apenas para cadastrados
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label for="document">Anexe um arquivo</label>
                  <input type="file" id="document" name="document" required>
                  <p class="help-block">Selecione um documento que descreve o tema.</p>
                </div>
             
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-success btn-lg">Adicionar</button>
              </div>
            </form>
            
          </div>
          
@stop