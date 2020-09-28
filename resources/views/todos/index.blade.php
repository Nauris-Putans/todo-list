@extends('layouts.app')

@section('content')
<div class="container">
    <x-alert />
    <div class="row">
        <div class="col-8 offset-2">

            <div class="d-flex justify-content-center">
                <h1 class="text-center">All your Todos
                    <a href="{{ route('todo.create') }}" class="mx-2">
                        <span class="fa fa-plus-circle py-2"></span>
                    </a>
                </h1>
            </div>
            <hr>

            <ul class="my-3">
                @forelse($todos as $todo)
                <li class="d-flex justify-content-between py-2">
                    <div>
                        @include('todos.completeButton')
                    </div>

                    @if($todo->completed)
                        <s><h4>{{$todo->title}}</h4></s>
                    @else
                        <h4>{{$todo->title}}</h4>
                    @endif

                    <div>
                        <a href="{{ route('todo.edit', $todo->id) }}">
                            <span class="fa fa-edit px-2" style="font-size:30px; color: black"></span>
                        </a>

                        <span class="fa fa-trash px-2" style="font-size:30px; color: #c80000; cursor: pointer"
                            onclick="event.preventDefault();
                            if(confirm('Do you really want to delete task - {{ $todo->title }}?'))
                            {
                                document.getElementById('form-destroy-{{ $todo->id }}')
                                .submit()
                            }"
                        />

                        <form style="display: none" id="{{ 'form-destroy-'.$todo->id }}" method="post" action="{{ route('todo.destroy', $todo->id) }}">
                            @csrf
                            @method('delete')
                        </form>
                    </div>
                </li>
                @empty
                    <h4 class="text-center">No task avalible, create one</h4>
                @endforelse
            </ul>
        </div>
    </div>
</div>
@endsection
