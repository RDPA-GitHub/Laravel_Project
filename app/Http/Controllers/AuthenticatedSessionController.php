<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;


class AuthenticatedSessionController extends Controller
{
    public function store(Request $request)
    {
        $credentials = $request->validate([

            'email'     =>['required', 'string', 'email'],
            'password'  =>['required', 'string']

        ]);

        if(!Auth::attempt($credentials, $request)){
            throw ValidationException::withMessages([
                'email' => 'Estas Credenciales no coinciden con nuestros registros.'
            ]);
        }
        
        $request->session()->regenerate();

        return redirect()->intended()
            ->with('status', 'La sesion esta Iniciada');
        
    }

    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return to_route('login')
            ->with('status', 'La sesion fue Finalizada');
    }
}
