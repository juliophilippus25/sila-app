<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AktaLahirController extends Controller
{
    public function index() {
        return view('akta-lahir.index');
    }
}
