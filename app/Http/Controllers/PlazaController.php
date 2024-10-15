<?php

namespace App\Http\Controllers;

use App\Models\Plaza;
use Illuminate\Http\Request;

class PlazaController extends Controller
{
  
    public function index()
    {
        $plazas = Plaza::paginate(5);
        return view("catalogos.plazas.index", compact("plazas"));
    }


    public function create()
    {
        $plaza = new Plaza(); // Crear una nueva instancia
        $accion = "crear";
        $txtbtn = "Guardar";
        $plazas = Plaza::paginate(5); // Listar plazas para paginación

        return view("catalogos.plazas.frm", compact("plazas", "plaza", "accion", "txtbtn"));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'idplaza' => 'required|string|max:10|unique:plazas',
            'nombreplaza' => 'required|string|max:200',
        ]);

        Plaza::create($validatedData);
        return redirect()->route('plazas.index')->with('success', 'Plaza creada exitosamente.');
    }

    public function show(Plaza $plaza)
    {
        $plazas = Plaza::paginate(5);
        $accion = 'mostrar'; 
        $txtbtn = 'Regresar';
        $desabilitado = "disabled";

        return view("catalogos.plazas.frm", compact('plazas', 'plaza', 'accion', 'txtbtn', 'desabilitado'));
    }

    public function edit(Plaza $plaza)
    {
        $plazas = Plaza::paginate(5);
        $accion = "actualizar";
        $txtbtn = "Actualizar Datos";

        return view("catalogos.plazas.frm", compact("plazas", "plaza", "accion", "txtbtn"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Plaza $plaza)
    {
        $validatedData = $request->validate([
            'idplaza' => 'required|string|max:10|unique:plazas,idplaza,' . $plaza->id, // Ignorar la plaza actual
            'nombreplaza' => 'required|string|max:200',
        ]);

        $plaza->update($validatedData);
        return redirect()->route('plazas.index')->with('success', 'Plaza actualizada exitosamente.');
    }

    public function eliminar(Plaza $plaza)
    {
        $plazas = Plaza::paginate(5);
        return view('catalogos.plazas.eliminar', compact('plazas', 'plaza'));
    }

    public function destroy(Plaza $plaza)
    {
        $plaza->delete();
        return redirect()->route('plazas.index')->with('success', 'Plaza eliminada correctamente.');
    }
}
