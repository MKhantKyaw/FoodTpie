<?php

namespace App\Http\Controllers;

use App\Promo;
use Illuminate\Http\Request;

class UserpanelController extends Controller
{
    public function index(){
        return view('user.index');
    } 

    public function promotion(){
        return view('user.promotion');
    }

    public function storePromo(){
        Promo::create([
            'uid' => auth()->id(),
            'discount' => request('promo')
        ]);
        return redirect('/userDashboard');
    }
}
