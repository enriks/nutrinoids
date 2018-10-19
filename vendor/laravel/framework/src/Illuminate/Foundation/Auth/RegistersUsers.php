<?php

namespace Illuminate\Foundation\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;

use Illuminate\Support\Facades\DB;

trait RegistersUsers
{
    use RedirectsUsers;

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        $codigo=$this->getRandomCode();
        return view('auth.register',compact('codigo'));
    }
    function getRandomCode(){
         $Last = DB::select("SELECT COUNT(users.id) AS total from users WHERE users.rol = 'SUJETO' ");
       
        $Last = $Last[0]->total + 1;
        if($Last<100){
            $codigo = 'NUT-00'.$Last;
        }elseif ($Last>=100) {
            $codigo = 'NUT-0'.$Last;
        }elseif ($Last>=1000) {
            $codigo = 'NUT-'.$Last;
        }  
        return $codigo;
    }
    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        $this->guard()->login($user);

        return $this->registered($request, $user)
                        ?: redirect($this->redirectPath());
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard();
    }

    /**
     * The user has been registered.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function registered(Request $request, $user)
    {
        //
    }
}
