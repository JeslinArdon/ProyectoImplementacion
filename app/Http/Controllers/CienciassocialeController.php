<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cienciassociale;

class CienciassocialeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $cienciassociales=Cienciassociale::all();
        return view('cienciassociale.index')->with('cienciassociales',$cienciassociales);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('cienciassociale.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $cienciassociale=new Cienciassociale();
        $cienciassociale->nombre=$request->get('nombre');
        $cienciassociale->apellido=$request->get('apellido');
        $cienciassociale->nota1=$request->get('nota1');
        $cienciassociale->nota2=$request->get('nota2');
        $cienciassociale->nota3=$request->get('nota3');
        $cienciassociale->save();
        return redirect('/cienciassociale');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $eliminarRegistro=Cienciassociale::find($id);
        return view('cienciassociale.delete')->with('eliminarRegistro',$eliminarRegistro);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $editarRegistro=Cienciassociale::find($id);
        return view('cienciassociale.edit')->with('editarRegistro',$editarRegistro);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $editarRegistro=Cienciassociale::find($id);
        $editarRegistro->nombre=$request->get('nombre');
        $editarRegistro->apellido=$request->get('apellido');
        $editarRegistro->nota1=$request->get('nota1');
        $editarRegistro->nota2=$request->get('nota2');
        $editarRegistro->nota3=$request->get('nota3');
        $editarRegistro->save();
        return redirect('cienciassociale');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $eliminarRegistro=Cienciassociale::find($id);
        $eliminarRegistro->delete();
        return redirect('cienciassociale');
    }
}
