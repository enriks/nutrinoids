<?php

namespace App\Http\Controllers\Admin;

use Storage;
use \Illuminate\Http\Request;
use App\Http\Requests\ClinicoStoreRequest;
use App\Http\Requests\ClinicoUpdateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Sujeto;
use App\Dieta;
use App\Clinico;

class ClinicosController extends Controller
{
    public function __construct()
	{
		$this->middleware('auth');
	}


	public function index()
    {

        


        $this->middleware('auth');
        if(\Auth()->user()->rol == "ADMIN"){
            $Clinicos=DB::select('SELECT users.name,users.lastname,users.codigo ,clinico.id, clinico.user_id, clinico.antFam, clinico.antPerPat, clinico.antPerQuir,clinico.problemAct,clinico.medic,clinico.alcohol,clinico.fumas,clinico.drogas,clinico.alergia,clinico.problSal FROM clinico,users WHERE users.id = clinico.user_id');
                return view('admin.clinicos.index',compact('Clinicos'));
 
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
        $Clinicos = Clinico::orderBy('user_id')->pluck('user_id','id');
        
        return view('admin.clinicos.create',compact('Clinicos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClinicoStoreRequest $request)
    {
        
        $Clinico = Clinico::create($request->all()); //solo es aceptable si esta el fillable
       
        return redirect()->route('vitamins.create')
        ->with('info','Puede continuar su cuestionario con suplementos de vitaminas y minerales');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Clinicos  $Clinicos
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Clinico = Clinico::find($id);
        return view('admin.clinicos.show',compact('Clinico'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Clinicos  $Clinicos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Clinico = Clinico::find($id);
       
        return view('admin.clinicos.edit',compact('Clinico'));//muestra el formulario      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Clinicos  $Clinicos
     * @return \Illuminate\Http\Response
     */
    public function update(ClinicoUpdateRequest $request, $id)
    {
        $Clinico = Clinico::find($id); 
        $Clinico->fill($request->all())->save();    
        return redirect()->route('clinicos.edit',$Clinico->id)
                ->with('info','El Clinico ha sido actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Clinicos  $Clinicos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Clinico= Clinico::find($id);
        $Clinico->delete();
        return back()->with('info','El Clinico ha sido eliminado');
    }
} 
