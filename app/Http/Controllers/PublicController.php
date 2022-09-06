<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage() {

        $ads = Ad::all(); 

        return view('welcome', compact('ads'));

    }
}
