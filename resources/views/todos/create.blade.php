@extends('layouts.app')

@section('content')
<div class="container">
    <x-alert />
    <form action="/todos/create" method="post">
        @csrf

        <div class="row">
            <div class="col-8 offset-2">

                <div class="row">
                    <h2>What next you need To-Do</h2>
                </div>

                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label">{{ __('Title') }}</label>

                    <input id="title"
                           type="text"
                           class="form-control @error('caption') is-invalid @enderror"
                           name="title"
                           value="{{ old('caption') }}"
                           autocomplete="title" autofocus>
                </div>

                <div class="row pt-2">
                    <button class="btn btn-primary">Create</button>
                </div>

            </div>
        </div>
    </form>
</div>
@endsection
