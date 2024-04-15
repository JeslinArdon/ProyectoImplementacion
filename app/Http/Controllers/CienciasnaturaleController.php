<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cienciasnaturale;

class CienciasnaturaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $cienciasnaturales=Cienciasnaturale::all();
        return view('cienciasnaturale.index')->with('cienciasnaturales',$cienciasnaturales);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('cienciasnaturale.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $cienciasnaturale=new Cienciasnaturale();
        $cienciasnaturale->nombre=$request->get('nombre');
        $cienciasnaturale->apellido=$request->get('apellido');
        $cienciasnaturale->nota1=$request->get('nota1');
        $cienciasnaturale->nota2=$request->get('nota2');
        $cienciasnaturale->nota3=$request->get('nota3');
        $cienciasnaturale->save();
        return redirect('/cienciasnaturale');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $eliminarRegistro=Cienciasnaturale::find($id);
        return view('cienciasnaturale.delete')->with('eliminarRegistro',$eliminarRegistro);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $editarRegistro=Cienciasnaturale::find($id);
        return view('cienciasnaturale.edit')->with('editarRegistro',$editarRegistro);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $editarRegistro=Cienciasnaturale::find($id);
        $editarRegistro->nombre=$request->get('nombre');
        $editarRegistro->apellido=$request->get('apellido');
        $editarRegistro->nota1=$request->get('nota1');
        $editarRegistro->nota2=$request->get('nota2');
        $editarRegistro->nota3=$request->get('nota3');
        $editarRegistro->save();
        return redirect('cienciasnaturale');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $eliminarRegistro=Cienciasnaturale::find($id);
        $eliminarRegistro->delete();
        return redirect('cienciasnaturale');
    }
}
