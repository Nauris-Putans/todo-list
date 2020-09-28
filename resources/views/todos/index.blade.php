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
                <li class="d-flex justify-content-center py-2">
                    <p>{{$todo->title}}<a href="{{'/todos/'.$todo->id.'/edit'}}" class="mx-4 btn btn-primary" style="background-color: #e98a0d; border-color: #e7890d;">Edit</a></p>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
