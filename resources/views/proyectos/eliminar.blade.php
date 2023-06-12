@extends('layouts.template')
@section('content')

<div class="card">
    <div class="card-body">
      <h5 class="card-title">Eliminar proyecto</h5>
      <p class="card-text">
        <div class="alert alert-danger" role="alert">
            Seguro de eliminar este proyecto!
            <table class="table table-sm table-hover table-bordered">
                <thead>
                    <th>Nombre Proyecto</th>
                    <th>fuente Fondos</th>
                    <th>Monto Planificado</th>
                    <th>Monto Patrocinado</th>
                    <th>Monto Fondos Propios</th>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$proyectos->NombreProyecto}}</td>
                        <td>{{$proyectos->fuenteFondos}}</td>
                        <td>{{$proyectos->MontoPlanificado}}</td>
                        <td>{{$proyectos->MontoPatrocinado}}</td>
                        <td>{{$proyectos->MontoFondosPropios}}</td>
                    </tr>
                </tbody>
            </table>
            <hr>
            <form action="{{route('proyectos.destroy', $proyectos->id)}}" method="POST">
                @csrf
                @method('delete')
                <a href="{{ route('proyectos.index')}}" class="btn btn-success">Regresar</a>
                <button class="btn btn-danger">Eliminar</button>
            </form>
          </div>
        
      </p>
    
    </div>
  </div>



@endsection