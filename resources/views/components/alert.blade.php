<div>
    @if(session()->has('message'))
        {{$slot}}
        <div class="alert alert-success">{{session()->get('message')}}</div>
    @endif
</div>
