<?php


namespace App\Contracts;


interface IPost
{
    public function getAll();
    public function create($data);
    public function getById($id);
    public function remove($id);
    public function update($id, $data);
}
