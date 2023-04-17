<?php

namespace App\Services;

use App\Models\Menu;
use App\Http\Requests\MenuRequest;

class MenuService{

public function storeMenu(MenuRequest $request,Menu $menu){

$menu->selected=$request->input(key:'selected');
$menu->name=$request->input(key:'name');
$menu->save();


}

}
