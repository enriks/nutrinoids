<?php

namespace App\Http\Controllers\Admin;

use Storage;
use \Illuminate\Http\Request;
use App\Http\Requests\mostrarStoreRequest;
use App\Http\Requests\mostrarUpdateRequest;
use App\Http\Controllers\Controller;
use App\Sujeto;
use App\Dieta;
use App\mostrar;

class mostrarsController extends Controller
{
    public function __construct()
	{
	}


	public function index()
    {
        return "hello";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mostrars = mostrar::orderBy('user_id')->pluck('user_id','id');
        
        return view('admin.mostrars.create',compact('mostrars'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(mostrarStoreRequest $request)
    {
        
        $mostrar = mostrar::create($request->all()); //solo es aceptable si esta el fillable
       
        return redirect()->route('hucapes.create')
        ->with('info','Puede continuar su cuestionario con Huevos, carnes, pescados');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\mostrars  $mostrars
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mostrar = mostrar::find($id);
        return view('admin.mostrars.show',compact('mostrar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\mostrars  $mostrars
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mostrar = mostrar::find($id);
       
        return view('admin.mostrars.edit',compact('mostrar'));//muestra el formulario      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\mostrars  $mostrars
     * @return \Illuminate\Http\Response
     */
    public function update(mostrarUpdateRequest $request, $id)
    {
        $mostrar = mostrar::find($id); 
        $mostrar->fill($request->all())->save();    
        return redirect()->route('mostrars.edit',$mostrar->id)
                ->with('info','El mostrar ha sido actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\mostrars  $mostrars
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mostrar= mostrar::find($id);
        $mostrar->delete();
        return back()->with('info','El mostrar ha sido eliminado');
    }
} 

