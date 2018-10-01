<?php

namespace App\Http\Controllers;

use App\TodoCard;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;
use Illuminate\Support\Facades\DB;

class TodoCardController extends Controller
{

    public function __construct()
    {
        $this->SystemException    = new SystemExceptionController();
        $this->controller_name    = 'TodoCardController';
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
     * @return \Illuminate\Http\Response : card id
     */
    public function store(Request $request)
    {

        try {

            $todo_card  = new TodoCard();
            $todo_card  -> title            = "";
            $todo_card  -> body             = "";
            $todo_card  -> todo_column_id   = $request->column_id;
            $todo_card  -> status           = 1;
            $todo_card  -> save();

            return response()->json([
                "card_id" => $todo_card->id,
            ], Response::HTTP_CREATED);


        } catch (\Exception $ex) {

            $this->SystemException->store($ex, $this->controller_name, 'store');
            return response()->json($ex, Response::HTTP_INTERNAL_SERVER_ERROR);
        }
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
     * @param  \Illuminate\Http\Request  $request : [ update field, update value]
     * @param  \App\TodoCard  $id : todo card id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        try {

            $value  = !empty( $request->value ) || $request->value === 0 ? $request->value: "" ;

            DB::table('todo_cards')->where('id', $id)->update(array(
                $request->field => $value
            ));

            return response()->json( true, Response::HTTP_OK);

        }  catch (\Exception $ex) {

            $this->SystemException->store($ex, $this->controller_name, 'update');
            return response()->json($ex, Response::HTTP_INTERNAL_SERVER_ERROR);
        }
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
