<?php

namespace App\Http\Controllers;
use App\Services\ClientService;
use App\Http\Requests\ClientStoreRequest;
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
$menu=Menu::all();//ovo preispitati
return view(view:'clients.create')->with([
    'menu'=>$menu,
]);
}

public function edit(Request $request,Client $client){
//iymena klijenata
////$client= Client::findOrFail($id);
$menu= Menu::all();

return view(view:'clients.edit')->with([
    'menu'=>$menu,
     'client'=>$client,
]);
}
public function store(ClientStoreRequest $request){
//cuvanje podataka
$client= new Client(); 
$clientService=new ClientService();
$clientService->storeClient($request,$client);
return redirect()->route(route:'clients.index');

}

public function update(ClientStoreRequest $request, Client $client){
//za menjanje vec postojecih 
//$client=Client::findOrFail($id);
$clientService=new ClientService();
$clientService->storeClient($request,$client);
return redirect()->route(route:'clients.index');
}

public function destroy(ClientStoreRequest $request, Client $client){
    //$client=Client::findOrFail($id);
    $client->delete();
    //brisanje klijenata
    return redirect()->route(route:'clients.index');
}


}
