<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function signin()
    {
        return view('auth.login');
    }

    public function signup()
    {
        return view('auth.register');
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required',
        ]);

        $credentials = $request->only(['email', 'password']);

        if(Auth::attempt($credentials)){
            return redirect()->route('dashboard');
        }else{
            return back()->with(['type' => 'error', 'title' => 'Invalid', 'message' => 'Invalid Credentials!!']);
        }
    }

    public function register(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|regex:/^[A-Za-z]+$/',
            'last_name' => 'required|string|regex:/^[A-Za-z]+$/',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
        ]);

        try{
            DB::beginTransaction();

            $user = User::create([
                'name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            DB::commit();
            
            Auth::login($user);
            return redirect()->route('dashboard');
        
        }catch(\Exception $e){
            DB::rollBack();
            return back()->with(['type' => 'error', 'title' => 'Error', 'message' => $e->getMessage()]);
        }
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect()->route('dashboard');
    }
}
