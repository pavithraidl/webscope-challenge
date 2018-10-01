<?php

namespace App\Http\Controllers;

use App\TodoBoard;
use App\TodoCard;
use App\TodoColumn;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;

class ChartDataController extends Controller
{
    public function __construct()
    {
        $this->SystemException    = new SystemExceptionController();
        $this->controller_name    = 'ChartDataController';
    }

    /**
     * @return Chart data object
     */
    public function getChartData() {

        try {
            $todo_board         = TodoBoard::where('user_id', Auth::user()->id)->where('status', 1)->first();
            $todo_columns       = TodoColumn::where('board_id', $todo_board->id)->where('status', 1)->get();
            $labels             = array();
            $background_color   = array();
            $todo_cards_count   = array();

            foreach ($todo_columns as $todo_column) {

                $count   = TodoCard::where('todo_column_id', $todo_column->id)->where('status', 1)->count();

                $labels[]           = $todo_column->name;
                $background_color[] = $todo_column->color;
                $todo_cards_count[] = $count;
            }

            $dataset    = array(
                'label'             => 'Todo Columns',
                'backgroundColor'   =>  $background_color,
                'data'              => $todo_cards_count
            );

            $ret    = array(
                'labels'    => $labels,
                'datasets'  => $dataset
            );

            return response()->json($ret, Response::HTTP_OK);
        } catch (\Exception $ex) {
            $this->SystemException->store($ex, $this->controller_name, 'getChartData');
        }

    }
}
