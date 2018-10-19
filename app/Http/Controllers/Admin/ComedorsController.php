<?php

namespace App\Http\Controllers\Admin;

use Storage;
use \Illuminate\Http\Request;
use App\Http\Requests\comedorStoreRequest;
use App\Http\Requests\comedorUpdateRequest;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use App\Sujeto;
use App\Dieta;
use App\comedor;

class comedorsController extends Controller
{
    public function __construct()
	{
		$this->middleware('auth');
	}


	public function index()
    {
        $this->middleware('auth');
        if(\Auth()->user()->rol == "ADMIN"){
            
            $comedors=DB::SELECT("SELECT users.name, users.lastname, users.codigo, com.id, com.user_id, com.pg1, com.pg2, com.pg3, com.pg4, com.pg5, com.pg6, com.pg7, com.pg8, com.pg9, com.pg10, com.total FROM comemocional AS com, users WHERE com.user_id = users.id");
        return view('admin.comedors.index',compact('comedors'));
        
        }
        return redirect('/');
        //ROL IMPORTANTE CODIGO
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comedors = comedor::orderBy('user_id')->pluck('user_id','id');
        
        return view('admin.comedors.create',compact('comedors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(comedorStoreRequest $request)
    {
        
        $comedor = comedor::create($request->all()); //solo es aceptable si esta el fillable
       
        return redirect('/');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\comedors  $comedors
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comedor = comedor::find($id);
        return view('admin.comedors.show',compact('comedor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\comedors  $comedors
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comedor = comedor::find($id);
       
        return view('admin.comedors.edit',compact('comedor'));//muestra el formulario      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\comedors  $comedors
     * @return \Illuminate\Http\Response
     */
    public function update(comedorUpdateRequest $request, $id)
    {
        $comedor = comedor::find($id); 
        $comedor->fill($request->all())->save();    
        return redirect()->route('comedors.edit',$comedor->id)
                ->with('info','La comedor ha sido actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\comedors  $comedors
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comedor= comedor::find($id);
        $comedor->delete();
        return back()->with('info','la comedor ha sido eliminado');
    }
} 

