<?php

namespace App\Http\Controllers;

use App\Kura;

class KuraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kuras = Kura::get()->sortByDesc("id");
        return view('kura.index', compact('kuras'));
    }
}
