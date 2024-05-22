<section class="section product">
    <div class="container">
        <h2 class="h2 section-title">Bestsellers Products</h2>

        <ul class="filter-list">
            <li>
                <button class="filter-btn  active">All</button>
            </li>

            <li>
                <button class="filter-btn">Nike</button>
            </li>

            <li>
                <button class="filter-btn">Adidas</button>
            </li>

            <li>
                <button class="filter-btn">Puma</button>
            </li>

            <li>
                <button class="filter-btn">Bata</button>
            </li>

            <li>
                <button class="filter-btn">Apex</button>
            </li>
        </ul>

        {{-- 
                PRODUCT LIST
            --}}
        <ul class="product-list">
            @foreach($data as $product)
            <li class="product-item">
                <div class="product-card" tabindex="0">
                    <figure class="card-banner">
                        <img src="/productimage/{{ $product->image }}" width="312" height="350" loading="lazy" alt="Running Sneaker Shoes" class="image-contain">
                        <div class="card-badge">New</div>
                        <ul class="card-action-list">
                            <li class="card-action-item">
                                <form action="{{ url('addcart', $product->id) }}" method="POST">
                                    @csrf
                                    <button class="card-action-btn" aria-labelledby="card-label-1">
                                        <ion-icon name="cart-outline"></ion-icon>
                                    </button>
                                    <div class="card-action-tooltip" id="card-label-1">Add to Cart</div>
                                </form>
                            </li>

                            <li class="card-action-item">
                                <button class="card-action-btn" aria-labelledby="card-label-2">
                                    <ion-icon name="heart-outline"></ion-icon>
                                </button>
                                <div class="card-action-tooltip" id="card-label-2">Add to Wishlist</div>
                            </li>

                            <li class="card-action-item">
                                <button class="card-action-btn" aria-labelledby="card-label-3">
                                    <ion-icon name="eye-outline"></ion-icon>
                                </button>
                                <div class="card-action-tooltip" id="card-label-3">Quick View</div>
                            </li>

                            <li class="card-action-item">
                                <button class="card-action-btn" aria-labelledby="card-label-4">
                                    <ion-icon name="repeat-outline"></ion-icon>
                                </button>
                                <div class="card-action-tooltip" id="card-label-4">Compare</div>
                            </li>
                        </ul>
                    </figure>
                    
                    <div class="card-content">
                        <div class="card-cat">
                            <a href="#" class="card-cat-link">{{ $product->description }}</a>
                        </div>

                        <h3 class="h3 card-title">
                            <a href="#">{{ $product->title }}</a>
                        </h3>

                        <data class="card-price" value="">${{ $product->price }}</data>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>

        @if(method_exists($data, 'links'))
        <div class="pagination">
            {!! $data->links() !!}
        </div>
        @endif
    </div>
</section>