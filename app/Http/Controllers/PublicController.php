<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Category;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage() {

        $ads = Ad::take(6)->get()->sortByDesc('created_at'); 

        return view('welcome', compact('ads'));

    }

    public function show(Category $category){

        return view('category.show', compact('category'));

    }
    
}
