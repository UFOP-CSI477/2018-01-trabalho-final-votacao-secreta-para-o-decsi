@extends('layouts.commom')

@section('content')
<!-- Page Content -->
<div class="container">

    <!-- Page Heading -->
    <h1 class="my-4">Tópicos
    </h1>
    <hr>
    <div class="row">
        <div class="col-md-8">
            @foreach ($temas as $tema)
            @if ($tema->visible === 1)
            <!-- Project One -->
            <div class="card my-4 ">
                <a href="{{ route('topicos.show', $tema->id) }}"><h3 class="card-header  bg-dark ">{{$tema->title}}</h3></a>
                <div class="card-body">
                    {{$tema->description}}
                </div>

            </div>
            <hr>
            @endif
            @endforeach
        </div>
        <div class="col-md-4">
            <div class="card my-4 ">
                <h5 class="card-header text-white bg-primary">Buscar</h5>
                <form method="post" action="{{ route('searchComum') }}">
                    @csrf
                    <div class="card-body">
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Buscar tema...">
                            <span class="input-group-btn">
                                <button class="btn btn-secondary" type="submit">Buscar</button>
                            </span>
                        </div>
                    </div>
                </form>
            </div>


            <!-- Categories Widget -->
            <div class="card my-4">
                <h5 class="card-header text-white bg-primary">Categorias</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="{{ route('finalizados') }}">Finalizados</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="{{ route('pendentes') }}">Pendentes</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
@endsection