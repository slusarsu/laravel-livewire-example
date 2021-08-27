<div>
    <h5 wire:mouseover="$set('name', 'Tom')">Hello! {{$name}}</h5>

    <div class="row">
        <div class="col-6 my-3">
            <input wire:model="name" class="form-control" id="Standard" type="text" value="{{$name}}">
        </div>

        <div class="col-6 my-3">
            <button wire:click="resetName" class="btn btn-success">Reset name</button>
            <button wire:click="$set('name', 'New Name')" class="btn btn-warning">Set name</button>
        </div>

        <hr>

        <div class="col-12 my-3">
            <h5>Push enter</h5>
            <input wire:keydown.enter="$set('name', 'Alex')" class="form-control" id="Standard" type="text">
        </div>

        <hr>

        <div class="col-6 my-3">
            <h5>Notes</h5>
            <form wire:submit.prevent="sevNote" action="#">
                <input wire:model="note.title" class="form-control my-3" type="text" placeholder="title" required>
                <input wire:model="note.description" class="form-control my-3" type="text" placeholder="description" required>
                <button type="submit" class="btn btn-success">Save Note</button>
            </form>
        </div>

        <div class="col-6 my-3">
            @foreach($notes as $item)

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{$item->title}}</h5>
                        <p class="card-text">{{$item->description}}</p>
                        <button Wire:click="removeNote({{$item->id}})" class="btn btn-danger">Remove Card</button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</div>
