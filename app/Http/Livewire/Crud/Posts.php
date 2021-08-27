<?php

namespace App\Http\Livewire\Crud;

use App\Contracts\IPost;
use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class Posts extends Component
{
    use WithPagination, WithFileUploads;

    protected $listeners = ['getAll'];
    protected $paginationTheme = 'bootstrap';

    protected $rules = [
        'post.title' => 'required|string|min:6',
        'post.text' => 'required|string|max:500',
        'post.newImage' => 'image|max:1024'
    ];

    public $post = [];
    public $showPostForm = false;
    public $addBtn = true;
    public $btnText = "Save";

    public function mount()
    {

    }

    public function hydrate()
    {

    }

    public function getAll($paginate)
    {
        return Post::orderBY('id', 'DESC')->paginate($paginate);
    }

    public function addPost()
    {
        $this->post = [];
        $this->addBtn = true;
        $this->btnText = "Save";
        $this->showPostForm(true);
    }

    public function create()
    {
        $this->validate();

        if(!empty($this->post['newImage'])) {
            $imagePath = $this->post['newImage']->storeAs('photos', time().'_file', 'public');
            $this->post['image'] = 'storage/'.$imagePath;
        }

        Post::create($this->post);

        $this->showPostForm(false);

        session()->flash('message', 'Post successfully created.');
    }

    public function remove($id)
    {
        Post::where('id', $id)->delete();

        session()->flash('message', 'Post successfully removed.');
    }

    public function edit($post)
    {
        $this->post = $post;
        $this->showPostForm(true);
        $this->btnText = 'Update';
        $this->addBtn = false;
    }

    public function update()
    {
        $this->validate();

        $newImage = null;

        if(!empty($this->post['newImage'])) {
            $imagePath = $this->post['newImage']->storeAs('photos', time().'_file', 'public');
            $newImage = 'storage/'.$imagePath;
        }

        Post::where('id', $this->post['id'])->update([
            'title' => $this->post['title'],
            'text' => $this->post['text'],
            'image' => $newImage,
        ]);

        $this->showPostForm(false);

        session()->flash('message', 'Post successfully updated.');
    }

    public function showPostForm($value)
    {
        $this->showPostForm = $value;
    }

    public function duplicate($id)
    {
        $post =  Post::find($id);
        $post = $post->replicate();
        $post->title = $post->title.'_copy';
        $post->save();
    }

    public function render()
    {
        $posts = $this->getAll(4);

        return view('livewire.crud.posts', ['posts' => $posts]);
    }
}
