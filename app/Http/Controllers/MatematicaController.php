<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matematica;

class MatematicaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $matematicas=Matematica::all();
        return view('matematica.index')->with('matematicas',$matematicas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('matematica.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $matematica=new Matematica();
        $matematica->nombre=$request->get('nombre');
        $matematica->apellido=$request->get('apellido');
        $matematica->nota1=$request->get('nota1');
        $matematica->nota2=$request->get('nota2');
        $matematica->nota3=$request->get('nota3');
        $matematica->save();
        return redirect('/matematica');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $eliminarRegistro=Matematica::find($id);
        return view('matematica.delete')->with('eliminarRegistro',$eliminarRegistro);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $editarRegistro=Matematica::find($id);
        return view('matematica.edit')->with('editarRegistro',$editarRegistro);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $editarRegistro=Matematica::find($id);
        $editarRegistro->nombre=$request->get('nombre');
        $editarRegistro->apellido=$request->get('apellido');
        $editarRegistro->nota1=$request->get('nota1');
        $editarRegistro->nota2=$request->get('nota2');
        $editarRegistro->nota3=$request->get('nota3');
        $editarRegistro->save();
        return redirect('matematica');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $eliminarRegistro=Matematica::find($id);
        $eliminarRegistro->delete();
        return redirect('matematica');
    }
}
