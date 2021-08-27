<div>
    <button wire:click="addPost" type="button" class="btn btn-success">
        Add Post <i class="bi bi-plus-circle"></i>
    </button>

    @if($showPostForm)
        <div class="my-3">

            <form wire:submit.prevent="@if($addBtn) create @else update @endif" action="#">
                <div class="mb-3">
                    <label for="post-title" class="form-label">Title</label>
                    <input wire:model.defer="post.title" type="text" class="form-control" id="post-title" placeholder="Title" required>
                    @error('post.title')
                        <smal class="text-danger">{{$errors->first('post.title')}}</smal>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="post-text" class="form-label">Text</label>
                    <textarea wire:model.defer="post.text" class="form-control" id="post-text" rows="3" required></textarea>
                    @error('post.text')
                    <smal class="text-danger">{{$errors->first('post.text')}}</smal>
                    @enderror
                </div>

                <div class="mb-3">
                    <div class="row">
                        <div class="col-6">
                            <label for="newImage" class="form-label">Image</label>
                            <input wire:model.defer="post.newImage" type="file" class="form-control" id="newImage" placeholder="Title" required>
                            @error('post.image')
                            <smal class="text-danger">{{$errors->first('post.newImage')}}</smal>
                            @enderror
                        </div>
                        <div class="col-6">
                            @if(!empty($post['image']))
                                <label for="post-image" class="form-label">Old Image</label>
                                <p><img src="{{asset($post['image'])}}" alt="" width="200px" id="post-image"></p>
                            @endif
                        </div>
                    </div>



                </div>

                @if(!empty($post['id']))
                    <input wire:model.defer="post.id" type="hidden" class="form-control" id="post-id">
                @endif



                <button wire:click="showPostForm(false)" type="button" class="btn btn-secondary" >Hide</button>
                <button type="submit" class="btn @if($addBtn) btn-success @else btn-warning @endif ">{{$btnText}}</button>
            </form>
        </div>
        <hr>
    @endif

    <div class="my-3">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>

    @foreach($posts as $item)
        <div class="card my-3">
            <div class="row g-0">
                <div class="col-md-2">
                    <img src="@if($item->image) {{asset($item->image)}} @else {{asset('img/no-image.png')}} @endif" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-10">
                    <div class="card-body">
                        <div class="text-end">
                            <button wire:click="edit({{$item}})" class="btn btn-warning" title="Edit">
                                <i class="bi bi-pencil-fill"></i>
                            </button>
                            <button wire:click="duplicate({{$item->id}})" class="btn btn-light" title="Duplicate">
                                <i class="bi bi-files"></i>
                            </button>
                            <button wire:click="remove({{$item->id}})" class="btn btn-danger" title="Remove">
                                <i class="bi bi-trash-fill"></i>
                            </button>
                        </div>
                        <h5 class="card-title">{{$item->title}}</h5>
                        <p class="card-text">{{$item->text}}</p>

                    </div>
                </div>
            </div>
        </div>
    @endforeach

    {{ $posts->links() }}
</div>
