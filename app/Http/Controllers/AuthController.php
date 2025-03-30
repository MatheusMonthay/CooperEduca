<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeEmail;
use App\Models\User;
use App\Notifications\WelcomeEmailNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

use function Laravel\Prompts\password;

class AuthController extends Controller
{
    // Mostrar o formulário de login
    public function showLoginForm()
    {
        if (auth()->check()) {
            return redirect()->route('dashboard'); 
        }
        return view('auth.login');
    }

    // Processar o login
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard'); // Redirecionar para a dashboard
        }
    
        return back()->withErrors([
            'email' => 'Credenciais inválidas.',
        ]);
    }

    // Mostrar o formulário de registro
    public function showRegisterForm()
    {
        if (auth()->check()) {
            return redirect()->route('dashboard');
        }
        return view('auth.register');
    }

    // Processar o registro
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'cpf' => 'required|string|unique:users|max:14', 
            'telefone' => 'required|string|max:15', 
            'password' => 'required|string|confirmed',
        ]);

        $password = $request->password;
        $password_confirmation = $request->password_confirmation;

        if ($password === $password_confirmation) {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'cpf' => $request->cpf,
                'telefone' => $request->telefone,
                'password' => Hash::make($request->password),
            ]);

            Auth::login($user);
            
            Mail::to($user->email)->send(new WelcomeEmail($user));

            return redirect('/dashboard'); // Redirecionar para a página após o registro
        }

        return back()->withErrors([
            'password' => 'As senhas não conferem',
        ]);
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}