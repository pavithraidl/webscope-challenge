<?php

namespace App\Http\Controllers;

use App\TodoBoard;
use App\TodoColumn;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class TodoColumnController extends Controller
{

    public function __construct()
    {
        $this->SystemException    = new SystemExceptionController();
        $this->controller_name    = 'TodoColumnController';
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
     * @return new column ID
     */
    public function store()
    {

        try {

            $todo_board = TodoBoard::where('user_id', Auth::id())->where('status', 1)->first();

            if( ! is_object($todo_board) ) {
                // Create the default todo board
                $todo_board = new TodoBoardController();
                $todo_board = json_decode( $todo_board -> store() );
            }


            $todo_column    = new TodoColumn();
            $todo_column    -> name         = "";
            $todo_column    -> icon         = "check_circle";
            $todo_column    -> color        = "#FFB300";
            $todo_column    -> status       = 1;
            $todo_column    -> board_id     = $todo_board->id;
            $todo_column    -> save();

            return response()->json([
                "column_id" => $todo_column->id,
            ], Response::HTTP_CREATED);

        } catch (\Exception $ex) {

            $this->SystemException->store($ex, $this->controller_name, 'store');
            return response()->json([], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
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
     * @param  \Illuminate\Http\Request  $request : [update field, update value]
     * @param  \App\TodoColumn  $id : todo column id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        try {

            DB::table('todo_columns')->where('id', $id)->update(array(
                $request->field => $request->value
            ));

            return response()->json( true, Response::HTTP_OK);

        }  catch (\Exception $ex) {

            $this->SystemException->store($ex, $this->controller_name, 'update');
            return response()->json([], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
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
