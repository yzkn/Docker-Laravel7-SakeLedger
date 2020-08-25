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
        $kuras = Kura::orderBy('phone', 'asc')->paginate(50);
        return view('kura.index', compact('kuras'));
    }
}
