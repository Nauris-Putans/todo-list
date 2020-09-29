<div>
    <br>
    <div class="d-flex justify-content-center">
        <h3 class="text-lg">Add steps for task
            <span wire:click="increment" class="fa fa-plus py-2" style="cursor: pointer"></span>
        </h3>
    </div>

    <div class="form-group row d-flex">
        @for($i = 0; $i < $steps; $i++)
            <label for="steps" class="col-md-8 col-form-label">Step {{ $i+1 }}
                <span class="fa fa-times px-2 py-2"></span>
            </label>
            <input id="steps"
                   type="text"
                   class="form-control @error('caption') is-invalid @enderror"
                   name="steps"
                   value="{{ old('caption') }}"
                   autocomplete="steps" autofocus>
        @endfor
    </div>
</div>
