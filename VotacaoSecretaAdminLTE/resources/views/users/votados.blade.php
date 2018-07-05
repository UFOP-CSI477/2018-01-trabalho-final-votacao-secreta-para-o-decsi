@extends('adminlte::page')
@section('content')
<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->

        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Temas</h3>
                <div class="box-tools">
                    <form method="post" action="{{ route('searchUser') }}">
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
                    <th>Votação</th>
                </tr>
                @foreach ($topics as $linha)
                @if($linha->visible === 1 or $linha->visible === 2)
                @if($linha->jaVotou(Auth::user()->id))
                <tr>
                    <td><a href="{{ route('user.temas.show', $linha->id) }}">{{$linha->title}}</a></td>  
                    <td>{{mb_strimwidth("$linha->description", 0, 10,"...")}}</td>
                    <td>{{$linha->result}}</td>
                    <td>@if($linha->opened === 0 && $linha->permitidoVotar(Auth::user()->id))
                        <a href="{{route('votar', $linha->id)}}"><button class="btn btn-warning btn-block ">Votar</button></a>
                        @elseif($linha->jaVotou(Auth::user()->id))
                        <a href=""><button class="btn btn-success btn-block " disabled>Votado</button></a>
                        @else
                        <a href=""><button class="btn btn-default btn-block " disabled>Votar</button></a>
                        @endif
                    </td>
                </tr>
                @endif
                @endif
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