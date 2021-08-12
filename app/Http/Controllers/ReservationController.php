<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function freshTimestamp()
    {
        return time();
    }
    public function store(Request $request)
    {
        $reservation = new Reservation();
        
        $reservation->user_id = Auth::id();
        $reservation->dt_start = request('dt_start');
        $reservation->time_res= request('time_res');
        $reservation->city= request('city');
        $reservation->street= request('street');
        $reservation->payment= request('payment');
        $reservation->price= request('price');
        
        $reservation->save();

        return redirect('/reservations/'.$reservation->id);
    }

    public function selfIndex(){

        $reservations = Reservation::where('user_id', Auth::id())->get();
        return view('normal.selfIndex', ['reservations' => $reservations]);

    }
    public function edit($id)
    {
        //
        $reservation = Reservation::find($id);

        return view('normal.edit')->with('reservation',$id);

    }

    public function update(Request $request, $id)
    {
        // dd($request->id);
        

        $reservation = Reservation::find($id);
        $reservation->dt_start = $request->dt_start;
        $reservation->time_res= $request->time_res;
        $reservation->city= $request->city;
        $reservation->street= $request->street;
        $reservation->payment= $request->payment;
        $reservation->price= $request->price;
        $reservation->save();
        return redirect('/reservations/'.$reservation->id);
    }

    public function show(Reservation $id)
    {
        return view('admin.show')->with('reservation',$id);
    }

    public function destroy($id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->delete();

        return redirect()->back();
    }
}
