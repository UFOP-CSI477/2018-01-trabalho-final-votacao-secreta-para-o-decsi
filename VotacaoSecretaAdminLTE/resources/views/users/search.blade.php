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
                            <input type="text" name="search" class="form-control pull-right" placeholder="Buscar" required>

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


            </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer clearfix">

        </div>
    </div>
</div>
</div>
<!-- /.card-body -->
<!-- form start -->




@stop