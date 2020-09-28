@extends('layouts.app')

@section('content')
<div class="container">
    <x-alert />
    <div class="row">
        <div class="col-8 offset-2">

            <div class="d-flex justify-content-center">
                <h1 class="text-center">All your To-Dos |<a href="/todos/create" class="mx-2 btn btn-primary">Create</a></h1>
            </div>
            <hr>

            <ul class="my-3">
                @foreach($todos as $todo)
                <li class="d-flex justify-content-between py-2">

                    @if($todo->completed)
                        <s><h4>{{$todo->title}}</h4></s>
                    @else
                        <h4>{{$todo->title}}</h4>
                    @endif

                    <div>
                        <a href="{{'/todos/'.$todo->id.'/edit'}}">
                            <span class="fa fa-edit px-2" style="font-size:30px; color: black"></span>
                        </a>

                        @if($todo->completed)
                            <span class="fa fa-check px-2" style="font-size:30px; color: green; cursor: pointer"></span>
                        @else
                            <span onclick="event.preventDefault();
                                document.getElementById('form-complete-{{ $todo->id }}')
                                .submit()"
                                class="fa fa-check px-2" style="font-size:30px; color: gray; cursor: pointer">
                                
                            <form style="display: none" id="{{ 'form-complete-'.$todo->id }}" method="post" action="{{ route('todo.complete', $todo->id) }}">
                                @csrf
                                @method('patch')
                            </form>
                        @endif
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
