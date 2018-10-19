<?php

namespace App\Http\Controllers\Admin;

use Storage;
use \Illuminate\Http\Request;
use App\Http\Requests\verduraStoreRequest;
use App\Http\Requests\verduraUpdateRequest;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use App\Sujeto;
use App\Dieta;
use App\verdura;

class verdurasController extends Controller
{
    public function __construct()
	{
		$this->middleware('auth');
	}


	public function index()
    {
        $this->middleware('auth');
        if(\Auth()->user()->rol == "ADMIN"){
            $verduras=DB::SELECT("SELECT users.name, users.lastname, users.codigo, verduras.id, verduras.user_id, verduras.acelgas, verduras.col, verduras.lechuga, verduras.tomateCrudo, verduras.zanahoria, verduras.judiasVerdes, verduras.berenjenas, verduras.pimientas, verduras.esparragos, verduras.gazpacho, verduras.otrasVerduras, verduras.cebolla, verduras.ajo, verduras.perejil, verduras.patatasFritasComerciales, verduras.patatasFritasCaseras, verduras.patatasFritasAsadas, verduras.setas FROM verduras,users WHERE verduras.user_id = users.id;");
            return view('admin.verduras.index',compact('verduras'));
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
        $verduras = verdura::orderBy('user_id')->pluck('user_id','id');
        
        return view('admin.verduras.create',compact('verduras'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(verduraStoreRequest $request)
    {
        
        $verdura = verdura::create($request->all()); //solo es aceptable si esta el fillable
       
        return redirect()->route('frutas.create')
        ->with('info','Puede continuar su cuestionario con Dietas');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\verduras  $verduras
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $verdura = verdura::find($id);
        return view('admin.verduras.show',compact('verdura'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\verduras  $verduras
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $verdura = verdura::find($id);
       
        return view('admin.verduras.edit',compact('verdura'));//muestra el formulario      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\verduras  $verduras
     * @return \Illuminate\Http\Response
     */
    public function update(verduraUpdateRequest $request, $id)
    {
        $verdura = verdura::find($id); 
        $verdura->fill($request->all())->save();    
        return redirect()->route('verduras.edit',$verdura->id)
                ->with('info','El verdura ha sido actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\verduras  $verduras
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $verdura= verdura::find($id);
        $verdura->delete();
        return back()->with('info','El verdura ha sido eliminado');
    }
} 

