@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/todos/create" method="post">
        @csrf

        <div class="row">
            <div class="col-8 offset-2">

                <div class="row">
                    <h2>What next you need To-Do</h2>
                </div>

                <div class="form-group row">
                    <label for="task" class="col-md-4 col-form-label">{{ __('Task') }}</label>

                    <input id="task"
                           type="text"
                           class="form-control @error('caption') is-invalid @enderror"
                           name="task"
                           value="{{ old('caption') }}"
                           autocomplete="task" autofocus>

                    @error('task')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="row pt-2">
                    <button class="btn btn-primary">Create todo task</button>
                </div>

            </div>
        </div>
    </form>
</div>
@endsection
