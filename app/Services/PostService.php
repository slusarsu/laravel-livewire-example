<?php


namespace App\Services;


use App\Contracts\IPost;

class PostService implements IPost
{

    private $post;

    public function __construct($post)
    {
        $this->post = $post;
    }

    public function getAll()
    {
        return $this->post::all();
    }

    public function create($data)
    {
        return $this->post::create($data);
    }

    public function getById($id)
    {
        return $this->post::where('id',$id)->first();
    }

    public function remove($id)
    {
        return $this->post::where('id',$id)->delete();
    }

    public function update($id, $data)
    {
        return $this->post::where('id',$id)->update($data);
    }
}
