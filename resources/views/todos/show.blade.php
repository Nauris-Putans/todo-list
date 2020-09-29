@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2 text-center">

                <div class="d-flex justify-content-center">
                    <h1 class="text-center">{{ $todo->title }}</h1>
                </div>
                <hr>

                <div class="text-lg">
                    <h2 class="text-lg">Description</h2>
                    <h3>{{ $todo->description }}</h3>
                </div>

                @if($todo->steps->count() > 0)
                    <div class="py-4">
                        <h2 class="text-lg">Steps for this task</h2>
                        @foreach($todo->steps as $step)
                            <h3>{{ ($loop->index+1). '. '.$step->name }}</h3>
                        @endforeach
                    </div>
                @endif

                <div class="row pt-2">
                    <a href="{{ route('todo.index') }}" class="mx-2 btn btn-danger">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
