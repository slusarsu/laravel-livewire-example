<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Cart extends Component
{
    public $cartCount = 0;

    public $cartData = [];

    protected $listeners = [
        'addToCart' => 'cartIncrement',
        'removeFromCart' => 'cartDecrement',
    ];

    public function cartIncrement($data)
    {
        $this->cartData[] = $data;
        $this->cartCount++;
        $this->dispatchBrowserEvent('name-updated', ['product' => $data]);
    }

    public function cartDecrement()
    {
        $this->cartCount--;
    }

    public function render()
    {
        return view('livewire.cart');
    }
}
