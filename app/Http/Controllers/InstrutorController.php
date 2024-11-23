<?php

namespace App\Http\Controllers;

use App\Models\Instrutor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class InstrutorController extends Controller
{
    public function index()
    {
        $instrutores = Instrutor::all();
        return view('instrutores.index', compact('instrutores'));
    }

    public function create()
    {
        return view('instrutores.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:instrutores,email',
            'password' => 'required|string|min:8|confirmed',
            'birth_date' => 'required|date',
            'phone' => 'nullable|string|max:15',
        ]);

        Instrutor::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'birth_date' => $validated['birth_date'],
            'phone' => $validated['phone'],
        ]);

        return redirect()->route('instrutores.index')->with('success', 'Instrutor cadastrado com sucesso!');
    }
}
