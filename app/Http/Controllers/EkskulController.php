<?php

namespace App\Http\Controllers;

use App\Models\Ekskul;
use Illuminate\Http\Request;

class EkskulController extends Controller
{
    public function index()
    {
        $ekskul = Ekskul::all();
        
        return view('ekskul', ['ekskulList' => $ekskul]);
    }
}