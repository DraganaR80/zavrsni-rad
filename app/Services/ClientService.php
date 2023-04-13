<?php
namespace App\Services;

use App\Http\Requests\ClientStoreRequest;
use App\Models\Client;

class ClientService{

    public function storeClient(ClientStorerequest $request, Client $client){

      
$client-> first_name= $request->input(key:'first_name');
$client->surname_name=$request->intput(key:'surname_name');
$client->email= $request->input(key:'email');
$client->phone=$request->input(key:'phone');
$client->save();
    }
}

