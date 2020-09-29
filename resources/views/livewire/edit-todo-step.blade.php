<div>
    <br>
    <div class="d-flex justify-content-center">
        <h3 class="text-lg">Add steps for task
            <span wire:click="increment" class="fa fa-plus py-2" style="cursor: pointer"></span>
        </h3>
    </div>

    @foreach($steps as $step)
        <div class="d-flex justify-content-center py-2" wire:key="{{ $loop->index }}">
            <input name="stepName[]" type="text" class="form-control py-1 px-2" placeholder="{{ 'Step '.($loop->index+1) }}" value="{{ $step['name'] ?? empty($loop->index+1) }}"/>
            <input name="stepId[]" type="hidden" value="{{ $step['id'] ?? empty($loop->index+1) }}"/>
            <span class="fa fa-times px-2 py-2" wire:click="remove({{ $loop->index }})" style="cursor: pointer"/>
        </div>
    @endforeach
</div>
