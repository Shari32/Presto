<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use Illuminate\Http\Request;

class RevisorController extends Controller
{
    
    public function index() {
        $ad_to_check = Ad::where('is_accepted', null)->first();
        return view('revisor.index', compact('ad_to_check'));
    }

    public function acceptAd(Ad $ad) {
        $ad->setAccepted(true);
        return redirect()->back()->with('message', "L'annuncio e' stato accettato.");
    }

    public function rejectAd(Ad $ad) {
        $ad->setAccepted(false);
        return redirect()->back()->with('message', "L'annuncio e' stato rifiutato.");
    }

    public function becomeRevisor() {
        Mail::to('admin@presto.it')->send(new BecomeRevisor(Auth::user()));
        return redirect()->back()->with('message', 'Hai richiesto correttamente di diventare un revisore.');
    }

    public function makeRevisor(User $user) {
        Artisan::call('presto:makeUserRevisor', ["email"=>$user->email]);
        return redirect('/')->with('message', "L'utente e' diventato revisore.");
    }

}
