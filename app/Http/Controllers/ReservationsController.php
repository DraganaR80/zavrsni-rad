<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ReservationsController extends Controller
{
    public function index()
    {
 $reservation=Reservation::paginate(10);
 return response()->json([

    'data'=>$reservation
 ]);
 
 //view('admin.reservations.index',['reservation'=>$reservation]);

    }

public function create(){

return view ('admin.reservation.create');


}

public function store( Request $request,Reservation $reservation)
{

    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'surname' => 'required|string',
        'email' => 'required|string|max:255',
        'phone' => 'required|string|max:255',
        'noppl' => 'required',
        'date' => 'required',
        'time' => 'required'
    ]);

    if ($validator->fails()) {
        return response()->json($validator->errors());
    }
$reservation = new Reservation();
$reservation->name=$reservation->input("name");
$reservation->surname=$reservation->input("surname");
$reservation->email=$reservation->input("email");
$reservation->phone=$reservation->input("phone");
$reservation->noppl=$reservation->input("noppl");
$reservation->date=$reservation->input("date");
$reservation->time=$reservation->input("time");

$reservation->save();
return response()->json([
    'id' => $reservation->id,
    'name' => $reservation->name,
    'surname' => $reservation->surname,
    'email' => $reservation->image,
    'phone' => $reservation->status,
    'noppl' => $reservation->noppl,
    'date' => $reservation->date,
    'time' => $reservation->time
    ]);
//redirect('admin.reservations.index');

}

public function show(Reservation $reservation, $id)
    {
        $reservation=Reservation::find($id);
        return response()->json([
    
            'id' => $reservation->id,
            'name' => $reservation->name,
            'surname' => $reservation->surname,
            'email' => $reservation->image,
            'phone' => $reservation->status,
            'noppl' => $reservation->noppl,
            'date' => $reservation->date,
            'time' => $reservation->time
        
    ]);



}
}