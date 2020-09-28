@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <h1 class="text-center">{{$todo->title}}</h1>
            </div>
        </div>
    </div>
@endsection
