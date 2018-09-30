@extends('layouts.app')

@section('content')
    <!-- webscope todo columns -->
    <div class="dd">

        {{--<ol class=" To-do">--}}
            {{--<div class="title">--}}
                {{--<h2><i class="material-icons">report_problem</i> To do</h2></div>--}}
            {{--<li class="dd-item" data-id="1">--}}
                {{--<h3 class="title dd-handle">Do the dishes<i class=" material-icons ">filter_none</i></h3>--}}
                {{--<div class="text" contenteditable="true">wwPaul Rand once said, “The public is more familiar with bad--}}
                    {{--fucking design than good design. It is, in effect, conditioned to prefer--}}

                {{--</div>--}}
                {{--<i class="material-icons" id="label blue">label</i>--}}
                {{--<div class="actions">--}}
                    {{--<i class="material-icons" id="color">palette</i><i class="material-icons">edit</i><i--}}
                            {{--class="material-icons">insert_link</i><i class="material-icons">attach_file</i></div>--}}

            {{--</li>--}}
            {{--<li class="dd-item" data-id="4">--}}
                {{--<h3 class="title dd-handle"><i class=" material-icons ">filter_none</i>log-in bug</h3>--}}
                {{--<div class="text" contenteditable="true">Paul Rand once said, “The public is more familiar with bad fucking--}}
                    {{--design than good design. It is, in effect, conditioned to prefer bad design,--}}
                {{--</div>--}}
                {{--<div class="actions">--}}
                    {{--<i class="material-icons">palette</i><i class="material-icons">edit</i><i class="material-icons">insert_link</i><i--}}
                            {{--class="material-icons">attach_file</i></div>--}}

            {{--</li>--}}
            {{--<li class="dd-item" data-id="3">--}}
                {{--<h3 class="title dd-handle"><i class=" material-icons ">filter_none</i>UX design</h3>--}}
                {{--<div class="text" contenteditable="true">Paul Rand once said, “The public is more familiar with bad fucking--}}
                    {{--design than good design. It is, in effect, conditioned to prefer bad design,--}}
                {{--</div>--}}
                {{--<div class="actions">--}}
                    {{--<i class="material-icons">palette</i><i class="material-icons">edit</i><i class="material-icons">insert_link</i><i--}}
                            {{--class="material-icons">attach_file</i></div>--}}


                {{--<div class="actions">--}}
                    {{--<button class="addbutt"><i class="material-icons">control_point</i> Add new</button>--}}
                {{--</div>--}}
        {{--</ol>--}}
        {{--<ol class=" progress">--}}
            {{--<h2><i class="material-icons">build</i> In progress</h2>--}}
            {{--<li class="dd-item" data-id="5">--}}
                {{--<h3 class="title dd-handle"><i class=" material-icons ">filter_none</i> title of job</h3>--}}
                {{--<div class="text" contenteditable="true">Paul Rand once said, “The public is more familiar with bad fucking--}}
                    {{--design than good design. It is, in effect, conditioned to prefer bad design,--}}
                {{--</div>--}}
                {{--<div class="actions">--}}
                    {{--<i class="material-icons">palette</i><i class="material-icons">edit</i><i class="material-icons">insert_link</i><i--}}
                            {{--class="material-icons">attach_file</i></div>--}}

            {{--</li>--}}
            {{--<div class="actions">--}}
                {{--<button class="addbutt"><i class="material-icons">control_point</i> Add new</button>--}}
            {{--</div>--}}
        {{--</ol>--}}
        {{--<ol class="  Done">--}}
            {{--<h2><i class="material-icons">check_circle</i> Done</h2>--}}
            {{--<li class="dd-item" data-id="5">--}}
                {{--<h3 class="title dd-handle"><i class=" material-icons ">filter_none</i> title of job</h3>--}}
                {{--<div class="text" contenteditable="true">Paul Rand once said, “The public is more familiar with bad fucking--}}
                    {{--design than good design. It is, in effect, conditioned to prefer bad design,--}}
                {{--</div>--}}
                {{--<div class="actions">--}}
                    {{--<i class="material-icons">palette</i><i class="material-icons">edit</i><i class="material-icons">insert_link</i><i--}}
                            {{--class="material-icons">attach_file</i></div>--}}

            {{--</li>--}}
            {{--</li>--}}
            {{--<li class="dd-item" data-id="2">--}}
                {{--<h3 class="title dd-handle"><i class=" material-icons ">filter_none</i> title of job</h3>--}}
                {{--<div class="text" contenteditable="true">Paul Rand once said, “The public is more familiar with bad fucking--}}
                    {{--design than good design. It is, in effect, conditioned to prefer bad design,--}}
                {{--</div>--}}
                {{--<div class="actions">--}}
                    {{--<i class="material-icons">palette</i><i class="material-icons">edit</i><i class="material-icons">insert_link</i><i--}}
                            {{--class="material-icons">attach_file</i></div>--}}

            {{--</li>--}}
            {{--<div class="actions">--}}
                {{--<button class="addbutt"><i class="material-icons">control_point</i> Add new</button>--}}
            {{--</div>--}}
        {{--</ol>--}}
        {{--<ol class=" Gone">--}}
            {{--<h2><i class="material-icons">delete</i> Gone</h2>--}}
            {{--<li class="dd-item" data-id="5">--}}
                {{--<h3 class="title dd-handle"><i class=" material-icons ">filter_none</i> title of job</h3>--}}
                {{--<div class="text" contenteditable="true">Paul Rand once said, “The public is more familiar with bad fucking--}}
                    {{--design than good design. It is, in effect, conditioned to prefer bad design,--}}
                {{--</div>--}}
                {{--<div class="actions">--}}
                    {{--<i class="material-icons">palette</i><i class="material-icons">edit</i><i class="material-icons">insert_link</i><i--}}
                            {{--class="material-icons">attach_file</i></div>--}}

            {{--</li>--}}
            {{--<div class="actions">--}}
                {{--<button class="addbutt"><i class="material-icons">control_point</i> Add new</button>--}}
            {{--</div>--}}
        {{--</ol>--}}

    </div>

    <menu class="">
        <button><i class="material-icons">timeline</i></button>
        <button class="btn-add-new-column"><i class="material-icons">playlist_add</i> Add new Column</button>
    </menu>
@endsection
