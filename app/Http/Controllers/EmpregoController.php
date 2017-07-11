<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpregoController extends Controller {

    public function index() {
        return view('cadastroEmprego');
    }

}
