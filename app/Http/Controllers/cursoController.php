<?php

namespace App\Http\Controllers;

use App\Models\curso;
use Illuminate\Http\Request;

class cursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Creamos un array para poder manupular la información de la tabla cursos
        //A su vez el array actuará como un objeto
        $cursito = curso::all();
        /* El metodo compact pide un parametro el cual será nuestro array llamado cursito
        y va acompañando la vista que estamos llamando */
        return view('cursos.index', compact('cursito'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cursos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Con el método all()veo toda la información.
        //return $request->all();
        //Obtuvimos el dato de lo que el usuario envía por el input cuyo name es 'nombre'
        //return $request->input('nombre');
        //Creamos una nueva instancia del modelo
        $cursito = new curso();
        //Esto me permitirá manipular la tabla
        $cursito->nombre = $request->input('nombre');
        $cursito->descripcion = $request->input('descripcion');

        if ($request->hasFile('imagen')){
            $cursito->imagen = $request->file('imagen')->store('public');
        }

        //Con esto ejecutamos el comando para guardar
        $cursito->save();
        return 'Wow lograste guardar';
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
        //
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
    }
}
