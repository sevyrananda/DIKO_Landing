<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class spController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('sp');
    }
    // public function hello() {
    //     $name = "alam";
    //     $alamat = "magetan";
    //     return view('hello',compact('name','alamat'));

    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
