<?php

namespace App\Http\Controllers\Admin;

use Storage;
use \Illuminate\Http\Request;
use App\Http\Requests\registroStoreRequest;
use App\Http\Requests\registroUpdateRequest;
use App\Http\Controllers\Controller;
use App\Sujeto;
use App\Dieta;
use App\registro;

class registrosController extends Controller
{
    public function __construct()
	{
		$this->middleware('auth');
	}


	public function index()
    {
        $this->middleware('auth');
        $registros=registro::orderBy('id','DESC')->paginate();
        return view('admin.registros.index',compact('registros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $registros = registro::orderBy('user_id')->pluck('user_id','id');
        
        return view('admin.registros.create',compact('registros'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(registroStoreRequest $request)
    {
        
        $registro = registro::create($request->all()); //solo es aceptable si esta el fillable
       
        return redirect('/');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\registros  $registros
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $registro = registro::find($id);
        return view('admin.registros.show',compact('registro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\registros  $registros
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $registro = registro::find($id);
       
        return view('admin.registros.edit',compact('registro'));//muestra el formulario      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\registros  $registros
     * @return \Illuminate\Http\Response
     */
    public function update(registroUpdateRequest $request, $id)
    {
        $registro = registro::find($id); 
        $registro->fill($request->all())->save();    
        return redirect()->route('registros.edit',$registro->id)
                ->with('info','La registro ha sido actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\registros  $registros
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $registro= registro::find($id);
        $registro->delete();
        return back()->with('info','la registro ha sido eliminado');
    }
} 

