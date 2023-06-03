<?php

namespace App\Http\Controllers;

use App\Models\Elearning;
use App\Http\Requests\StoreElearningRequest;
use App\Http\Requests\UpdateElearningRequest;

class ElearningController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data =[
            'title' => 'Manajemen Banner',
            'elearning' => Elearning::get(),
            'content' => 'operator/banner/index'
        ];    
    }

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
    public function store(StoreElearningRequest $request)
    {
        $data = $request -> validated ();
    }

    /**
     * Display the specified resource.
     */
    public function show(Elearning $elearning)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Elearning $elearning)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateElearningRequest $request, Elearning $elearning)
    {
        $data = $request -> validated ();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Elearning $elearning)
    {
        //
    }
}
