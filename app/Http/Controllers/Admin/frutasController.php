<?php

namespace App\Http\Controllers\Admin;

use Storage;
use \Illuminate\Http\Request;
use App\Http\Requests\FrutaStoreRequest;
use App\Http\Requests\FrutaUpdateRequest;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use App\Sujeto;
use App\Dieta;
use App\Fruta;

class FrutasController extends Controller
{
    public function __construct()
	{
		$this->middleware('auth');
	}


	public function index()
    {
        $this->middleware('auth');
        if(\Auth()->user()->rol == "ADMIN"){
        $Frutas=DB::SELECT("SELECT  users.name, users.lastname, users.codigo, fru.id ,  fru.user_id ,  fru.naranja ,  fru.platano ,  fru.manzana ,  fru.fresas ,  fru.cerezas ,  fru.melocoton ,  fru.sandia ,  fru.melon ,  fru.kiwi ,  fru.uvas ,  fru.aceitunas ,  fru.frutasAlmibar ,  fru.datiles ,  fru.almendras ,  fru.nueces  FROM  frutas AS fru,users WHERE fru.user_id = users.id;");
        return view('admin.frutas.index',compact('Frutas'));

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
        $Frutas = Fruta::orderBy('user_id')->pluck('user_id','id');
        
        return view('admin.frutas.create',compact('Frutas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(frutaStoreRequest $request)
    {
        
        $Fruta = Fruta::create($request->all()); //solo es aceptable si esta el fillable
       
        return redirect()->route('legumbres.create')
        ->with('info','Puede continuar su cuestionario con Dietas');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\frutas  $frutas
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Fruta = Fruta::find($id);
        return view('admin.frutas.show',compact('Fruta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\frutas  $frutas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Fruta = Fruta::find($id);
       
        return view('admin.frutas.edit',compact('Fruta'));//muestra el formulario      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\frutas  $frutas
     * @return \Illuminate\Http\Response
     */
    public function update(frutaUpdateRequest $request, $id)
    {
        $Fruta = Fruta::find($id); 
        $Fruta->fill($request->all())->save();    
        return redirect()->route('frutas.edit',$Fruta->id)
                ->with('info','La fruta ha sido actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\frutas  $frutas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Fruta= Fruta::find($id);
        $Fruta->delete();
        return back()->with('info','la fruta ha sido eliminado');
    }
} 

