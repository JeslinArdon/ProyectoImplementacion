<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Espanol;

class EspanolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $espanols=Espanol::all();
        return view('espanol.index')->with('espanols',$espanols);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('espanol.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $espanol=new Espanol();
        $espanol->nombre=$request->get('nombre');
        $espanol->apellido=$request->get('apellido');
        $espanol->nota1=$request->get('nota1');
        $espanol->nota2=$request->get('nota2');
        $espanol->nota3=$request->get('nota3');
        $espanol->save();
        return redirect('/espanol');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $eliminarRegistro=Espanol::find($id);
        return view('espanol.delete')->with('eliminarRegistro',$eliminarRegistro);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $editarRegistro=Espanol::find($id);
        return view('espanol.edit')->with('editarRegistro',$editarRegistro);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $editarRegistro=Espanol::find($id);
        $editarRegistro->nombre=$request->get('nombre');
        $editarRegistro->apellido=$request->get('apellido');
        $editarRegistro->nota1=$request->get('nota1');
        $editarRegistro->nota2=$request->get('nota2');
        $editarRegistro->nota3=$request->get('nota3');
        $editarRegistro->save();
        return redirect('espanol');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $eliminarRegistro=Espanol::find($id);
        $eliminarRegistro->delete();
        return redirect('espanol');
    }
}
