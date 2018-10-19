<?php

namespace App\Http\Controllers\Publica;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cuestionario;
use App\User;


class PageController extends Controller
{
    public function entrevistas(){
    	if(\Auth()->user() != null){
	    	if(\Auth()->user()->rol == "ADMIN"){
	    		
	    		return view('admin.indices.index');
			}
			$cuestionarios=Cuestionario::orderBy('id','ASC')->paginate();
	        return view('publica.entrevista',compact('cuestionarios'));

    	}
    	$cuestionarios=Cuestionario::orderBy('id','ASC')->paginate();
	        return view('publica.entrevista',compact('cuestionarios'));
        

    }
     
   
}
