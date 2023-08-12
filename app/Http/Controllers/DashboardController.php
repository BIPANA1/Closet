<?php

namespace App\Http\Controllers;

use App\Models\Closet;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function search(Request $request)
    {
        
        $closets = Closet::where('name', 'like', '%'.$request->search.'%')->get();   
        return view('admin.explore', compact('closets'));
    }
}
