<div>
    <div class="col-12 my-3">
        <button type="button" class="btn btn-primary position-relative"  data-bs-toggle="modal" data-bs-target="#cartItemsModal">
            Cart <i class="bi bi-cart-check"></i>
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    {{$cartCount}}
                    <span class="visually-hidden">unread messages</span>
                </span>
        </button>
    </div>

    <div class="modal fade" id="cartItemsModal" tabindex="-1" aria-labelledby="cartItemsModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cartItemsModalLabel">Products List</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul class="list-group">
                        @foreach($cartData as $item)
                            <li class="list-group-item">
                                ${{$item['price']}} - {{$item['title']}}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
