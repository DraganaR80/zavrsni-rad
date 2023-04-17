<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;

class AuthenticationService{

public function login(string $guard, string $email,string$password):bool
{
return  Auth::guard($guard)->attempt([//vraca tacno i netacno da li je login uspesan ii ne
'email'=>'$email',
'password'=>'$password',]
);
}
public function logout(string $guard){

Auth::guard($guard)->logout();
session()->flush();//brise podatke
session()->regenerate();//generise ono sto se cuva za sesiju

}
    
}