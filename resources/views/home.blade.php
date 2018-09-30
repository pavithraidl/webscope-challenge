@extends('layouts.app')

@section('content')
    <!-- webscope todo columns -->
    <div id="column-container" class="dd">

        <?php
            use App\TodoColumn;
            use App\TodoBoard;
            use App\TodoCard;

            $todo_board     = TodoBoard::where('status', 1)->where('user_id', Auth::user()->id)->first();
            $todo_columns   = TodoColumn::where('status', 1)->where('board_id', $todo_board->id)->get();
        ?>

        @foreach($todo_columns as $column)

            <?php
                $todo_cards = TodoCard::where('status', 1)->where('todo_column_id', $column->id)->get();
            ?>
        <ol class=" To-do" id="column-{{ $column->id }}">
            <div class="title">
                <h2><input type="text" placeholder="Title..." class="input-column-title" value="{{ $column->name }}" /> </h2>
            </div>

            <li class="dd-item default-blank"></li>
            @foreach($todo_cards as $card)
                <li class="dd-item" data-id="{{ $card->id }}">
                    <h3 class="title"><i class=" material-icons dd-handle ">filter_none</i> <input type="input" class="input-todo-title" placeholder="todo title..." value="{{ $card->title }}" /></h3>
                    <textarea class="text card-description" contenteditable="true" placeholder="description">{{ $card->body }}</textarea>
                    <div class="actions">
                        <i class="material-icons">palette</i>
                        <i class="material-icons">edit</i><i class="material-icons">insert_link</i>
                        <i class="material-icons">attach_file</i>
                    </div>
                </li>
            @endforeach

                <div class="actions">
                    <button class="addbutt btn-add-card"><i class="material-icons">control_point</i> Add Todo</button>
                </div>
        </ol>
        @endforeach

    </div>

    <menu class="">
        <button class="btn-display-modal"><i class="material-icons">timeline</i></button>
        <button class="btn-add-new-column"><i class="material-icons">playlist_add</i> Add new Column</button>
    </menu>



    <div class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close close-modal" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">


                        <canvas id="myChart" width="400" height="400"></canvas>


                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary close-modal" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
