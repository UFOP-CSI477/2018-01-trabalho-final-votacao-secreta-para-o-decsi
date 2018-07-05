@extends('adminlte::page')
@section('content')
<div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Cadastrar Opções de Voto</h3>
        </div>

        <form  method="post" role="form" action="{{ route('votos.store')}} ">
            @csrf
            <div class="box-body">
            <input type="hidden" name="topic_id" value="{{$topic->id}}">
                  <div class="form-group input_fields_wrap ">
                    <button class="add_field_button btn btn-success">Adicionar Campo de Opção</button><br>
                    <br><label for="opcao">Opção 1</label>
                    <div><input type="text" name="votos[]" class="form-control" required></div>
                  </div>
                  
              <div class="box-footer">
                <button type="submit" class="btn btn-primary btn-lg">Cadastrar</button>
              </div>
        </form>

    </div>
@stop