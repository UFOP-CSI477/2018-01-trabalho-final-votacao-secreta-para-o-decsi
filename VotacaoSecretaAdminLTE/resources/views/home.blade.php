@extends('adminlte::page')


@section('content')
<p>Você está logado!</p>
@foreach ($temas as $tema)
@if($tema->visible === 1 or $tema->visible === 2)
<div class="box box-default collapsed-box">
    <div class="box-header with-border">
        <h3 class="box-title">{{$tema->title}}</h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
            </button>
        </div>
        <!-- /.box-tools -->
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        {{$tema->description}}
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->

@endif
@endforeach
<!-- Page Heading -->
</div>


@stop