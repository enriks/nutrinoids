<?php
namespace App\Http\Controllers\Admin;

use Storage;
use \Illuminate\Http\Request;
use App\Http\Requests\DantropometricoStoreRequest;
use App\Http\Requests\DantropometricoUpdateRequest;
use App\Http\Controllers\Controller;


use Illuminate\Support\Facades\DB;
use App\User;
use App\Dantropometrico;



class DantropometricosController extends Controller
{
    
   
  /*  public function form_antro_sujeto($id){

        
        $sujeto=Sujeto::find($id);
        $dantropometricos= DB::select('SELECT * FROM dantropometricos INNER JOIN sujetos WHERE dantropometricos.id = sujetos.dantropometricos_id AND sujetos.id=?',[$id]);
        return view("formularios.form_antro_sujeto")
        ->with("sujeto",$sujeto)
        ->with("dantropometricos",$dantropometricos);
         
      
     }
 
  
     public function agregar_antro(Request $request ){
          //funcion para modificar datos antro de cada sujeto
          dump($request); 
          $antro= new Dantropometrico;
          $antro->sujetos_id= $request->input("sujetos_id");
          
          $antro->peso= $request->input("antro_peso");
          $antro->talla= $request->input("talla_antro");
          $antro->imc= $request->input("imc_antro");
          $antro->metBasal= $request->input("basal_antro");
          $antro->masaGrasa= $request->input("grasa_antro");
          $antro->masaLibre= $request->input("libre_antro");
          $antro->masaMusculo= $request->input("musculo_antro");
          $antro->masaOsea= $request->input("osea_antro");
          $antro->agua= $request->input("agua_antro");
          $resul= $dantropometricos->save();
 
         if($resul){            
             return view("mensajes.msj_correcto")->with("msj","Agregado Correctamente");   
         }
         else
         {            
              return view("mensajes.msj_rechazado")->with("msj","hubo un error vuelva a intentarlo");  
         }
 
         
     }
 
     public function borrar_antro($id){
 
        $antro=Dantropometrico::find($id);
        $resul=$antro->delete();
 
         if($resul){            
             return view("mensajes.msj_correcto")->with("msj","Borrado correctamente");   
         }
         else
         {            
              return view("mensajes.msj_rechazado")->with("msj","hubo un error vuelva a intentarlo");  
         }
 
 
 
     }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
	{
		$this->middleware('auth');
	}


	public function index()
    {
        $this->middleware('auth');
        $dantropometricos=DB::SELECT("SELECT users.name, users.lastname, users.codigo, dantropometricos.id, dantropometricos.user_id, dantropometricos.peso, dantropometricos.talla, dantropometricos.imc, dantropometricos.metBasal, dantropometricos.masaGrasa, dantropometricos.masaGrasapor, dantropometricos.masaLibre, dantropometricos.masaLibrepor, dantropometricos.masaMusculo, dantropometricos.masaMusculopor, dantropometricos.masaOsea, dantropometricos.masaOseapor, dantropometricos.agua FROM dantropometricos,users WHERE dantropometricos.user_id = users.id");
        return view('admin.dantropometricos.index',compact('dantropometricos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = DB::SELECT('SELECT id, name, lastname, codigo FROM users WHERE rol="SUJETO"');

        return view('admin.dantropometricos.create',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(dantropometricoStoreRequest $request)
    {
        
        $dantropometrico = Dantropometrico::create($request->all()); //solo es aceptable si esta el fillable
        
        
        return redirect('/');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\dantropometricos  $dantropometricos
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dantropometrico = Dantropometrico::find($id);
        return view('admin.dantropometricos.show',compact('dantropometrico'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\dantropometricos  $dantropometricos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dantropometrico = Dantropometrico::find($id);
        return view('admin.dantropometricos.edit',compact('dantropometrico'));//muestra el formulario      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\dantropometricos  $dantropometricos
     * @return \Illuminate\Http\Response
     */
    public function update(dantropometricoUpdateRequest $request, $id)
    {
        $dantropometrico = Dantropometrico::find($id); 
        $dantropometrico->fill($request->all())->save();    
        return redirect('admin.clinicos.create')->with('info','Puede continuar su cuestionario con el historial clinicos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\dantropometricos  $dantropometricos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dantropometrico= Dantropometrico::find($id);
        $dantropometrico->delete();
        return back()->with('info','El dantropometrico ha sido eliminado');
    }
}