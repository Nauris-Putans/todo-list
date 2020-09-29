@extends('layouts.app')

@section('content')
<div class="container">
    <x-alert />
    <form action="{{ route('todo.store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-8 offset-2">

                <div class="d-flex justify-content-center">
                    <h1 class="text-center">What next you need To-Do</h1>
                </div>
                <hr>

                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label">{{ __('Title') }}</label>
                    <input id="title"
                           type="text"
                           class="form-control @error('caption') is-invalid @enderror"
                           name="title"
                           value="{{ old('caption') }}"
                           autocomplete="title" autofocus>
                </div>

                <div class="form-group row">
                    <label for="title" class="col-md-8 col-form-label">{{ __('Description') }}</label>
                    <textarea class="p-2 rounded border" cols="100" rows="7" name="description" id="description"></textarea>
                </div>

                <div class="form-group row">
                    <div class="d-flex justify-content-center">
                        <h2 class="text-lg">Add steps for task
                            <a href="{{ route('todo.create') }}" class="mx-2">
                                <span class="fa fa-plus py-2"></span>
                            </a>
                        </h2>
                    </div>

                    <input id="description"
                           type="text"
                           class="form-control @error('caption') is-invalid @enderror"
                           name="description"
                           value="{{ old('caption') }}"
                           autocomplete="description" autofocus>
                </div>

                <div class="row pt-2">
                    <button class="btn btn-primary">Create</button>
                    <a href="{{ route('todo.index') }}" class="mx-2 btn btn-danger">Back</a>
                </div>

            </div>
        </div>
    </form>
</div>
@endsection
