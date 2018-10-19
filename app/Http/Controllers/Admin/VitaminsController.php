<?php

namespace App\Http\Controllers\Admin;

use Storage;
use \Illuminate\Http\Request;
use App\Http\Requests\VitaminStoreRequest;
use App\Http\Requests\VitaminUpdateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Sujeto;
use App\Dieta;
use App\Vitamin;

class VitaminsController extends Controller
{
    public function __construct()
	{
		$this->middleware('auth');
	}


	public function index()
    {

        


        $this->middleware('auth');
        if(\Auth()->user()->rol == "ADMIN"){
            $Vitamins=DB::select('SELECT users.name,users.lastname,users.codigo ,vitamin.id, vitamin.user_id, vitamin.vitamin,vitamin.cantPastComVit,vitamin.cantTiempComVit,vitamin.cantPastVitC,vitamin.cantTiempVitC,vitamin.cantPastVitA,vitamin.cantTiempVitA,vitamin.cantPastComVitB,vitamin.cantTiempComVitB,vitamin.cantPastHierro,vitamin.cantTiempHierrro,vitamin.cantPastCalcio,vitamin.cantTiempCalcio,vitamin.cantPastCalVitD,vitamin.cantTiempCalVitD,vitamin.cantPastAcdFol,vitamin.cantTiempAcdFol,vitamin.cantPastDerSoj,vitamin.cantTiempDerSoj,vitamin.cantPastAcdGrs,vitamin.cantTiempAcdGrs,vitamin.cantPastOtros,vitamin.cantTiempOtros FROM vitamin,users WHERE users.id = vitamin.user_id');
                return view('admin.vitamins.index',compact('Vitamins'));

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
        $Vitamins = Vitamin::orderBy('user_id')->pluck('user_id','id');
        
        return view('admin.vitamins.create',compact('Vitamins'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VitaminStoreRequest $request)
    {
        
        $Vitamin = Vitamin::create($request->all()); //solo es aceptable si esta el fillable
       
        return redirect()->route('estudios.create')->with('info','Ha comenzado el cuestionario de estudios');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vitamins  $Vitamins
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Vitamin = Vitamin::find($id);
        return view('admin.vitamins.show',compact('Vitamin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vitamins  $Vitamins
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Vitamin = Vitamin::find($id);
       
        return view('admin.vitamins.edit',compact('Vitamin'));//muestra el formulario      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vitamins  $Vitamins
     * @return \Illuminate\Http\Response
     */
    public function update(VitaminUpdateRequest $request, $id)
    {
        $Vitamin = Vitamin::find($id); 
        $Vitamin->fill($request->all())->save();    
        return redirect()->route('vitamins.edit',$Vitamin->id)
                ->with('info','El Vitamin ha sido actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vitamins  $Vitamins
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Vitamin= Vitamin::find($id);
        $Vitamin->delete();
        return back()->with('info','El Vitamin ha sido eliminado');
    }
} 
