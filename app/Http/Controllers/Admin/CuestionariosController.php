<?php 
namespace App\Http\Controllers\Admin;

use Storage;
use \Illuminate\Http\Request;
use App\Http\Requests\CuestionarioStoreRequest;
use App\Http\Requests\CuestionarioUpdateRequest;
use App\Http\Controllers\Controller;
use App\Cuestionario;
use App\Sujeto;
class CuestionariosController extends Controller {

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
        $cuestionarios=Cuestionario::orderBy('id','DESC')->paginate();

       return view('admin.cuestionarios.index',compact('cuestionarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cuestionarios = Cuestionario::orderBy('nombreCuestionario')->pluck('nombreCuestionario','id');
        return view('admin.cuestionarios.create',compact('cuestionarios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CuestionarioStoreRequest $request)
    {
        $cuestionario = Cuestionario::create($request->all()); //solo es aceptable si esta el fillable
        //File
        if($request->file('archivo')){

            $path = Storage::disk('public')->put('files',$request->file('archivo'));
            $cuestionario->fill(['archivo' => asset($path)])->save();
             }
       
       
        return redirect()->route('cuestionarios.edit',$cuestionario->id)
        ->with('info','El Cuestionario ha sido creado con éxito');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\sujetos  $sujetos
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cuestionario = Cuestionario::find($id);
        return view('admin.cuestionarios.show',compact('cuestionario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\sujetos  $sujetos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cuestionario = Cuestionario::find($id);
        return view('admin.cuestionarios.edit',compact('cuestionario'));//muestra el formulario      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\sujetos  $sujetos
     * @return \Illuminate\Http\Response
     */
    public function update(CuestionarioUpdateRequest $request, $id)
    {
        $cuestionario = Cuestionario::find($id); 
        $cuestionario->fill($request->all())->save();
        //Image
        if($request->file('archivo')){

            $path = Storage::disk('public')->put('files',$request->file('archivo'));
            $cuestionario->fill(['archivo' => asset($path)])->save();
             }
        
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\sujetos  $sujetos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cuestionario= Cuestionario::find($id);
        $cuestionario->delete();
        return back()->with('info','El cuestionario ha sido eliminado');
    }
}