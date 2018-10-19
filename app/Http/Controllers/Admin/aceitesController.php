<?php

namespace App\Http\Controllers\Admin;

use Storage;
use \Illuminate\Http\Request;
use App\Http\Requests\AceiteStoreRequest;
use App\Http\Requests\AceiteUpdateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Sujeto;
use App\Dieta;
use App\Aceite;

class AceitesController extends Controller
{
    public function __construct()
	{
		$this->middleware('auth');
	}


	public function index()
    {

        


        $this->middleware('auth');
        if(\Auth()->user()->rol == "ADMIN"){
            $Aceites=DB::select('SELECT users.name,users.lastname,users.codigo ,aceitesgrasas.id, aceitesgrasas.user_id, aceitesgrasas.aceiteOliva, aceitesgrasas.aceiteOlivaVirgen, aceitesgrasas.aceiteMaiz, aceitesgrasas.aceiteGirasol, aceitesgrasas.aceiteSoja, aceitesgrasas.mezclaAnteriores, aceitesgrasas.margarina, aceitesgrasas.mantequilla, aceitesgrasas.mantecaCerdo FROM aceitesgrasas,users WHERE users.id = aceitesgrasas.user_id');
                return view('admin.aceites.index',compact('Aceites'));

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
        $Aceites = Aceite::orderBy('user_id')->pluck('user_id','id');
        
        return view('admin.aceites.create',compact('Aceites'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AceiteStoreRequest $request)
    {
        
        $Aceite = Aceite::create($request->all()); //solo es aceptable si esta el fillable
       
        return redirect()->route('bollerias.create')
        ->with('info','Puede continuar su cuestionario con Bollerias y pasteleria');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Aceites  $Aceites
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Aceite = Aceite::find($id);
        return view('admin.aceites.show',compact('Aceite'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Aceites  $Aceites
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Aceite = Aceite::find($id);
       
        return view('admin.aceites.edit',compact('Aceite'));//muestra el formulario      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Aceites  $Aceites
     * @return \Illuminate\Http\Response
     */
    public function update(AceiteUpdateRequest $request, $id)
    {
        $Aceite = Aceite::find($id); 
        $Aceite->fill($request->all())->save();    
        return redirect()->route('aceites.edit',$Aceite->id)
                ->with('info','El Aceite ha sido actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Aceites  $Aceites
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Aceite= Aceite::find($id);
        $Aceite->delete();
        return back()->with('info','El Aceite ha sido eliminado');
    }
} 

