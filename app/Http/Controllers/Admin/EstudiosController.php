<?php
namespace App\Http\Controllers\Admin;

use Storage;
use \Illuminate\Http\Request;
use App\Http\Requests\EstudioStoreRequest;
use App\Http\Requests\EstudioUpdateRequest;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use App\Sujeto;
use App\Estudio;


class EstudiosController extends Controller
{
    public function __construct()
	{
		$this->middleware('auth');
	}


	public function index()
    {
        $this->middleware('auth');
        if(\Auth()->user()->rol == "ADMIN"){
            $estudios=DB::SELECT("SELECT  users.name, users.lastname, users.codigo, est.id ,  est.user_id ,  est.nivelEstudio ,  est.estudioActual ,  est.nivelEstudioPadre ,  est.nivelEstudioMadre  FROM  estudios AS est, users WHERE est.user_id = users.id");
        return view('admin.estudios.index',compact('estudios'));
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
        $estudios = Estudio::orderBy('user_id')->pluck('user_id','id');
        return view('admin.estudios.create',compact('estudios','estudio'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EstudioStoreRequest $request)
    {
        
        $estudio = Estudio::create($request->all()); //solo es aceptable si esta el fillable
        return redirect('/')
        ->with('info','Ha culminado con éxito su cuestionario');
        /*return redirect()->route('entrevistas')
        */
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\estudios  $estudios
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estudio = Estudio::find($id);
        return view('admin.estudios.show',compact('estudio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\estudios  $estudios
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estudio = Estudio::find($id);
        return view('admin.estudios.edit',compact('estudio'));//muestra el formulario      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\estudios  $estudios
     * @return \Illuminate\Http\Response
     */
    public function update(EstudioUpdateRequest $request, $id)
    {
        $estudio = Estudio::find($id); 
        $estudio->fill($request->all())->save();    
        return redirect()->route('estudios.edit',$estudio->id)
                ->with('info','El estudio ha sido actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\estudios  $estudios
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estudio= Estudio::find($id);
        $estudio->delete();
        return back()->with('info','El estudio ha sido eliminado');
    }
} 



