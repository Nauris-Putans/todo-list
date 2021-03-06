@extends('layouts.app')

@section('content')
    <div class="container">
        <x-alert />
        <form action="{{ route('todo.update', $todo->id) }}" method="post">
            @csrf
            @method('patch')

            <div class="row">
                <div class="col-8 offset-2">

                    <div class="d-flex justify-content-center">
                        <h1 class="text-center">Update todo list</h1>
                    </div>
                    <hr>

                    <div class="form-group row">
                        <label for="title" class="col-md-4 col-form-label">{{ __('Title') }}</label>

                        <input id="title"
                               type="text"
                               class="form-control @error('caption') is-invalid @enderror"
                               name="title"
                               value="{{ $todo->title }}"
                               autocomplete="title" autofocus>
                    </div>

                    <div class="form-group row">
                        <label for="title" class="col-md-8 col-form-label">{{ __('Description') }}</label>
                        <textarea class="p-2 rounded border"
                                  cols="100"
                                  rows="7"
                                  name="description"
                                  id="description">{{ $todo->description }}</textarea>
                    </div>

                    @livewire('edit-todo-step', ['steps' => $todo->steps])

                    <div class="row pt-2">
                        <button class="btn btn-primary">Update</button>
                        <a href="{{ route('todo.index') }}" class="mx-2 btn btn-danger">Back</a>
                    </div>

                </div>
            </div>
        </form>
    </div>
@endsection
