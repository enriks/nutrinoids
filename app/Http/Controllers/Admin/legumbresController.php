<?php

namespace App\Http\Controllers\Admin;

use Storage;
use \Illuminate\Http\Request;
use App\Http\Requests\LegumbreStoreRequest;
use App\Http\Requests\LegumbreUpdateRequest;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use App\Sujeto;
use App\Dieta;
use App\Legumbre;

class LegumbresController extends Controller
{
    public function __construct()
	{
		$this->middleware('auth');
	}


	public function index()
    {
        $this->middleware('auth');
        if(\Auth()->user()->rol == "ADMIN"){
            
            $Legumbres=DB::SELECT("SELECT users.name, users.lastname, users.codigo, legumbrescereales.id, legumbrescereales.user_id, legumbrescereales.lentejas, legumbrescereales.alubias, legumbrescereales.garbanzos, legumbrescereales.guisantes, legumbrescereales.panBlanco, legumbrescereales.panNegro, legumbrescereales.cerealesDesayuno, legumbrescereales.cerealesIntegrales, legumbrescereales.arrozBlanco, legumbrescereales.pasta, legumbrescereales.pizza FROM legumbrescereales,users WHERE legumbrescereales.user_id = users.id");
            return view('admin.legumbres.index',compact('Legumbres'));

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
        $Legumbres = Legumbre::orderBy('user_id')->pluck('user_id','id');
        
        return view('admin.legumbres.create',compact('Legumbres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(legumbreStoreRequest $request)
    {
        
        $Legumbre = Legumbre::create($request->all()); //solo es aceptable si esta el fillable
       
        return redirect()->route('aceites.create')
        ->with('info','Puede continuar su cuestionario con Aceites y grasas');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\legumbres  $legumbres
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Legumbre = Legumbre::find($id);
        return view('admin.legumbres.show',compact('Legumbre'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\legumbres  $legumbres
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Legumbre = Legumbre::find($id);
       
        return view('admin.legumbres.edit',compact('Legumbre'));//muestra el formulario      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\legumbres  $legumbres
     * @return \Illuminate\Http\Response
     */
    public function update(legumbreUpdateRequest $request, $id)
    {
        $Legumbre = Legumbre::find($id); 
        $Legumbre->fill($request->all())->save();    
        return redirect()->route('legumbres.edit',$Legumbre->id)
                ->with('info','El legumbre ha sido actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\legumbres  $legumbres
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Legumbre= Legumbre::find($id);
        $Legumbre->delete();
        return back()->with('info','El legumbre ha sido eliminado');
    }
} 

