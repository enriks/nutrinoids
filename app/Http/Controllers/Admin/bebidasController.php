<?php

namespace App\Http\Controllers\Admin;

use Storage;
use \Illuminate\Http\Request;
use App\Http\Requests\BebidaStoreRequest;
use App\Http\Requests\BebidaUpdateRequest;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use App\Sujeto;
use App\Dieta;
use App\Bebida;

class BebidasController extends Controller
{
    public function __construct()
	{
		$this->middleware('auth');
	}


	public function index()
    {
        $this->middleware('auth');
        if(\Auth()->user()->rol == "ADMIN"){
            $Bebidas=DB::SELECT('SELECT users.name, users.lastname, users.codigo, b.id, b.user_id, b.bebidasCabonatadasAzucar, b.bebidasCarbonatadasBajasCalorias, b.zumoNaranja, b.zumoOtrasFrutas, b.cafeDesc, b.cafe, b.te, b.mosto, b.vinoRosado, b.vinoMoscatel, b.vinoTintoJoven, b.vinoTintoAñejo, b.vinoBlanco, b.cerveza, b.licores, b.destilados FROM bebidas AS b,users WHERE b.user_id = users.id');
        return view('admin.bebidas.index',compact('Bebidas'));
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
        $Bebidas = Bebida::orderBy('user_id')->pluck('user_id','id');
        
        return view('admin.bebidas.create',compact('Bebidas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BebidaStoreRequest $request)
    {
        
        $Bebida = Bebida::create($request->all()); //solo es aceptable si esta el fillable

        return redirect('/')
        ->with('info','Ha culminado con éxito su cuestionario');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bebidas  $Bebidas
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Bebida = Bebida::find($id);
        return view('admin.bebidas.show',compact('Bebida'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bebidas  $Bebidas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Bebida = Bebida::find($id);
       
        return view('admin.bebidas.edit',compact('Bebida'));//muestra el formulario      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bebidas  $Bebidas
     * @return \Illuminate\Http\Response
     */
    public function update(BebidaUpdateRequest $request, $id)
    {
        $Bebida = Bebida::find($id); 
        $Bebida->fill($request->all())->save();    
        return redirect()->route('bebidas.edit',$Bebida->id)
                ->with('info','El Bebida ha sido actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bebidas  $Bebidas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Bebida= Bebida::find($id);
        $Bebida->delete();
        return back()->with('info','El Bebida ha sido eliminado');
    }
} 

