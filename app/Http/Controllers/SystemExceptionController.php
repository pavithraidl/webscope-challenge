<?php

namespace App\Http\Controllers;

use App\SystemException;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class SystemExceptionController extends Controller
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

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  $ex  : auto-genarated exception message
     * @param  $controller  : name of the exception genarated controller
     * @param  $method  : name of the exception genarated function
     * @return void
     */
    public function store($ex, $controller = null, $method = null)
    {
        try {

            $exception  = new SystemException();
            $exception  -> exception    = $ex;
            $exception  -> controller   = $controller;
            $exception  -> method       = $method;
            $exception  -> user_id      = Auth::id();
            $exception  -> save();

        } Catch(\Exception $ex ) {
            Log::error($ex);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SystemException  $systemException
     * @return \Illuminate\Http\Response
     */
    public function show(SystemException $systemException)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SystemException  $systemException
     * @return \Illuminate\Http\Response
     */
    public function edit(SystemException $systemException)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SystemException  $systemException
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SystemException $systemException)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SystemException  $systemException
     * @return \Illuminate\Http\Response
     */
    public function destroy(SystemException $systemException)
    {
        //
    }
}
