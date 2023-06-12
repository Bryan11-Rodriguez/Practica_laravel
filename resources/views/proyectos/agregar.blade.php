@extends('layouts.template')
@section('content')

<div class="card">
    <div class="card-body">
      <h5 class="card-title">Agregar Proyecto</h5>
      <p class="card-text">
        <form action="{{ route('proyectos.store')}}" method="POST">
          @csrf
          
            <label for="">Nombre Proyecto</label>
            <input type="text" name="NombreProyecto" class="form-control" required>
            <label for="">fuente Fondos</label>
            <input type="text" name="fuenteFondos" class="form-control" required>
            <label for="">Monto Planificado</label>
            <input type="text" name="MontoPlanificado" class="form-control" required>
            <label for="">Monto Patrocinado</label>
            <input type="text" name="MontoPatrocinado" class="form-control" required>
            <label for="">Monto Fondos Propios</label>
            <input type="text" name="MontoFondosPropios" class="form-control" required>
            <br>
            <a href="{{ route("proyectos.index") }}" class="btn btn-info">Regresar</a>
            <button class="btn btn-primary">Agregar</button>
        </form>
      </p>
    
    </div>
  </div>



@endsection