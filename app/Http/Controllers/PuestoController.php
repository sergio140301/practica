<?php

namespace App\Http\Controllers;

use App\Models\Puesto;
use Illuminate\Http\Request;

class PuestoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $puestos = Puesto::paginate(5);
        return view("catalogos.puestos.index", compact("puestos"));
    }

    public function create()
    {
        $desabilitado = "";
        $puesto = new Puesto(); // Crear una nueva instancia
        $accion = "crear";
        $txtbtn = "Guardar";
        $puestos = Puesto::paginate(5); // Listar puestos para paginación

        return view("catalogos.puestos.frm", compact("desabilitado","puestos", "puesto", "accion", "txtbtn"));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'idpuesto' => 'required|string|max:10|unique:puestos',
            'nombrepuesto' => 'required|string|max:200',
            'tipo' => 'required|string|max:50',
        ]);

        Puesto::create($validatedData);
        return redirect()->route('puestos.index')->with('success', 'Puesto creado exitosamente.');
    }

    public function show(Puesto $puesto)
    {
        $puestos = Puesto::paginate(5);
        $accion = 'mostrar'; 
        $txtbtn = 'Regresar'; 
        $desabilitado = "disabled";

        return view("catalogos.puestos.frm", compact('puestos', 'puesto', 'accion', 'txtbtn', 'desabilitado'));
    }

    public function edit(Puesto $puesto)
    {
        $desabilitado = ""; // Campo habilitado para editar
        $puestos = Puesto::paginate(5);
        $accion = "actualizar";
        $txtbtn = "Actualizar Datos";

        return view("catalogos.puestos.frm", compact("puestos","desabilitado", "puesto", "accion", "txtbtn"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Puesto $puesto)
    {
        $validatedData = $request->validate([
            'idpuesto' => 'required|string|max:10|unique:puestos,idpuesto,' . $puesto->id, // Ignorar el puesto actual
            'nombrepuesto' => 'required|string|max:200',
            'tipo' => 'required|string|max:50',
        ]);

        $puesto->update($validatedData);
        return redirect()->route('puestos.index')->with('success', 'Puesto actualizado exitosamente.');
    }

    public function eliminar(Puesto $puesto)
    {
        $puestos = Puesto::paginate(5);
        return view('catalogos.puestos.eliminar', compact('puestos', 'puesto'));
    }

    public function destroy(Puesto $puesto)
    {
        $puesto->delete();
        return redirect()->route('puestos.index')->with('success', 'Puesto eliminado correctamente.');
    }
}
