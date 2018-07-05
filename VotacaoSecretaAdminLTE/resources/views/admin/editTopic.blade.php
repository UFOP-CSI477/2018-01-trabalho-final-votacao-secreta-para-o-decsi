@extends('adminlte::page')
@section('content')
<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Alterar</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->


            <form  method="post" role="form" action="{{ route('temas.update'  , [ 'topic' => $topic->id ])}} ">
                <div class="box-body">
                    <div class="form-group">
                        @csrf
                        @method('PATCH')
                        <input type="hidden" class="form-control"  name="user_id" value="{{Auth::user()->id}}">
                        <label for="title">Titulo</label>
                        <input type="text" class="form-control" id="title" name="title" value={{$topic->title}} required>
                    </div>

                    <!-- textarea -->
                    <div class="form-group">
                        <label>Descrição</label>
                        <textarea class="form-control" rows="3" name="description" maxlength="250" required>{{$topic->description}}</textarea>
                    </div>

                    <div class="form-group">
                        <label>Visualização</label>
                        <div class="radio">
                            <label>
                                <input type="radio" name="visible" id="visible" value="0" {{ $topic->visible === 0 ? "checked" : ""  }}>
                                Não visivel
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="visible" id="visible" value="1"  {{ $topic->visible === 1 ? "checked" : ""  }}>
                                Visivel para todos
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="visible" id="visible" value="2"  {{ $topic->visible === 2 ? "checked" : ""  }}>
                                Visivel apenas para cadastrados
                            </label>
                        </div>
                    </div>






                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary btn-lg">Alterar</button>
                </div>
            </form>

        </div>

        @stop