<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function index()
    {
        return view('user.index');
    }
    function register(Request $request)
    {
        $wallet = $request->input('wallet');
        $user = User::where('wallet', $wallet)->first();
        if ($user) {
            Auth::login($user);
            return redirect()->route('play.index');
        }
        return view('user.register', ['wallet' => $wallet]);
    }
    public function store(Request $request)
    {
        $validate =  $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'wallet' => 'required',
        ]);
        $user = User::create($validate);
        Auth::login($user);
        return redirect()->route('play.index');
    }
    public function update(Request $request)
    {
        // select authed user
        $user = Auth::user();
        // update fileds exists in requrest exept token
        $user->update($request->except('_token'));
        return redirect()->route('play.index');
    }
}
