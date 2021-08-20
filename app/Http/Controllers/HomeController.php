<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
        $this->middleware('auth');
    
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('home');
    
    }

    public function dashboard()
    {

        $reservations = Reservation::all();
        $users = DB::table('users')->count();
        $reserva = DB::table('reservations')->count();
        $statistics = array (
            'users' => $users ,
            'reserva' => $reserva
        );
        return View::make('admin.dashboard')
                    ->with(compact('statistics'))
                    ->with('reservations',$reservations);
                    
    }

    public function reserve()
    {

        return view('normal.reservation');
    
    }

    public function ticket($id)
    {
     
        $reservation = Reservation::find($id);
        
        return view('normal.ticket')->with('reservation',$reservation);
    
    }
    
}
