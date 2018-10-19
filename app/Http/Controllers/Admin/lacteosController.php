<?php

namespace App\Http\Controllers\Admin;

use Storage;
use \Illuminate\Http\Request;
use App\Http\Requests\LacteoStoreRequest;
use App\Http\Requests\LacteoUpdateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Sujeto;
use App\Dieta;
use App\Lacteo;

class lacteosController extends Controller
{
    public function __construct()
	{
		$this->middleware('auth');
	}


	public function index()
    {
        $this->middleware('auth');

        //$Lacteos=Lacteo::orderBy('id','DESC')->paginate();
        if(\Auth()->user()->rol == "ADMIN"){
            $Lacteos = DB::select("SELECT users.name AS name , users.lastname ,users.codigo,lacteos.id, lacteos.lecheEnt ,lacteos.lecheSemi,lacteos.lecheDesc,lacteos.lecheCond,lacteos.nata,lacteos.batidoLeche,lacteos.yogurtEnt,lacteos.yogurtDesc,lacteos.petit,lacteos.requeson,lacteos.quesoPorciones,lacteos.otrosQuesos,lacteos.quesoBlanco,lacteos.natillas,lacteos.helados from lacteos,users WHERE lacteos.user_id = users.id ORDER BY users.name");
        return view('admin.lacteos.index',compact('Lacteos'));
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
        $Lacteos = Lacteo::orderBy('user_id')->pluck('user_id','id');
        
        return view('admin.lacteos.create',compact('Lacteos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LacteoStoreRequest $request)
    {
        
        $Lacteo = Lacteo::create($request->all()); //solo es aceptable si esta el fillable
        
        return redirect()->route('hucapes.create')
        ->with('info','Puede continuar su cuestionario con Huevos, carnes, pescados');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lacteos  $Lacteos
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Lacteo = Lacteo::find($id);
        return view('admin.lacteos.show',compact('Lacteo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lacteos  $Lacteos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Lacteo = Lacteo::find($id);
       
        return view('admin.lacteos.edit',compact('Lacteo'));//muestra el formulario      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lacteos  $Lacteos
     * @return \Illuminate\Http\Response
     */
    public function update(LacteoUpdateRequest $request, $id)
    {
        $Lacteo = Lacteo::find($id); 
        $Lacteo->fill($request->all())->save();
        return redirect()->route('lacteos.edit',$Lacteo->id)
                ->with('info','El Lacteo ha sido actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lacteos  $Lacteos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Lacteo= Lacteo::find($id);
        $Lacteo->delete();
        return back()->with('info','El Lacteo ha sido eliminado');
    }
} 

