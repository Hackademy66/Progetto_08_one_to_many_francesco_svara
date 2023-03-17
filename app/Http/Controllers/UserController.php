<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
        $this->middleware('verified');
    }

    public function profile() {
        // metodo 1: sfruttare la relazione
        return view('profile');
        // metodo 2: sfruttare una query al database
        // $sells = Sell::where('user_id', Auth::id())->orderBy('created_at', 'DESC')->get();
        // return view('profile', compact('sells'));
        // $trades = Trade::where('user_id', Auth::id())->orderBy('created_at', 'DESC')->get();
        // return view('profile', compact('trades'));
    }

    public  function changeAvatar(User $user, Request $request) {
        $user->update([
          'avatar' => $request->file('avatar')->store('public/avatars')
        ]);
        return redirect()->back();
    }

    public function destroy() {

        $user_sells = Auth::user()->sells;
        $user_trades = Auth::user()->trades;

        foreach($user_sells as $sell) {
            $sell->update([
                'user_id' => 1
            ]);
        }

        foreach($user_trades as $trade) {
            $trade->update([
                'user_id' => 1
            ]);
        }

        Auth::user()->delete();

        return redirect(route('homepage'))->with('userDeleted', 'Account deleted');
    }
}