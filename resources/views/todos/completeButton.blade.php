@if($todo->completed)
    <span onclick=
          "event.preventDefault();
          document.getElementById('form-incomplete-{{ $todo->id }}')
          .submit()"

          class="fa fa-check" style="font-size:30px; color: green; cursor: pointer">
    </span>

    <form style="display: none" id="{{ 'form-incomplete-'.$todo->id }}" method="post" action="{{ route('todo.incomplete', $todo->id) }}">
        @csrf
        @method('patch')
    </form>
@else
    <span onclick="
        event.preventDefault();
        document.getElementById('form-complete-{{ $todo->id }}')
        .submit()"

        class="fa fa-check" style="font-size:30px; color: gray; cursor: pointer">

        <form style="display: none" id="{{ 'form-complete-'.$todo->id }}" method="post" action="{{ route('todo.complete', $todo->id) }}">
            @csrf
            @method('patch')
        </form>
@endif
