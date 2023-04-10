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


public function use(){
return $this->belongsTo(User::class);


}




}
