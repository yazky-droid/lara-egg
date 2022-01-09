<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
    $attributes = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        // (Auth::attempt(['email' => $request->email,'password' => $request->password,]))
        if (Auth::attempt($attributes)) { //auth attempt sama dengan memvalidasi login kaya kode if else dibawah... kenapa pake $attributes karena $attributes juga mengandung array email dan password yang sesuai request.
                return redirect('/')->with('success', 'You are now logged in');
        }

        // $user = User::whereEmail($request->email)->first();
        // if ($user) {
        //     if (Hash::check($request->password, $user->password)) {
        //         Auth::login($user);

        //         return redirect('/')->with('success', 'You are now logged in');
        //     }
        // }
        throw ValidationException::withMessages([
            'email' => 'Your email is not match with any email in our records.'
        ]);
    }
}
