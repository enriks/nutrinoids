<?php

namespace App\Http\Controllers\Admin;

use Storage;
use \Illuminate\Http\Request;
use App\Http\Requests\AceiteStoreRequest;
use App\Http\Requests\AceiteUpdateRequest;
use App\Http\Controllers\Controller;
use App\Sujeto;
use App\Dieta;
use App\Aceite;

class IndicesController extends Controller
{
    public function __construct()
	{
		$this->middleware('auth');
	}


	public function index()
    {
        $this->middleware('auth');
        if(\Auth()->user()->rol == "ADMIN"){
            
        return view('admin.indices.index',compact(''));
        
        }
        return redirect('/');

       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   
} 

