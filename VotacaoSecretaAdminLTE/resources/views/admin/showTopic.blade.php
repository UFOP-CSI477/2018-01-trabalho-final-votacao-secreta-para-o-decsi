@extends('adminlte::page')
@section('content')

<div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                <h3 class="box-title">{{$topic->title}}</h3>
                <div class="box-tools">
                        <a href="{{ route('temas.edit', $topic->id) }}"><button class="btn btn-info" ><span class="glyphicon glyphicon-pencil"></span></button></a></td>
                </div>
            </div>
            <table class="table">
      

                <tr>
                <th >Usuario</th>
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
                 <td>@switch($topic->visible)
                    @case(0)
                    <span class="label label-danger">{{"Apenas para mim"}}</span>
                        @break
                    @case(1)
                    <span class="label label-success"> {{"Para todos"}}</span>
                        @break
                    @case(2)
                    <span class="label label-warning">{{"Apenas para cadastrados"}}</span> 
                        @break
                    @default
                    {{"ERRO!!"}}    
                @endswitch</td>
               </tr>
                
             </table>   

        </div>
        <div class="box box-warning ">
                <div class="box-header">
                    <h3 class="box-title">Votação</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                   
                   @if ( $topic->opened === 0 )
                   <a href="{{route('closeVoting', $topic->id)}}"><button class="btn btn-danger btn-lg ">Fechar Votação</button></a>
                   @else
                   <a href="{{route('openVoting', $topic->id)}}"><button class="btn btn-success btn-lg">Abrir Votação</button></a>
                   @endif
                  
                   <hr>
                   @if ( $topic->result != 'Sem resultado')
                   <label class="text-center"><h4 >Pessoas que Votaram</h4></label>
                   <table class="table table-bordered">
    
                        <tr>
                                <th>Nome</th>
                                <th>Ocupação</th>
                                <th>Departamento</th>
                              </tr>
                              
            @foreach ($topic->participantes as $item)
            <tr>
                  
             
                    <td>{{$item->usuario->name}}</td>
                    <td>{{ $item->usuario->type <  5 ? "Professor" : "Aluno" }}</td>
                    <td>@if($item->usuario->type === 0 ||$item->usuario->type === 1 || $item->usuario->type === 5 )
                            DECSI
                          @elseif ($item->usuario->type === 2 || $item->usuario->type === 6)
                             DECEA
                          @elseif ($item->usuario->type === 3 || $item->usuario->type === 7)
                             DEENP
                          @elseif ($item->usuario->type === 4 || $item->usuario->type === 8)
                             DEELT
                          @endif</td>
            </tr>
            @endforeach
        </table>
<hr>
@endif
        <label class="text-center"><h4>Numero de Votos</h4></label>
        <table class="table table-bordered">
        @foreach ($topic->opcoes()->get() as $item)
        <tr>
        <th >{{$item->option}}</th>
                 <td>{{  $item->amount }}</td>
        </tr>
        @endforeach

        </table>
        <hr>
        <div class="callout callout-info">
                <h4>Resultado</h4>

                <p>{{ $topic->result }}</p>
              </div>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Opções de Voto</h3>
                        <div class="box-tools">
                                <a href="{{route('votos', $topic->id)}}"><button class="btn btn-success" ><span class="glyphicon glyphicon-plus"></span></button></a></td>

                        </div>
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
                       
                      
                        <td><form method="post" action="{{ route('votos.destroy', $item->id) }}">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-danger"  type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                          </form></td>
                        </tr>
                        @endforeach
                    </table>   
                    </div><!-- /.box-body -->
                </div><!-- /.box -->

                <div class="box box-success">
                        <div class="box-header with-border">
                            <h3 class="box-title">Usuarios Convidados Para Votar</h3>
                            <div class="box-tools">
                                    <a href="{{route('usuarios', $topic->id)}}"><button class="btn btn-success" ><span class="glyphicon glyphicon-plus"></span></button></a></td>

                            </div>
                        </div><!-- /.box-header -->
                        
                        <div class="box-body">
                                <table class="table table-bordered">
    
                                        <tr>
                                                <th>Nome</th>
                                                <th>Ocupação</th>
                                                <th>Departamento</th>
                                              </tr>
                                              
                            @foreach ($topic->convidados as $item)
                            <tr>
                                  
                             
                                    <td>{{$item->usuario->name}}</td>
                                    <td>{{ $item->usuario->type <  5 ? "Professor" : "Aluno" }}</td>
                                    <td>@if($item->usuario->type === 0 ||$item->usuario->type === 1 || $item->usuario->type === 5 )
                                            DECSI
                                          @elseif ($item->usuario->type === 2 || $item->usuario->type === 6)
                                             DECEA
                                          @elseif ($item->usuario->type === 3 || $item->usuario->type === 7)
                                             DEENP
                                          @elseif ($item->usuario->type === 4 || $item->usuario->type === 8)
                                             DEELT
                                          @endif</td>
    
                            <td><form method="post" action="{{ route('votantes.destroy', $item->id) }}">
                              @csrf
                              @method('DELETE')
                              <button class="btn btn-danger" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                              </form></td>
                            </tr>
                            @endforeach
                        </table>   
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
      </div>
    </div>
          
@stop