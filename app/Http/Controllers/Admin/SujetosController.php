<?php

namespace App\Http\Controllers\Admin;

use Storage;
use \Illuminate\Http\Request;
use App\Http\Requests\sujetoStoreRequest;
use App\Http\Requests\sujetoUpdateRequest;
use App\Http\Controllers\Controller;
use App\Sujeto;
use App\Nacionalidade;
use App\Comunidade;
use App\Poblacione;
use App\Cuestionario;
use App\Dietetica;
class sujetosController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}


	public function index()
    {
        $this->middleware('auth');
        $sujetos=Sujeto::orderBy('id','DESC')->paginate();
       return view('admin.sujetos.index',compact('sujetos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sujetos = Sujeto::orderBy('codigo')->pluck('codigo','id');
        $nacionalidades = Nacionalidade::orderBy('nacionalidad')->pluck('nacionalidad','id');
        $comunidades = Comunidade::orderBy('comunidadAutonoma')->pluck('comunidadAutonoma','id');
        $poblaciones = Poblacione::orderBy('poblaciones')->pluck('poblaciones','id');
        $cuestionarios = Cuestionario::orderBy('nombreCuestionario')->get();
      
        return view('admin.sujetos.create',compact('sujetos','nacionalidades','comunidades','poblaciones','cuestionarios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(sujetoStoreRequest $request)
    {
        $sujeto = Sujeto::create($request->all()); //solo es aceptable si esta el fillable
        //Imagen
        if($request->file('imagenurl')){

            $path = Storage::disk('public')->put('Images',$request->file('imagenurl'));
            $sujeto->fill(['imagenurl' => asset($path)])->save();
             }
       //Cuestionarios
       $sujeto->cuestionario()->attach($request->get('cuestionarios'));
        
        return redirect()->route('dieteticas.create')
        ->with('info','Puede comenzar su cuestionario sobre hábitos dietéticos');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\sujetos  $sujetos
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sujeto = sujeto::find($id);
        return view('admin.sujetos.show',compact('sujeto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\sujetos  $sujetos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sujeto = Sujeto::find($id);
        $nacionalidades = Nacionalidade::orderBy('nacionalidad','ASC')->pluck('nacionalidad','id');
        $comunidades = Comunidade::orderBy('comunidadAutonoma','ASC')->pluck('comunidadAutonoma','id');
        $poblaciones = Poblacione::orderBy('poblaciones','ASC')->pluck('poblaciones','id');
        $cuestionarios= Cuestionario::orderBy('nombreCuestionario','ASC')->get();
        return view('admin.sujetos.edit',compact('sujeto','nacionalidades','comunidades','poblaciones','cuestionarios'));//muestra el formulario      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\sujetos  $sujetos
     * @return \Illuminate\Http\Response
     */
    public function update(SujetoUpdateRequest $request, $id)
    {
        $sujeto = Sujeto::find($id); 
        $sujeto->fill($request->all())->save();
        
         //Imagen
         if($request->file('imagenurl')){

            $path = Storage::disk('public')->put('Images',$request->file('imagenurl'));
            $sujeto->fill(['imagenurl' => asset($path)])->save();
             }
         //Cuestionarios
       $sujeto->cuestionario()->attach($request->get('cuestionarios'));       
        return redirect()->route('sujetos.edit',$sujeto->id)
                ->with('info','El sujeto ha sido actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\sujetos  $sujetos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sujeto= Sujeto::find($id);
        $sujeto->delete();
        return back()->with('info','El sujeto ha sido eliminado');
    }

   
}
