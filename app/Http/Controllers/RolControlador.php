<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sg_rol;
use App\Http\Requests\CreateRolRequest;

class RolControlador extends Controller
{  

    public function index()
    {
        $roles = Sg_rol::all();
        return view('rol.index', compact('roles'));
    }

    public function create()
    {
        return view('rol.create');
    }

    public function store(CreateRolRequest $request)
    {
        Sg_rol::create($request->all())->save();
        return redirect()->route('rol.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $rol = Sg_rol::find($id);
        return view('rol.edit', compact('rol'));
    }

    public function update(Request $request, $id)
    {
        $rol = Sg_rol::findOrFail($id);
        
        $rol->update($request->all());

        /*$rol->update([
            'rol' => $request->rol,
            'nombre' => $request->nombre,
            'estado' => $request->estado
        ]);*/
        return redirect()->route('rol.index');
    }

    public function destroy($id)
    {
        $rol = Sg_rol::findOrFail($id);
        $rol->delete();
        return redirect()->route('rol.index');
    }
}
