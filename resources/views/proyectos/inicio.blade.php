@extends('layouts.template')
@section('content')

<div class="card">
    
    <div class="card-body">
        <div class="row">
            <div class="col-sm-12">
                @if ($mensaje = Session::get('success'))
                <div class="alert alert-primary" role="alert">
                    {{$mensaje }}
                  </div> 
                @endif
            </div>
        </div>
        <p>
            <a href="{{ route('proyectos.create')}}" class="btn btn-primary">Agregar proyectos</a>
            <a href="{{ route('proyectos.pdf')}}" class="btn btn-primary">PDF</a>
          </p>
          <hr>
      <h5 class="card-title">Listado de los proyectos</h5>
      <p>
        <div class="table table-responsive">
            <table class="table table-sm table-bordered">
                <thead>
                    <th>Nombre Proyecto</th>
                    <th>fuente Fondos</th>
                    <th>Monto Planificado</th>
                    <th>Monto Patrocinado</th>
                    <th>Monto Fondos Propios</th>
                    <th>editar</th>
                    <th>eliminar</th>
                </thead>
                <tbody>
                    @foreach ($datos as $item)
                    <tr>
                        <td>{{$item->NombreProyecto}}</td>
                        <td>{{$item->fuenteFondos}}</td>
                        <td>{{$item->MontoPlanificado}}</td>
                        <td>{{$item->MontoPatrocinado}}</td>
                        <td>{{$item->MontoFondosPropios}}</td>
                        <td>
                            <form action="{{ route("proyectos.edit", $item->id)}}" method="GET">
                                <button class="btn btn-warning btn-sm">Editar</button>
                            </form>
                          </td>
                          <td>
                            <form action="{{ route("proyectos.show", $item->id)}}" method="GET">
                              <button class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                          </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
      </p>
    </div>
  </div>

@endsection