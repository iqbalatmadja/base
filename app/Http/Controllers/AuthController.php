<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function __construct()
    {
        // $this->middleware('guest')->except([
        //     'logout', 'dashboard'
        // ]);
    }

    public function login()
    {
        if(Auth::check()) return redirect()->route('dashboard')->with('msg', 'You\'ve logged in!');
        return view('auth.login');
    }

    public function registration()
    {
        if(Auth::check()) return redirect()->route('dashboard')->with('msg', 'You\'ve registered!');
        return view('auth.registration');
    }

    public function dashboard()
    {
        if(!Auth::check()) return redirect()->route('login')->with('msg', 'You\'re not logged in!');
        return view('auth.dashboard');
    }

    public function saveregistration(Request $request)
    {
        $customMessages = [
            'name.required' => 'The Name field is required',
            'email.required' => 'The Email field is required',
            'password.required' => 'The Password field is required',
            'email.unique' => 'The Email is taken',
        ];
        $request->validate([
            'name' => 'required|string|max:64',
            'email' => 'required|email:max:64|unique:users',
            'password' => 'required|min:8|confirmed'
        ],$customMessages);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $credentials = $request->only('email', 'password');
        Auth::attempt($credentials);
        $request->session()->regenerate();
        return redirect()->route('dashboard')
        ->withSuccess('You have successfully registered & logged in!');

    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')
            ->withSuccess('You have logged out successfully!');;
    }

    public function processlogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect()->route('dashboard')
                ->withSuccess('You have successfully logged in!');
        }

        return back()->withErrors([
            'email' => 'Your provided credentials do not match our records.',
        ])->onlyInput('email');

    }

    public function profile()
    {
        if(!Auth::check()) return redirect()->route('login')->with('msg', 'You\'re not logged in!');
        $id = Auth::user()->id;
        $user = User::findOrFail($id);
        $profile = ['user'=>$user];
        return view('auth.profile',$profile);
    }
    public function profileupdate(Request $request)
    {
        $customMessages = [
            'name.required' => 'The Name field is required',
            'name.max' => 'name field max 64 characters'
        ];
        $request->validate([
            'name' => 'required|string|max:64',
        ],$customMessages);
        $id = Auth::user()->id;
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->update();

        return redirect()->route('profile')->with('msg', 'Profile updated');
    }

}
