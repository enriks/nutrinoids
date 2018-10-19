<?php

namespace App\Http\Controllers\Admin;

use Storage;
use \Illuminate\Http\Request;
use App\Http\Requests\hucapeStoreRequest;
use App\Http\Requests\hucapeUpdateRequest;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use App\Sujeto;
use App\Dieta;
use App\hucape;

class hucapesController extends Controller
{
    public function __construct()
	{
		$this->middleware('auth');
	}


	public function index()
    {
        $this->middleware('auth');
        if(\Auth()->user()->rol == "ADMIN"){
            $hucapes=DB::SELECT("SELECT users.name, users.lastname, users.codigo, hucape.id, hucape.user_id, hucape.huevosGallina, hucape.aveConPiel, hucape.aveSinPiel, hucape.carneTernera, hucape.carneCerdo, hucape.carneCordero, hucape.conejo, hucape.higado, hucape.otrasViceras, hucape.jamonSerrano, hucape.jamonLoncha, hucape.carnesProcesadas, hucape.pates, hucape.hamburguesa, hucape.tocino, hucape.pescadoBlanco, hucape.pescadoAzul, hucape.pescadoSalado, hucape.moluscos, hucape.moluscosCefalopodos, hucape.crustaceos, hucape.mariscosEnlatados, hucape.mariscosAceite FROM hucape, users WHERE hucape.user_id = users.id");
        return view('admin.hucapes.index',compact('hucapes'));
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
        $hucapes = hucape::orderBy('user_id')->pluck('user_id','id');
        
        return view('admin.hucapes.create',compact('hucapes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(hucapeStoreRequest $request)
    {
        
        $hucape = hucape::create($request->all()); //solo es aceptable si esta el fillable
       
        return redirect()->route('verduras.create')
        ->with('info','Puede continuar su cuestionario con Dietas');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\hucapes  $hucapes
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hucape = hucape::find($id);
        return view('admin.hucapes.show',compact('hucape'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\hucapes  $hucapes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hucape = hucape::find($id);
       
        return view('admin.hucapes.edit',compact('hucape'));//muestra el formulario      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\hucapes  $hucapes
     * @return \Illuminate\Http\Response
     */
    public function update(hucapeUpdateRequest $request, $id)
    {
        $hucape = hucape::find($id); 
        $hucape->fill($request->all())->save();    
        return redirect()->route('hucapes.edit',$hucape->id)
                ->with('info','El hucape ha sido actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\hucapes  $hucapes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hucape= hucape::find($id);
        $hucape->delete();
        return back()->with('info','El hucape ha sido eliminado');
    }
} 

