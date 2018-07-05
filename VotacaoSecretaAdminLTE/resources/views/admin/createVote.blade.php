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
            <!-- /.box-header -->
            <!-- form start -->
        
        
          <form  method="post" role="form" action="{{ route('votos.store')}} ">
            @csrf
            <div class="input_fields_wrap">
                <button class="add_field_button">Add More Fields</button>
                <div><input type="text" name="votos[]"></div>
            </div>
       
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
            
          </div>
          
@stop