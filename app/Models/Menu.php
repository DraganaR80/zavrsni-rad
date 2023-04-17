<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $fillable=[
'type',
'name',
'quantity',
'price'

    ];

public function clients(){

    return $this->belongsToMany(related:Client::class, table:'orders');
}

}
