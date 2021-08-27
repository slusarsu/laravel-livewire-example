<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LifecycleHooks extends Component
{
    public $foo;
    public $textValue;
    public $hydrateCount = 0;
    public $updatingFooCount = 0;
    public $updatedFooCount = 0;
    public $hydrateFooCount = 0;
    public $hydrateTextValueCount = 0;

    public function mount()
    {
        $this->foo = 'foo string';
        $this->textValue = 'text string';
    }

    public function hydrateFoo($value)
    {
        $this->hydrateFooCount++;
    }

    public function hydrateTextValue($value)
    {
        $this->hydrateTextValueCount++;
    }

    public function dehydrateFoo($value)
    {

    }

    public function hydrate()
    {
        $this->hydrateCount++;
    }

    public function dehydrate()
    {

    }

    public function updating($name, $value)
    {
        dd($name, $value);
    }

    public function updated($name, $value)
    {
        //
    }

    public function updatingFoo($value)
    {
        $this->updatingFooCount++;
    }

    public function updatedFoo($value)
    {
        $this->updatedFooCount++;
    }

    public function render()
    {
        return view('livewire.lifecycle-hooks');
    }
}
