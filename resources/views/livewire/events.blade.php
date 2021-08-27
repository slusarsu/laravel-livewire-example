<div>
    <div class="row">
        @livewire('cart')
        @foreach($products as $product)
            <div class="col-3 my-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{$product['title']}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Price: ${{$product['price']}}</h6>
                        <p class="card-text">{{$product['description']}}</p>
                        <button class="btn btn-warning" wire:click="addToCart({{$product['id']}})">Add to cart <i class="bi bi-cart"></i></button>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
    <script>
        window.addEventListener('name-updated', event => {
            alert(event.detail.product.title + " added to cart");
        })
    </script>
</div>
