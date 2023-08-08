<?php

namespace App\Http\Controllers;

use App\Models\Master;
use Illuminate\Http\Request;

class StartController extends Controller
{
    public function index()
    {
        $musters = Master::all();

        return view('welcome', ['musters' => $musters]);
    }
}

