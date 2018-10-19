<?php

namespace App\Http\Controllers\Admin;

use Storage;
use \Illuminate\Http\Request;
use App\Http\Requests\adherenciaStoreRequest;
use App\Http\Requests\adherenciaUpdateRequest;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use App\Sujeto;
use App\Dieta;
use App\adherencia;

class adherenciasController extends Controller
{
    public function __construct()
	{
		$this->middleware('auth');
	}


	public function index()
    {
        $this->middleware('auth');
        if(\Auth()->user()->rol == "ADMIN"){
             $adherencias=DB::SELECT("SELECT users.name, users.lastname, users.codigo, ad.id, ad.user_id, ad.pg1, ad.pg2, ad.pg3, ad.pg4, ad.pg5, ad.pg6, ad.pg7, ad.pg8, ad.pg9, ad.pg10, ad.pg11, ad.pg12, ad.pg13, ad.pg14, ad.total FROM adherenciamediterranea AS ad,users WHERE ad.user_id = users.id ");

        return view('admin.adherencias.index',compact('adherencias'));
        }
        return redirect('/');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $adherencias = adherencia::orderBy('user_id')->pluck('user_id','id');
        
        return view('admin.adherencias.create',compact('adherencias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(adherenciaStoreRequest $request)
    {
        
        $adherencia = adherencia::create($request->all()); //solo es aceptable si esta el fillable
       
        return redirect('/');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\adherencias  $adherencias
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $adherencia = adherencia::find($id);
        return view('admin.adherencias.show',compact('adherencia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\adherencias  $adherencias
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $adherencia = adherencia::find($id);
       
        return view('admin.adherencias.edit',compact('adherencia'));//muestra el formulario      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\adherencias  $adherencias
     * @return \Illuminate\Http\Response
     */
    public function update(adherenciaUpdateRequest $request, $id)
    {
        $adherencia = adherencia::find($id);
        $adherencia->delete();
        $adherencia = adherencia::create($request->all()); 
        return redirect()->route('adherencias.edit',$adherencia->id)
                ->with('info','El adherencia ha sido actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\adherencias  $adherencias
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $adherencia= adherencia::find($id);
        $adherencia->delete();
        return back()->with('info','El adherencia ha sido eliminado');
    }
} 

