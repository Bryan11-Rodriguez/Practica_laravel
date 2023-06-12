@extends('layouts.template')
@section('content')

<h3 ALIGN=left>Gobierno de El Salvador</h3> 
<h3 ALIGN=center>Comisión Ejecutiva del Río Lempa</h3>
<h3 ALIGN=right> 11/6/2023</h3>


<br>
<table class="table table-sm table-bordered">
                <thead>
                    <th>Nombre Proyecto</th>
                    <th>fuente Fondos</th>
                    <th>Monto Planificado</th>
                    <th>Monto Patrocinado</th>
                    <th>Monto Fondos Propios</th>
                </thead>
                <tbody>
                    @foreach ($proyectos as $item)
                    <tr>
                        <td>{{$item->NombreProyecto}}</td>
                        <td>{{$item->fuenteFondos}}</td>
                        <td>{{$item->MontoPlanificado}}</td>
                        <td>{{$item->MontoPatrocinado}}</td>
                        <td>{{$item->MontoFondosPropios}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>


@endsection