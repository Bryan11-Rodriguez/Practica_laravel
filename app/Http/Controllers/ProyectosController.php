<?php

namespace App\Http\Controllers;

use App\Models\Proyectos;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\pdf;

class ProyectosController extends Controller
{

    public function index()
    {
        //pagina de inicio
        $datos = Proyectos::all();
        return view('proyectos/inicio', compact('datos'));
    }

    
    public function create()
    {
        //form agregar datos
        return view('proyectos/agregar');
    }

    public function pdf(){
        //crear pdf
        $proyectos=Proyectos::all();
        $pdf = pdf::loadView('proyectos.pdf', compact('proyectos'));
        return $pdf->stream();
    }
    
    public function store(Request $request)
    {
        //guardar datos bd
        $proyecto = new Proyectos();
        $proyecto->NombreProyecto = $request->post('NombreProyecto');
        $proyecto->fuenteFondos = $request->post('fuenteFondos');
        $proyecto->MontoPlanificado= $request->post('MontoPlanificado');
        $proyecto->MontoPatrocinado = $request->post('MontoPatrocinado');
        $proyecto->MontoFondosPropios = $request->post('MontoFondosPropios');
        $proyecto->save();

        return redirect()->route("proyectos.index")->with("success", "Agregado con exito");

    }

    
    public function show($id)
    {
        //listar datos de las tablas
        $proyectos = Proyectos::find($id);
        return view('proyectos/eliminar', compact('proyectos'));
    }

    
    public function edit($id)
    {
        //sirve para traer los datos a editar
        $proyectos = Proyectos::find($id);
        return view('proyectos/actualizar', compact('proyectos'));

    }

    
    public function update(Request $request, $id)
    {
        //actualiza llos datos en la bd
       $proyecto = Proyectos::find($id);
       $proyecto->NombreProyecto = $request->post('NombreProyecto');
       $proyecto->fuenteFondos = $request->post('fuenteFondos');
       $proyecto->MontoPlanificado= $request->post('MontoPlanificado');
       $proyecto->MontoPatrocinado = $request->post('MontoPatrocinado');
       $proyecto->MontoFondosPropios = $request->post('MontoFondosPropios');
       $proyecto->save();

        return redirect()->route("proyectos.index")->with("success", "Actualizado con exito");
    }

    
    public function destroy($id)
    {
        //elimina los datos
       $proyecto = Proyectos::find($id);
       $proyecto->delete();
        return redirect()->route("proyectos.index")->with("success", "Eliminado con exito");

    }
}