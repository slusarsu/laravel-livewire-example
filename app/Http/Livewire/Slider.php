<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Slider extends Component
{
    public $slide = 1;
    public $slidesCount = 5;

    public function render()
    {
        return view('livewire.slider');
    }

    public function slideNext()
    {
        $this->slide++;

        if($this->slide > $this->slidesCount) $this->slide = 1;
    }

    public function slidePrev()
    {
        $this->slide--;

        if(!$this->slide) $this->slide = 1;
    }
}
