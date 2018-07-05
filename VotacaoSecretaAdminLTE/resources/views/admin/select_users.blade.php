@extends('adminlte::page')
@section('content')

<div class="box">
    <div class="box-header">
        <h3 class="box-title">Selecione os Votantes</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <!-- select -->
        {{-- <form  method="get" role="form" >
              @csrf
          
          <div class="form-group" >
              <label>Ocupação</label>
              <select name="ocupacao" class="form-control">
                <option value="1">Professores</option>
                <option value="2">Alunos</option>
              </select>
            </div>
            <div class="form-group" >
                <label>Departamento</label>
                <select name="departamento" class="form-control">
                  <option value="1">DECSI</option>
                  <option value="2">DECEA</option>
                  <option value="3">DEENP</option>
                  <option value="4">DEELT</option>
                </select>
              </div>
  

            <input type="submit" value="Submit">
          </form> --}}

        <form  method="post" role="form"  action="{{route('usuariosCreate', $topic)}}">
            @csrf
            <table id="example1" class="table table-bordered table-striped">
                <tr>
                    <th>_</th>
                    <th>Nome</th>
                    <th>Ocupação</th>
                    <th>Departamento</th>
                </tr>


                @foreach ($all as $item)
                <tr>
                    <td><input type="checkbox"  name="user[]" value="{{$item->id}}"
                               @foreach ($voters as $e)
                               {{$e->user_id === $item->id ? 'disabled' : '' }}
                               @endforeach


                               ></td>
                    <td>{{$item->name}}</td>
                    <td>{{ $item->type <  5 ? "Professor" : "Aluno" }}</td>
                    <td>@if($item->type === 0 ||$item->type === 1 || $item->type === 5 )
                        DECSI
                        @elseif ($item->type === 2 || $item->type === 6)
                        DECEA
                        @elseif ($item->type === 3 || $item->type === 7)
                        DEENP
                        @elseif ($item->type === 4 || $item->type === 8)
                        DEELT
                        @endif
                    </td>
                </tr>
                @endforeach
            </table>
            <input class="btn btn-success btn-lg" type="submit" value="Adicionar">
        </form>



    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->

@stop