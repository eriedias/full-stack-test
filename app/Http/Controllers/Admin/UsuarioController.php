<?php

namespace App\Http\Controllers\admin;

use App\Usuario;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuario::all();
        return view('admin.lista-de-usuarios', ['usuarios' => $usuarios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cadastro-de-usuario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {
        // Validate the request...

        $usuario = new Usuario;

        $usuario->nome = $request->nome;
        $usuario->matricula = $request->matricula;
        $usuario->fill([
            'senha' => encrypt($request->c8de)
        ]);
        $usuario->status = (isset($request->status) == '1' ? '1' : '0');

        $usuario->save();

        return redirect(route('lista-de-usuarios'));
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
        return view('admin.edicao-de-usuario', ['usuario' => Usuario::findOrFail($id)]);
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
        //
        $usuario = Usuario::find($id);
        $usuario->nome = $request->nome;
        $usuario->matricula = $request->matricula;
        $usuario->status = (isset($request->status) == '1' ? '1' : '0');
        $usuario->save();

        return redirect( route('edicao-de-usuario', [ 'id' => $usuario->id ]) );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $usuario = Usuario::find($id);
        $usuario->delete();

        return redirect(route('lista-de-usuarios'));
    }
}
