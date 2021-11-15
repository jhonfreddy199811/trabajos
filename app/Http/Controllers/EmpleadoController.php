<?php

namespace App\Http\Controllers;

use App\Empleado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $empleado=empleado::orderBy('id','DESC')->paginate(5);
        return view('empleado.index',compact('empleado'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('empleado.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //$datosempleado=request()->all();

        $request->validate([
            'Nombre'=>'required|string|max:100',
            'Apellido'=>'required|string|max:100',
            'Correo'=>'required|email',
            'Telefono'=>'required|string|max:100',
            'Cultivo'=>'required|string|max:100',
            'Municipio'=>'required|string|max:100',
        ]);

        $Mensaje=["required"=>'El :attribute es requerido'];
        $this->validate($request,$Mensaje);

        $datosempleado=request()->except('_token');

        empleado::insert($datosempleado);

        return redirect('empleado')->with('Mensaje','Empleado agregado con éxito');
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $empleado= empleado::findOrFail($id);

        return view('empleado.edit', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosempleado=request()->except(['_token','_method']);

        empleado::where('id','=',$id)->update($datosempleado);

        //$empleado= empleado::findOrFail($id);
       // return view('empleado.edit', compact('empleado'));
       return redirect('empleado')->with('Mensaje','Empleado modificado con éxito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        empleado::destroy($id);

        return redirect('empleado')->with('Mensaje','Empleado eliminado');
    }
}
