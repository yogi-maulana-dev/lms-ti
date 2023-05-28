<?php

namespace App\Http\Controllers;

use App\Models\quiz_timer;
use App\Http\Requests\Storequiz_timerRequest;
use App\Http\Requests\Updatequiz_timerRequest;

class QuizTimerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Storequiz_timerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(quiz_timer $quiz_timer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(quiz_timer $quiz_timer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatequiz_timerRequest $request, quiz_timer $quiz_timer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(quiz_timer $quiz_timer)
    {
        //
    }
}
