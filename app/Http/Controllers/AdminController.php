<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function home()
    {
        return view('admin.home');
    }

    public function register()
    {
        return view('register');
    }

    public function bulletin()
    {
        return view('admin.bulletin');
    }

    public function adminLogin(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            if (Auth::user()->authorize == '1') {
                return redirect()->intended('admin-home')
                        ->withSuccess('Vous êtes connecté!');
            }else{
                Auth::logout();
                return redirect()->intended('')
                        ->with('info', "Veillez contacter l'administrateur pour une autorisation de Connexion!");
            }
        }else {
            return redirect("login")->with('error', 'email ou mot de passe incorrect');
        }
    }

    public function adminRegister(Request $request)
    {
        //Auth::logout();
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        //$user->authorize = 1;
        $user->save();
        //dd($user);
        return redirect()->route('admin.home')->with('success', "L'administrateur $user->name a été ajouté avec succèss!");
    }
}
