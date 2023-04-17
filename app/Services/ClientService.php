<?php
namespace App\Services;

use App\Models\Order;
use App\Models\Client;
use App\Http\Requests\ClientStoreRequest;

class ClientService{

    public function storeClient(ClientStoreRequest $request, Client $client){

      
$client-> first_name= $request->input(key:'first_name');
$client->surname_name=$request->intput(key:'surname_name');
$client->email= $request->input(key:'email');
$client->phone=$request->input(key:'phone');
$client->save();

$menuIds=$request->input(key:'menu_ids');
if($menuIds===null) $menuIds=[];//ukoliko nista nije cekirano
    }


//Order::where('client_id','=',$client->id)

//->whereNotIn('menu_id', $menuIds);

}