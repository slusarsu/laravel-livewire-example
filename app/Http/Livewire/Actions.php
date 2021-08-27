<?php

namespace App\Http\Livewire;

use App\Models\Note;
use App\Models\User;
use Livewire\Component;

class Actions extends Component
{
    public $name = 'John Doe';

    public $note = [];

    public $notes = [];

    public function mount()
    {
        $this->getNotes();
    }

    public function render()
    {
        return view('livewire.actions');
    }

    public function resetName()
    {
        $this->name = 'John Doe';
    }

    public function sevNote()
    {
        Note::create($this->note);
        $this->note = [];
        $this->getNotes();
    }

    public function getNotes()
    {
        $this->notes = Note::orderBy('id', 'desc')->get();
    }

    public function removeNote($id)
    {
        Note::where('id', $id)->delete();
        $this->getNotes();
    }
}
