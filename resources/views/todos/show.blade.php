@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">

                <div class="d-flex justify-content-center">
                    <h1 class="text-center">{{ $todo->title }}</h1>
                </div>
                <hr>

                <div class="text-center">
                    <h3>{{ $todo->description }}</h3>
                </div>

                <div class="row pt-2">
                    <a href="{{ route('todo.index') }}" class="mx-2 btn btn-danger">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
