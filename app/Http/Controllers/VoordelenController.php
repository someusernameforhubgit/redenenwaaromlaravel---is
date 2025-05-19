<?php

namespace App\Http\Controllers;

use App\Models\Nadelen;
use Illuminate\Http\Request;

class VoordelenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('voordelen.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('voordelen.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(Nadelen $nadelen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Nadelen $nadelen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Nadelen $nadelen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nadelen $nadelen)
    {
        //
    }
}
