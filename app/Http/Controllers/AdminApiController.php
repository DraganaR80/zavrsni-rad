<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Services\AuthenticationService;
use Illuminate\Http\Request;

class AdminApiController extends Controller
{
    public function login(LoginRequest $request){

$service= new AuthenticationService();
$service->login(guard:'admin', $request->input(key:'email'),
$request->input(key:'password'));

return response()->json(
    [

        "success"=>$success,
    ]
    );

    }

    public function logout(){
        $service= new AuthenticationService();
        $service->logout(guard:'admin');
    
        return response()->json([

            'success'=>true
        ]);
    
    
        

    }
}
