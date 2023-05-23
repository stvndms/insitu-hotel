<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Guest;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register()
    {
        return view('login.register');
    }

    public function store(Request $request)
    {
        $rules = [
            'name' => ['required', 'max:255'],
            'email' => ['required', 'min:8', 'max:255'],
            'password' => ['required', 'confirmed', 'min:8', 'max:255'],
        ];

        $validatedData = $request->validate($rules);

        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['random_str'] = Str::random(30);
        $validatedData['role'] = 'guest';

        User::create($validatedData);
        $user = User::latest()->first();

        Guest::create([
            'user_id' => $user->id,
            'has_account' => true,
            'guest_name' => $user->name,
            'random_str' => Str::random(30)
        ]);

        return redirect('/login')->with('success', 'New Guest has been added!');
    }
}
