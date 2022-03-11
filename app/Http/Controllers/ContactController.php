<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Auth\Events\Validated;

class ContactController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
  

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('home');
        return "Hello";
    }
    public function create()
    {
        // return view('contact');
    }
    public function store(Request $request)
    {
        
        return response()->json(['success'=>'Got Simple Ajax Request.']);
        
    }


}
