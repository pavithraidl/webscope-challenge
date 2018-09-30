<?php

namespace App\Http\Controllers;

use App\TodoCard;
use Illuminate\Http\Request;

class TodoCardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $user_id    = Auth::id();

        return response()->json([
            "user_id"   => $user_id,
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TodoCard  $todoCard
     * @return \Illuminate\Http\Response
     */
    public function show(TodoCard $todoCard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TodoCard  $todoCard
     * @return \Illuminate\Http\Response
     */
    public function edit(TodoCard $todoCard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TodoCard  $todoCard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TodoCard $todoCard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TodoCard  $todoCard
     * @return \Illuminate\Http\Response
     */
    public function destroy(TodoCard $todoCard)
    {
        //
    }
}
