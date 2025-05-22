<?php

namespace App\Http\Controllers;

use App\Http\Requests\Petugas\CreatePetugasRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Validator;

class PetugasController extends Controller
{
    public function index() {
        $dataType = 'Petugas';
        $petugas = User::where('role', 'petugas')->get();

        return view('petugas.index', compact('petugas', 'dataType'));
    }

    public function store(CreatePetugasRequest $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->nip = $request->nip;
        $user->password = Hash::make($request->password);
        $user->role = 'petugas';
        $user->save();

        toast('Petugas berhasil ditambahkan.', 'success')->hideCloseButton()->autoClose(3000);
        return redirect()->route('petugas.index');
}

}
