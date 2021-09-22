<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function adminHome()
    {
        return view('adminHome');
    }

    public function edit()
    {
        return view('profile');
    }
    public function update(User $users)
    {
        $this->validate(request(), [
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|unique:users',
            'farmName' => 'required|confirmed'
        ]);

        $users->name = request('name');
        $users->email = request('email');
        $users->password = bcrypt(request('password'));

        $users->save();

        return back();
        //$users = $request->fname; Auth::user()->fname;
        //$users= $request->lname; Auth::user()->lname;
        //$users->email = $request->email; Auth::user()->email;
        //$users->farmname = $request->farmname; Auth::user()->farmname;
        //$users->save();

        //return redirect()->route('user.edit_profile')->with('success', 'User updated profile successfully');
    }
}
