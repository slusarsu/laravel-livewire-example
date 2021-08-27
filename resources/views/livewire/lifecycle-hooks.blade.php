<div>
    <div class="btn-group my-3" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-secondary">Hydrate Count {{$hydrateCount}}</button>
        <button type="button" class="btn btn-dark">Updating Foo {{$updatingFooCount}}</button>
        <button type="button" class="btn btn-secondary">Updated Foo {{$updatedFooCount}}</button>
        <button type="button" class="btn btn-dark">Hydrate Foo Count {{$hydrateFooCount}}</button>
        <button type="button" class="btn btn-secondary">Hydrate Text Value Count {{$hydrateTextValueCount}}</button>
    </div>
    <div class="row">
        <div class="col-6 my-3">
            <h5>{{$foo}}</h5>
        </div>
        <div class="col-6 my-3">
            <h5>{{$textValue}}</h5>
        </div>

        <div class="col-6 my-3">
            <label for="foo">foo</label>
            <input wire:model="foo" class="form-control" id="foo" type="text" value="{{$foo}}">
        </div>
        <div class="col-6 my-3">
            <label for="text">text</label>
            <input wire:model="textValue" class="form-control" id="text" type="text" value="{{$textValue}}">
        </div>
    </div>
</div>
