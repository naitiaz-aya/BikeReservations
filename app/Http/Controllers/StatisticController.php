<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Reservation;
use App\Models\Statistic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class StatisticController extends Controller
{
    public function statistics()
    {
     
        $users = DB::table('users')->count();
        $reservations = DB::table('reservations')->count();
        $statistics = array (
            'users' => $users ,
            'reservations' => $reservations
        );
        return View::make('admin.statistics')->with(compact('statistics'));
    
    }
}
