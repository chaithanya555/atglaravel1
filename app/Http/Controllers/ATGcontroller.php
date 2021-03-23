<?php

namespace App\Http\Controllers;

use App\Models\ATG;
use Illuminate\Http\Request;

use DB;

class ATGcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            'name' => 'required',
            'email'=> 'required|email|unique:a_t_g_s,email',
            'pincode'=> 'required',
        ]);

        ATG::create($request->all());
        return redirect()->route('index')
                        ->with('success','Student created successfully.');
    }
    public function messages()
    {
        return [
            'email.required' => 'my custom message here',
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ATG  $aTG
     * @return \Illuminate\Http\Response
     */
    public function show(ATG $aTG)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ATG  $aTG
     * @return \Illuminate\Http\Response
     */
    public function edit(ATG $aTG)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ATG  $aTG
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ATG $aTG)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ATG  $aTG
     * @return \Illuminate\Http\Response
     */
    public function destroy(ATG $aTG)
    {
        //
    }
}
