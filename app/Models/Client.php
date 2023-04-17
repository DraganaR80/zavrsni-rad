<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable=[

      'first_name'=>'string',
      'surname_name'=>'string',
      'email'=>'string',
      'phone'=>'string',

    ];


public function menus(){

  return $this->belongsToMany(related:Menu::class,table:'orders');
}


}

