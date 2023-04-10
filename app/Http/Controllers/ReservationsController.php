<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
class ReservationsController extends Controller
{
    public function index()
    {
 $reservation=Reservation::paginate(10);
 return view('admin.reservations.index',['reservation'=>$reservation]);

    }

public function create(){

return view ('admin.reservation.create');


}

public function store(Reservation $reservation)
{
$reservation = new Reservation();
$reservation->name=$reservation->input("name");
$reservation->surname=$reservation->input("surname");
$reservation->email=$reservation->input("email");
$reservation->phone=$reservation->input("phone");
$reservation->noppl=$reservation->input("noppl");
$reservation->date=$reservation->input("date");
$reservation->time=$reservation->input("time");

$reservation->save();
return redirect('admin.reservations.index');

}


}
