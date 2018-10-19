<?php

namespace App\Http\Controllers\Admin;

use Storage;
use \Illuminate\Http\Request;
use App\Http\Requests\BolleriaStoreRequest;
use App\Http\Requests\BolleriaUpdateRequest;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use App\Sujeto;
use App\Dieta;
use App\Bolleria;

class BolleriasController extends Controller
{
    public function __construct()
	{
		$this->middleware('auth');
	}


	public function index()
    {
        $this->middleware('auth');

        if(\Auth()->user()->rol == "ADMIN"){
            $Bollerias=DB::SELECT("SELECT users.name, users.lastname, users.codigo, bol.id, bol.user_id, bol.galletasMaria, bol.galletasIntegrales, bol.galletasChocolate, bol.reposteria, bol.croissant, bol.donuts, bol.magdalenas, bol.pasteles, bol.churros, bol.chocolates, bol.cacaoPolvo, bol.turron, bol.matecados FROM bolleriapasteleria AS bol,users WHERE bol.user_id = users.id");
        return view('admin.bollerias.index',compact('Bollerias'));
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
        $Bollerias = Bolleria::orderBy('user_id')->pluck('user_id','id');
        
        return view('admin.bollerias.create',compact('Bollerias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BolleriaStoreRequest $request)
    {
        
        $Bolleria = Bolleria::create($request->all()); //solo es aceptable si esta el fillable
       
        return redirect()->route('miscelaneas.create')
        ->with('info','Puede continuar su cuestionario con Miscelaneas');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\bollerias  $bollerias
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Bolleria = Bolleria::find($id);
        return view('admin.bollerias.show',compact('Bolleria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\bollerias  $bollerias
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Bolleria = Bolleria::find($id);
       
        return view('admin.bollerias.edit',compact('Bolleria'));//muestra el formulario      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\bollerias  $bollerias
     * @return \Illuminate\Http\Response
     */
    public function update(bolleriaUpdateRequest $request, $id)
    {
        $Bolleria = Bolleria::find($id); 
        $Bolleria->fill($request->all())->save();    
        return redirect()->route('bollerias.edit',$Bolleria->id)
                ->with('info','El bolleria ha sido actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\bollerias  $bollerias
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Bolleria= Bolleria::find($id);
        $Bolleria->delete();
        return back()->with('info','El bolleria ha sido eliminado');
    }
} 

