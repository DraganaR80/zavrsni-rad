<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use App\Services\MenuService;
use App\Http\Requests\MenuRequest;

class MenusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menu = Menu::paginate(10);
        return response ()->json(['menu'=> $menu]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(view:'menu.create');
    }

    public function store(MenuRequest $request){
          $service=new MenuService();
          $service->storeMenu($request, new Menu());
          return redirect()->route(route:'menu.index');

    }
   
   
    public function edit(Request $request,Menu $menu)
    {
        return view(view:'menu.edit')-> with(['menu'=>$menu,]); //vraca taj proizvod kioji se edituje
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menu $menu)
    {
        $service=new MenuService();
        $service->storeMenu($request, $menu);

        return redirect()->route(route:'products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,Menu $menu)
    {
        $menu->delete();

        return redirect()->route(route:'menu.index');
    }
}
