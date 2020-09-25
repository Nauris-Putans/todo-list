<div>
    @if(session()->has('message'))
        {{$slot}}
        <div class="alert alert-success col-8 offset-2">{{session()->get('message')}}</div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger col-8 offset-2">
            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach
        </div>
    @endif
</div>
