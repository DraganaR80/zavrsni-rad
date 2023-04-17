<?php

namespace App\Http\Controllers\Auth;

use App\Services\AuthenticationService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;

class ClientAuthController extends Controller
{

    public function loginShow(){

        return view(view:'auth.login');
    }
    public function login(LoginRequest $request){

        $service= new AuthenticationService();
        $success=$service->login(
            guard:'web',
            $request->input(key:'email'),
            $request->input(key:'password')


        );
        return $success?
 redirect()->route(route:'client.dashboard'): 
 redirect()->back()->withErrors([

    'email'=>'Credentials not found',
 ]);
    }

    public function logout(){
        $service = new AuthenticationService();
        $service->logout(guard:'web');
        return redirect()->route(route:'client.login.show');
        
            }
}
