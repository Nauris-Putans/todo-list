@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8 offset-2">

            <div class="row">
                <h1>All your To-Dos</h1>
            </div>
            
            <ul>
                @foreach($todos as $todo)
                <li>
                    {{$todo->title}}
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
