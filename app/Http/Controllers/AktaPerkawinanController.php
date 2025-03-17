<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AktaPerkawinanController extends Controller
{
    public function index() {
        return view('akta-perkawinan.index');
    }
}
