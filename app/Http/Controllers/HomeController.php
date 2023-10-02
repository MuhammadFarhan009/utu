<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\dataBarang;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::id()){

            $usertype=Auth()->user()->usertype;

            if($usertype == 'user'){
                $dataBarang = dataBarang::all();
                return view('dashboard')->with('databarang', $dataBarang);
            }

            else if($usertype == 'admin'){
                return view('admin.dashboard');
            }

            else
            {
                return redirect()->back();
            }
        }
    }
}
