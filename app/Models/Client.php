<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $casts=[

      'first_name'=>'string',
      'surname_name'=>'string',
      'email'=>'string',
      'phone'=>'string',

    ];

public function orders(){

    return $this->belongsToMany(related:Order::class, table:'orders');



}

}
