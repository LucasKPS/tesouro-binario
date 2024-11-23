<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    public function auth(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::guard('web')->attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::guard('web')->user();

            Log::info('Login bem-sucedido para administrador:', [
                'nome' => $user->name,
                'email' => $user->email,
            ]);

            return redirect()->route('dashboard.page');
        }

        if (Auth::guard('instrutores')->attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::guard('instrutores')->user();

            Log::info('Login bem-sucedido para instrutor:', [
                'nome' => $user->name,
                'email' => $user->email,
            ]);

            return redirect()->route('dashboard.page');
        }

        if (Auth::guard('alunos')->attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::guard('alunos')->user();

            Log::info('Login bem-sucedido para aluno:', [
                'nome' => $user->name,
                'email' => $user->email,
            ]);

            return redirect()->route('dashboard.page');
        }


        return back()->withErrors([
            'email' => 'As credenciais fornecidas não correspondem aos nossos registros.',
        ]);
    }
}
