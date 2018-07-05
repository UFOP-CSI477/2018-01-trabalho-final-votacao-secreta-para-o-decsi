@extends('layouts.commom')

@section('content') 


  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">
          <div class="card my-4">
              <div class="card-body ">
        <!-- Title -->
        <h1 class="mt-4">{{$topic->title}}</h1>

        <!-- Author -->
        <p class="lead">
          by
        {{$topic->secretario->name}}
        </p>

        <hr>

        <!-- Date/Time -->
        <p>Criado em {{$topic->created_at}}</p>


        <!-- Preview Image -->

      
          <hr>
              <label><b>Descrição:</b></label>
                {{$topic->description}}
                <hr>
                <label><b>Documento Descritivo: </b></label>
                        @if($topic->document != '')
                         <a href="{{url('storage/topicos/'.$topic->title.".pdf")}}">Download</a>
                        @endif
                        <hr>
                <label><b>Opções de Votos:</b></label>
              <ul>
                @foreach ($topic->opcoes()->get() as $item)
                <li>{{$item->option}}</li>  
                @endforeach
              </ul>
              <hr>
              <div class="callout callout-info">
                  <h4>Resultado</h4>
      
                  <p>{{$topic->result}}</p>
                </div>
            </div>
          </div>
  
        
         
        <!-- Comments Form -->
        <div class="card my-4">
       
        </div>

        <!-- Single Comment -->
      

        <!-- Comment with nested comments -->
      

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
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

        <!-- Side Widget -->

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>




@endsection