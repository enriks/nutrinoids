<?php
namespace App\Http\Controllers\Admin;

use Storage;
use \Illuminate\Http\Request;
use App\Http\Requests\DietaStoreRequest;
use App\Http\Requests\DietaUpdateRequest;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use App\Sujeto;
use App\Dieta;


class DietasController extends Controller
{
    public function __construct()
	{
		$this->middleware('auth');
	}


	public function index()
    {
        $this->middleware('auth');
        if(\Auth()->user()->rol == "ADMIN"){
        $dietas=DB::SELECT("SELECT users.name, users.lastname, users.codigo, di.id, di.user_id, di.frecuencia, di.adherencia FROM dietas AS di, users WHERE di.user_id = users.id");
        return view('admin.dietas.index',compact('dietas'));

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
        $dietas = Dieta::orderBy('user_id')->pluck('user_id','id');
        return view('admin.dietas.create',compact('dietas','dieta'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DietaStoreRequest $request)
    {
        
        $dieta = Dieta::create($request->all()); //solo es aceptable si esta el fillable
       
        return redirect()->route('clinicos.create')
        ->with('info','Ha comenzado su cuestionario de historial clinico');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dietas  $Dietas
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dieta = Dieta::find($id);
        return view('admin.dietas.show',compact('dieta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dietas  $Dietas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dieta = Dieta::find($id);
        return view('admin.dietas.edit',compact('dietas','dieta'));//muestra el formulario      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dietas  $Dietas
     * @return \Illuminate\Http\Response
     */
    public function update(DietaUpdateRequest $request, $id)
    {
        $dieta = Dieta::find($id); 
        $dieta->fill($request->all())->save();    
        return redirect()->route('dietas.edit',$dieta->id)
                ->with('info','El Dieta ha sido actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dietas  $Dietas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dieta= Dieta::find($id);
        $dieta->delete();
        return back()->with('info','El dieta ha sido eliminado');
    }
} 


