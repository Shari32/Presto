<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Category;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage()
    {

        // $ads = Ad::orderBy('created_at', 'DESC')->where('is_accepted', true)->paginate(6);
        $ads=Ad::where('is_accepted', true)->orderBy('created_at', 'DESC')->paginate(6);
       

        return view('welcome', compact('ads'));
    }

    public function show(Category $category)
    {

        return view('category.show', compact('category'));
    }

    public function searchAds(Request $request)
    {
        $ads = Ad::search($request->searched)->where('is_accepted', true)->paginate(6);

        return view('ad.index', compact('ads'));
    }

    public function setLanguage($lang) {
        session()->put('locale', $lang);
        return redirect()->back();
    }

}

