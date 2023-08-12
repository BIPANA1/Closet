<?php

namespace App\Http\Controllers;
use App\Models\Closet;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (auth()->user()->role == 1) {
           
            return view('admin.dashboard');
        } else {
            return view('user.home');
        };
    }
    public function home(){
        if (auth()->user()->role == 1){
            return view('admin.dashboard');
        }else{
            $closets = Closet::all();
            return view('user.home', compact('closets'));
        }
       
    }
   
}
