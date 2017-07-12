<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpregoController extends Controller {

    public function salvarEmprego(Request $request) {
        $params = $request->all();

        Emprego::create($params);

        return redirect()->action('EmpregoController@index');
    }

    public function index() {
        return view('cadastroEmprego');
    }

}
