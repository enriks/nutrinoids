<?php

namespace App\Http\Controllers\Admin;

use Storage;
use \Illuminate\Http\Request;
use App\Http\Requests\DieteticaStoreRequest;
use App\Http\Requests\DieteticaUpdateRequest;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use App\Sujeto;
use App\Dieta;
use App\Dietetica;

class DieteticasController extends Controller
{
    public function __construct()
	{
		$this->middleware('auth');
	}


	public function index()
    {
        $this->middleware('auth');

        if(\Auth()->user()->rol == "ADMIN"){
            $dieteticas=DB::SELECT("SELECT users.name,users.lastname,users.codigo, die.id ,  die.user_id ,  die.masApetito ,  die.tardasComer ,  die.alimentosPreferidos ,  die.alimentosNoConsumidos ,  die.alimentosConsumNoAgradan ,  die.alimentosIndigestos ,  die.consumoFrutas ,  die.consumoVerduras ,  die.tecnicas ,  die.quienCocina ,  die.tipoCoccion ,  die.gustaCocinar ,  die.gustaComprar ,  die.frecuenciaCompra ,  die.ingesta ,  die.alergiaAlimentaria ,  die.sustanEstimulante ,  die.horasSueno ,  die.calidadSueno ,  die.hidratacion ,  die.deposiciones ,  die.consistenciaDep  FROM  dieteticas AS die,users  WHERE die.user_id = users.id");
        return view('admin.dieteticas.index',compact('dieteticas'));
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
        $dieteticas = Dietetica::orderBy('user_id')->pluck('user_id','id');
        
        return view('admin.dieteticas.create',compact('dieteticas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DieteticaStoreRequest $request)
    {
        
        $dietetica = Dietetica::create($request->all()); //solo es aceptable si esta el fillable
       
        return redirect()->route('dietas.create')
        ->with('info','Puede continuar su cuestionario con Dietas');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\dieteticas  $dieteticas
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dietetica = dietetica::find($id);
        return view('admin.dieteticas.show',compact('dietetica'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\dieteticas  $dieteticas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dietetica = Dietetica::find($id);
       
        return view('admin.dieteticas.edit',compact('dietetica'));//muestra el formulario      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\dieteticas  $dieteticas
     * @return \Illuminate\Http\Response
     */
    public function update(DieteticaUpdateRequest $request, $id)
    {
        $dietetica = Dietetica::find($id); 
        $dietetica->fill($request->all())->save();    
        return redirect()->route('dieteticas.edit',$dietetica->id)
                ->with('info','El dietetica ha sido actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\dieteticas  $dieteticas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dietetica= Dietetica::find($id);
        $dietetica->delete();
        return back()->with('info','El dietetica ha sido eliminado');
    }
} 

