<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use App\Models\User;
use App\Models\Reservation;

class UserController extends Controller
{
    //
    public function index()
    {
        $users = User::all();
        return view('users.index', ['users' => $users]);
    }

    public function profile(){

        

        return View::make('users.profile');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $users = User::all();
        return view('users.index', ['users' => $users]);
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user = User::find($id);
        // Load user/createOrUpdate.blade.php view
        return view('users.edit', ['users' => $user]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->role);
        $user = User::find($id);
        $user->role = $request->role;
        $user->save();
        return redirect('users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        // prend un identifiant et renvoie un seul modèle. 
        // Si aucun modèle correspondant n'existe, il renvoie une erreur1
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->back();
    }

}
