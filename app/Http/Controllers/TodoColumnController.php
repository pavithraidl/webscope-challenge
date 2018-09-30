<?php

namespace App\Http\Controllers;

use App\TodoBoard;
use App\TodoColumn;
use Illuminate\Http\Request;
use Auth;
use Symfony\Component\HttpFoundation\Response;

class TodoColumnController extends Controller
{

    public function __construct()
    {
//        $this->middleware('auth:api');
    }

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

        return response()->json(Auth::user(), 200);


//        $todo_board = TodoBoard::where('user_id', Auth::id())->where('status', 1)->first();
//
//        if( ! is_object($todo_board) ) {
//            // Create the default todo board
//            $todo_board = new TodoBoardController();
//            $todo_board = json_decode( $todo_board -> store() );
//        }
//
//
//        $todo_column    = new TodoColumn();
//        $todo_column    -> name         = "";
//        $todo_column    -> icon         = "check_circle";
//        $todo_column    -> color        = "#FFB300";
//        $todo_column    -> status       = 1;
//        $todo_column    -> board_id     = $todo_board->id;
//        $todo_column    -> save();
//
//        return response()->json(['data' => 'success'], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TodoColumn  $todoColumn
     * @return \Illuminate\Http\Response
     */
    public function show(TodoColumn $todoColumn)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TodoColumn  $todoColumn
     * @return \Illuminate\Http\Response
     */
    public function edit(TodoColumn $todoColumn)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TodoColumn  $todoColumn
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TodoColumn $todoColumn)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TodoColumn  $todoColumn
     * @return \Illuminate\Http\Response
     */
    public function destroy(TodoColumn $todoColumn)
    {
        //
    }
}
