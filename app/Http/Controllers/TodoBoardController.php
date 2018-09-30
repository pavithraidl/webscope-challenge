<?php

namespace App\Http\Controllers;

use App\TodoBoard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TodoBoardController extends Controller
{
    public function __construct()
    {
        $this->SystemException    = new SystemExceptionController();
        $this->controller_name    = 'TodoBoardController';
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
    public function store()
    {
        try {

            // Create a board
            $todo_board = new TodoBoard();
            $todo_board -> name     = 'default';
            $todo_board -> user_id  = Auth::id();
            $todo_board -> status   = 1;
            $todo_board -> save();

            return json_encode($todo_board);

        } catch (\Exception $ex) {
            $this->SystemException->store($ex, $this->controller_name, 'store');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TodoBoard  $todoBoard
     * @return \Illuminate\Http\Response
     */
    public function show(TodoBoard $todoBoard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TodoBoard  $todoBoard
     * @return \Illuminate\Http\Response
     */
    public function edit(TodoBoard $todoBoard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TodoBoard  $todoBoard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TodoBoard $todoBoard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TodoBoard  $todoBoard
     * @return \Illuminate\Http\Response
     */
    public function destroy(TodoBoard $todoBoard)
    {
        //
    }
}
