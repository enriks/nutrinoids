<?php

namespace App\Http\Controllers\Admin;

use Storage;
use \Illuminate\Http\Request;
use App\Http\Requests\MiscelaneaStoreRequest;
use App\Http\Requests\MiscelaneaUpdateRequest;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use App\Sujeto;
use App\Dieta;
use App\Miscelanea;

class MiscelaneasController extends Controller
{
    public function __construct()
	{
		$this->middleware('auth');
	}


	public function index()
    {
        $this->middleware('auth');
        if(\Auth()->user()->rol == "ADMIN"){
        $Miscelaneas=DB::SELECT("SELECT users.name, users.lastname, users.codigo, miscelanea.id, miscelanea.user_id, miscelanea.croquetas, miscelanea.sopas, miscelanea.mostaza, miscelanea.mayonesa, miscelanea.salsaTomate, miscelanea.picante, miscelanea.sal, miscelanea.mermeladas, miscelanea.azucar, miscelanea.miel, miscelanea.snacks, miscelanea.otro FROM miscelanea, users WHERE miscelanea.user_id = users.id;");
        return view('admin.miscelaneas.index',compact('Miscelaneas'));
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
        $Miscelaneas = Miscelanea::orderBy('user_id')->pluck('user_id','id');
        
        return view('admin.miscelaneas.create',compact('Miscelaneas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MiscelaneaStoreRequest $request)
    {
        
        $Miscelanea = Miscelanea::create($request->all()); //solo es aceptable si esta el fillable
       
        return redirect()->route('bebidas.create')
        ->with('info','Puede continuar su cuestionario con Bebidas');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Miscelaneas  $Miscelaneas
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Miscelanea = Miscelanea::find($id);
        return view('admin.miscelaneas.show',compact('Miscelanea'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Miscelaneas  $Miscelaneas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Miscelanea = Miscelanea::find($id);
       
        return view('admin.miscelaneas.edit',compact('Miscelanea'));//muestra el formulario      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Miscelaneas  $Miscelaneas
     * @return \Illuminate\Http\Response
     */
    public function update(MiscelaneaUpdateRequest $request, $id)
    {
        $Miscelanea = Miscelanea::find($id); 
        $Miscelanea->fill($request->all())->save();    
        return redirect()->route('miscelaneas.edit',$Miscelanea->id)
                ->with('info','La miscelanea ha sido actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Miscelaneas  $Miscelaneas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Miscelanea= Miscelanea::find($id);
        $Miscelanea->delete();
        return back()->with('info','El Miscelanea ha sido eliminado');
    }
} 

