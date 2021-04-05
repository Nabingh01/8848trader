<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Expr\New_;

class ClientController extends Controller
{
    public function create()
    {
        return view('frontend.pages.clientslogin.register');
    }
    public function store(Request $request)
    {
        $user = New User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password= Hash::make($request->password);
        $user->is_admin =0;
        $user->save();
        return redirect()->back();
    }

    public function signinform(Request $request)
    {
        return view('frontend.pages.clientslogin.signin');
    }

    public function signin(Request $request)
    {
      
        $data = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        return Hash::make($request->password);
        
        $user = User::where('email',$request->email)->where('password',Hash::make($request->password))->get();
        return $user;

    }
}
