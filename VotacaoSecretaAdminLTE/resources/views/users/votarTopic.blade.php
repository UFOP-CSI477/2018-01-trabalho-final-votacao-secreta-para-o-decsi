@extends('adminlte::page')
@section('content')
<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Votar - {{$topic->title}}</h3>

            </div>

            <form  method="post" role="form" action="{{route('votarStore', $topic->id)}}">

                @csrf

                <div class="box-body">
                    <div class="form-group">
                        <label>Selecione a opção:</label>
                        @foreach ($topic->opcoes()->get() as $item)
                        <div class="radio">
                            <label>
                                <input type="radio" name="option"  value="{{ $item->id}}">
                                {{ $item->option}}
                            </label>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary btn-lg">Votar</button>
                </div>
            </form>

        </div>
        @stop