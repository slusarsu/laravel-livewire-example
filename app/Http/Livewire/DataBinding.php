<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DataBinding extends Component
{
    public $bind_text = "Binding Page";

    public $checked = false;

    public $selected = ['Tom'];

    public $query = '';

    public $done = '';

    public function render()
    {
        return view('livewire.data-binding');
    }

    public function search()
    {
        $this->done = 'Good!';
    }
}
