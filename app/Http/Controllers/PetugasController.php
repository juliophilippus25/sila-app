<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;

class PetugasController extends Controller
{
    public function index() {
        $petugas = User::where('role', 'petugas')->get();

        return view('petugas.index', compact('petugas'));
    }

    public function store(Request $request) {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'nip' => ['required', 'string', 'size:16', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->nip = $request->nip;
        $user->password = Hash::make($request->password);
        $user->role = 'petugas';
        $user->save();

        return redirect()->route('petugas.index');
    }

}
