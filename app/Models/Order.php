<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
protected $fillable=
[
'name and surname',
'adress',
'phone',
'order',
'price',
'delivery price',
'total',
];


public function client(){
return $this->belongsTo(related: Client::class);


}

public function menu(){

    return$this->belongsTo(related:Menu::class);


}


}
