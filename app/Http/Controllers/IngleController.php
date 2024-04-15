<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ingle;

class IngleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $ingles=Ingle::all();
        return view('ingle.index')->with('ingles',$ingles);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('ingle.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $ingle=new Ingle();
        $ingle->nombre=$request->get('nombre');
        $ingle->apellido=$request->get('apellido');
        $ingle->nota1=$request->get('nota1');
        $ingle->nota2=$request->get('nota2');
        $ingle->nota3=$request->get('nota3');
        $ingle->save();
        return redirect('/ingle');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $eliminarRegistro=Ingle::find($id);
        return view('ingle.delete')->with('eliminarRegistro',$eliminarRegistro);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $editarRegistro=Ingle::find($id);
        return view('ingle.edit')->with('editarRegistro',$editarRegistro);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $editarRegistro=Ingle::find($id);
        $editarRegistro->nombre=$request->get('nombre');
        $editarRegistro->apellido=$request->get('apellido');
        $editarRegistro->nota1=$request->get('nota1');
        $editarRegistro->nota2=$request->get('nota2');
        $editarRegistro->nota3=$request->get('nota3');
        $editarRegistro->save();
        return redirect('ingle');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $eliminarRegistro=Ingle::find($id);
        $eliminarRegistro->delete();
        return redirect('ingle');
    }
}
