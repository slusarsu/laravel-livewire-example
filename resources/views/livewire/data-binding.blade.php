<div>
    <h5>Text: {{$bind_text}}</h5>
    <div class="row">
        <div class="col-6">
            @if(!$checked)

                <div class="mb-3">
                    <label for="Standard" class="form-label">Standard Binding</label>
                    <input wire:model="bind_text" class="form-control" id="Standard" type="text" value="{{$bind_text}}">
                </div>

                <div class="mb-3">
                    <label for="Lazy" class="form-label">Lazy Binding</label>
                    <input wire:model.lazy="bind_text" class="form-control" id="Lazy" type="text" value="{{$bind_text}}">
                </div>

                <div class="mb-3">
                    <label for="Timeout" class="form-label">Timeout Binding</label>
                    <input wire:model.debounce.2000ms="bind_text" class="form-control" id="Timeout" type="text" value="{{$bind_text}}">
                </div>

                <hr>

                @foreach($selected as $item)
                    {{$item}} ,
                @endforeach

                <select wire:model="selected" class="form-select my-2" multiple aria-label="Default select example">
                    <option>Tom</option>
                    <option>John</option>
                    <option>Igor</option>
                </select>

                <hr>

                <div class="mb-3">
                    <label for="defer" class="form-label">Defer Binding</label>
                    <input wire:model.defer="query" class="form-control" id="defer" type="text" value="{{$query}}">
                </div>

                <button wire:click="search" class="btn btn-success">Search</button>
                {{$done}} {{$query}}

            @endif

            <hr>

            <div class="form-check my-3">
                <input wire:model="checked" class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault"> CheckBox: Hide Fields </label>
            </div>
        </div>
    </div>
</div>
