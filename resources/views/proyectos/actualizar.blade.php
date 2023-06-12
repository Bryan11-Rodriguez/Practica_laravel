@extends('layouts.template')
@section('content')

<div class="card">
    <div class="card-body">
      <h5 class="card-title">Actualizar proyectos</h5>
      <p class="card-text">
        <form action="{{ route('proyectos.update', $proyectos->id)}}" method="POST">
          @csrf
          @method("PUT")
            <label for="">Nombre Proyecto</label>
            <input type="text" name="NombreProyecto" class="form-control" required value="{{$proyectos->NombreProyecto}}">
            <label for="">fuente Fondos</label>
            <input type="text" name="fuenteFondos" class="form-control" required value="{{$proyectos->fuenteFondos}}">
            <label for="">Monto Planificado</label>
            <input type="text" name="MontoPlanificado" class="form-control" required value="{{$proyectos->MontoPlanificado}}">
            <label for="">Monto Patrocinado</label>
            <input type="text" name="MontoPatrocinado" class="form-control" required value="{{$proyectos->MontoPatrocinado}}">
            <label for="">Monto Fondos Propios</label>
            <input type="text" name="MontoFondosPropios" class="form-control" required value="{{$proyectos->MontoFondosPropios}}">
            <br>
            <a href="{{ route("proyectos.index")}}" class="btn btn-info">Regresar</a>
            <button class="btn btn-primary">Agregar</button>
        </form>
      </p>
    
    </div>
  </div>



@endsection