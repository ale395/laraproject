<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sg_formulario;
use App\Sg_modulo;

class FormularioControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formularios = Sg_formulario::all();
        return view('formulario.index', compact('formularios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $modulos = Sg_modulo::all();
        return view('formulario.create', compact('modulos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Sg_formulario::create($request->all())->save();
        return redirect()->route('formulario.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $formulario = Sg_formulario::findOrFail($id);
        $modulos = Sg_modulo::all();
        return view('formulario.edit', compact('formulario', 'modulos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $formulario = Sg_formulario::findOrFail($id);
        
        $formulario->update($request->all());

        return redirect()->route('formulario.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $formulario = Sg_formulario::findOrFail($id);
        $formulario->delete();
        return redirect()->route('formulario.index');
    }
}
