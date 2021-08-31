<?php

namespace App\Http\Controllers;

use App\Models\data;
use Illuminate\Http\Request;

class dataController extends Controller
{
    /**
    *@return \Illuminate\Http\Responce
    *
    */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Responce
     */
    public function create()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     * 
     * @param \Illuminate\\Http\Request $request
     * @return \Illuminate\Http\Responce
     */

    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'user' => 'required',
            'email' => 'required',
            'password' => 'required',
            'mobile' => 'required',
        ]);

    
        data::create($request->all());

        return redirect()->route('index')
              ->with('success','data created successfully.');


    }
        
}