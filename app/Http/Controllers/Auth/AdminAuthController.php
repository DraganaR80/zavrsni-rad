<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\AuthenticationService;
use App\Http\Requests\Auth\LoginRequest;

class AdminAuthController extends Controller
{

    public function loginShow(){
return view (view:'auth.admin_login');

    }
    public function login(LoginRequest $request){
$service =new AuthenticationService();
$success=$service->login(
    guard:'admin',
    $request->input(key:'email'),
    $request->input(key:'password'),
    
);
return $success?
 redirect()->route(route:'admin.dashboard'): 
 redirect()->back()->withErrors([

    'email'=>'Credentials not found',
 ]);
    }

    public function logout(){
$service = new AuthenticationService();
$service->logout(guard:'admin');
return redirect()->route(route:'admin.login.show');

    }
}
