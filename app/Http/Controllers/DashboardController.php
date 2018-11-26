<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use App\Point;

class DashboardController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $user = Auth::user();
      // $point = Point::findOrFail($userid);
      $point = \App\Point::where('user_id', '=', $user->id)->get();
      // dd($point[0]->total_point);
      // return view('home');
      return view('dashboard', compact('user', 'point'));
    }
}
