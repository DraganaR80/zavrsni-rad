<?php

namespace App\Http\Controllers;
use App\Models\Client;
use App\Models\Menu;
use Illuminate\Http\Request;

class ClientController extends Controller{

public function index(){

    //iylistava sve klijente
    $clients= Client::paginate(10);
     return view(view : 'clients.index')->with([
        'clients'=>$clients
     ]);
}
public function create(){
//forma gde kreiramo klijente
$menu=Menu::all();
return view(view:'clients.create')->with([
    'menu'=>$menu,
]);
}

public function edit(Request $request,int $id){
//iymena klijenata
$client= Client::findOrFail($id);
$menu= Menu::all();

return view(view:'clients.edit')->with([
    'menu'=>$menu,
     'client'=>$client,
]);
}
public function store(){
//cuvanje podataka



}

public function update(){
//za menjanje vec postojecih 


}

public function destroy(){

    //brisanje klijenata
}


}
