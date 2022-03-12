<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Stmt\Echo_;
use Session;


class SessionsController extends Controller
{
    public function login () {

        return view("auth.login");

    }

    public function registration ()
    {

        return view("auth.registration");

    }

    public function registerUser (Request $request)
    {


        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:4|max:8'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->is_admin = $request->is_admin;
        $user->password = Hash::make($request->password);
        $res = $user->save();

        if($res){

            return back()->with('success', 'You have registered successfully');

        }
        else{

            return back()->with('fail', 'Something wrong');

        }

    }

    public function loginUser (Request $request)
    {

        $request->validate([

            'email'=>'required|email',
            'password'=>'required|min:4|max:8',


        ]);

        $user = User::where('email', '=', $request->email)->first();
        if($user){
            if (Hash::check($request->password, $user->password)) {

                if ($user->is_admin) {

                    return redirect()->route('admin.index');

                }
                else{

                $request->session()->put('loginId', $user->id);
                return redirect('dashboard');

}
            }else{

                return back()->with('fail', 'Password not matches.');

            }

        } else {

            return back()->with('fail', 'This email is not registered.');

        }

    }

    public function dashboard(){

        return view('dashboard');

    }

    public function landing(){

        return view('layouts.landing');

    }

}
