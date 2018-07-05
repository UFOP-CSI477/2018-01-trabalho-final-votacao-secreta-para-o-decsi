@extends('adminlte::page')
@section('content')
<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->

        <div class="box">
            <div class="box-header with-border">
                <div class="input-group input-group-sm" style="width: 250px;">
                    <a href="{{route('temas.create')}}"><button class="btn btn-success" ><span class="glyphicon glyphicon-plus"> <h3 class="box-title">Temas</h3></span></button></a></td>
                </div>  
                <div class="box-tools">
                    <form method="post" action="{{ route('search') }}">
                        @csrf
                        <div class="input-group input-group-sm" style="width: 250px;">
                            <input type="text" name="search" class="form-control pull-right" placeholder="Buscar">
                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table class="table table-bordered">
                <tr>
                    <th>Titulo</th>
                    <th>Descrição</th>
                    <th>Resultado</th>
                    <th>Visibilidade</th>
                    <th></th>
                    <th></th>
                </tr>
                @foreach ($topics as $linha)
                <tr>
                    <td><a href="{{ route('temas.show', $linha->id) }}">{{$linha->title}}</a></td>  
                    <td>{{mb_strimwidth("$linha->description", 0, 10,"...")}}</td>
                    <td>{{$linha->result}}</td>
                    <td>
                        @switch($linha->visible)
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
                    <td><a href="{{ route('temas.edit', $linha->id) }}"><button class="btn btn-info" ><span class="glyphicon glyphicon-edit"></span></button></a></td>

                    <td><form method="post" action="{{ route('temas.destroy', $linha->id) }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger"  type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                        </form></td>
                </tr>
                @endforeach

            </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer clearfix">
            @if($topics instanceof \Illuminate\Pagination\LengthAwarePaginator )

            {!!$topics->links()!!}

            @endif

        </div>
    </div>
</div>
</div>
<!-- /.card-body -->
<!-- form start -->




@stop