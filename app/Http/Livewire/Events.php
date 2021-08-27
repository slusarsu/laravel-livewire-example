<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Events extends Component
{
    public $products;

    public function mount()
    {
        $this->products = collect([
            0 => [
                'id' => 1,
                'title' => 'Product 1',
                'description' => "Some quick example text to build on the card title and make up the bulk of the card's content.",
                'price' => 22,
            ],
            1 => [
                'id' => 2,
                'title' => 'Product 2',
                'description' => "Some quick example text to build on the card title and make up the bulk of the card's content.",
                'price' => 23,
            ],
            2 => [
                'id' => 3,
                'title' => 'Product 3',
                'description' => "Some quick example text to build on the card title and make up the bulk of the card's content.",
                'price' => 24,
            ],
            3 => [
                'id' => 4,
                'title' => 'Product 4',
                'description' => "Some quick example text to build on the card title and make up the bulk of the card's content.",
                'price' => 25,
            ],
            4 => [
                'id' => 5,
                'title' => 'Product 5',
                'description' => "Some quick example text to build on the card title and make up the bulk of the card's content.",
                'price' => 12,
            ],
            5 => [
                'id' => 6,
                'title' => 'Product 6',
                'description' => "Some quick example text to build on the card title and make up the bulk of the card's content.",
                'price' => 63,
            ],
            6 => [
                'id' => 7,
                'title' => 'Product 7',
                'description' => "Some quick example text to build on the card title and make up the bulk of the card's content.",
                'price' => 34,
            ],
            7 => [
                'id' => 8,
                'title' => 'Product 8',
                'description' => "Some quick example text to build on the card title and make up the bulk of the card's content.",
                'price' => 45,
            ],
        ]);
    }

    public function addToCart($id)
    {
        $data = $this->products->where('id', $id)->first();
        $this->emitTo('cart', 'addToCart', $data);
    }

    public function render()
    {
        return view('livewire.events');
    }
}
