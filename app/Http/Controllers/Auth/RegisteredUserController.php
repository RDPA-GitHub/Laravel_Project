<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Models\User;

class RegisteredUserController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([

            'name' => ['required', 'string', 'max:255'],
            'email' => ['required','string','email','max: 255 ' , 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()]

        ],[
            'name' => 'El Campo Nombre es requerido',
            'email' => 'El Campo Email es requerido',
            'password' => 'El Campo Password es requerido',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        return to_route('login')->with('status', 'Su Cuenta fue creada Exitosamente!');
    }
}
