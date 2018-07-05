@extends('adminlte::page')
@section('content')

<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        @if($topic->jaVotou( Auth::user()->id))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-check"></i>{{ Auth::user()->name }}</h4>
            Você participou dessa votação.
        </div>
        @endif
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">{{$topic->title}}</h3>
                <div class="box-tools">
                </div>
            </div>
            <table class="table">


                <tr>
                    <th >Criador</th>
                    <td>{{  $topic->secretario->name }}</td>
                </tr>
                <tr>
                    <th>Titulo</th>
                    <td>{{  $topic->title }}</td>
                </tr>
                <tr>
                    <th>Descrição</th>
                    <td><textarea class="form-control" rows="4" name="description"  placeholder="Enter ..." disabled> {{  $topic->description }}</textarea>
                    </td>
                </tr>
                <tr>
                    <th>Documento Descritivo</th><td>
                        @if($topic->document != '')
                        <a href="{{url('storage/topicos/'.$topic->title.".pdf")}}">Download</a>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>Visualização</th>
                </tr>

            </table>   

        </div>

        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Opções de Voto</h3>

            </div><!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered">

                    <tr>
                        <th>Opção</th>
                        <th width='20%'></th>

                    </tr>
                    @foreach ($topic->opcoes()->get() as $item)
                    <tr>
                        <td >{{$item->option}}</td>
                    </tr>
                    @endforeach
                </table>   
            </div><!-- /.box-body -->
        </div><!-- /.box -->
        <div class="box box-warning ">
            <div class="box-header">
                <h3 class="box-title">Votação</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <hr>
                <div class="callout callout-info">
                    <h4>Resultado</h4>

                    <p>{{ $topic->result }}</p>
                </div>
            </div><!-- /.box-body -->
            @if($topic->opened === 0 && $topic->isConvidado(Auth::user()->id))

            @else

            @endif
        </div><!-- /.box-body -->
    </div><!-- /.box -->

    @stop