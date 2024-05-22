<!DOCTYPE html>
<html lang="en">
<head>
    @include('user.css')
</head>
<body id="top">
    {{-- 
        HEADER
    --}}
    <header class="header" data-header>
        <div class="container">
            <div class="overlay" data-overlay></div>

            <a href="#" class="logo">
                {{-- <img src="/images/logo.svg" width="160" height="50" alt="Sapatos logo"> --}}
                <img src="/images/logo.png" width="160" height="50" alt="Sapatos logo">
            </a>

            <button class="nav-open-btn" data-nav-open-btn aria-label="Open Menu">
                <ion-icon name="menu-outline"></ion-icon>
            </button>

            <nav class="navbar" data-navbar>
                <button class="nav-close-btn" data-nav-close-btn aria-label="Close Menu">
                    <ion-icon name="close-outline"></ion-icon>
                </button>
                
                <a href="{{ url('redirect') }}" class="logo">
                    <img src="/images/logo.png" width="190" height="50" alt="Sapatos logo">
                </a>

                <ul class="navbar-list">
                    <li class="navbar-item">
                        <a href="{{ url('redirect') }}" class="navbar-link">Home</a>
                    </li>

                    {{-- <li class="navbar-item">
                        <a href="#" class="navbar-link">About</a>
                    </li> --}}

                    <li class="navbar-item">
                        <a href="#" class="navbar-link">Products</a>
                    </li>

                    {{-- <li class="navbar-item">
                        <a href="#" class="navbar-link">Shop</a>
                    </li> --}}

                    {{-- <li class="navbar-item">
                        <a href="#" class="navbar-link">Blog</a>
                    </li> --}}

                    <li class="navbar-item">
                        <a href="#" class="navbar-link">Contact</a>
                    </li>
                </ul>

                <ul class="nav-action-list">
                    <form action="{{ url('search') }}" method="GET">
                        @csrf
                        <li>
                            {{-- <button type="submit" value="Search" class="nav-action-btn"></button> --}}
                            <input class="nav-action-btn search-btn" type="search" name="search" placeholder="Search">
                        </li>
                    </form>

                    {{-- <li>
                        <a href="{{ route('login') }}" class="nav-action-btn">
                            <ion-icon name="person-outline" aria-hidden="true"></ion-icon>
                            <span class="nav-action-text">Login / Register</span>
                        </a>
                    </li> --}}
                    @if (Route::has('login'))
                        @auth
                            <li>
                                <button class="nav-action-btn">
                                    <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                                    <span class="nav-action-text">Wishlist</span>
                                    <data class="nav-action-badge" value="5" aria-hidden="true">1</data>
                                </button>
                            </li>
                            <li>
                                <a href="{{ url('showcart') }}" class="nav-action-btn">
                                    <ion-icon name="bag-outline" aria-hidden="true"></ion-icon>
                                    <data class="nav-action-text" value="318.00">Basket: <strong>$318.00</strong></data>
                                    <data class="nav-action-badge" value="" aria-hidden="true">{{ $count }}</data>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/dashboard') }}" class="nav-action-btn">
                                    <ion-icon name="person-outline" aria-hidden="true"></ion-icon>
                                    <span class="nav-action-text">Me</span>
                                </a>
                            </li>
                            @else
                                <li>
                                    <a href="{{ route('login') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">Log in</a>
                                </li>

                            @if (Route::has('register'))
                                <li>
                                    <a href="{{ route('register') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">Register</a>
                                </li>
                            @endif
                        @endauth
                    @endif
                </ul>
            </nav>
        </div>
    </header>

    {{-- 
        SHOPPING CART
    --}}
    <section class="section">
        <div class="container">
            <div class="special-product">
                <h2 class="h2 section-title">
                    <span class="text">Shopping Cart</span>

                    <span class="line"></span>
                </h2>
            </div>

            {{-- 
            TABLE
            --}}
            <div class="tabular--wrapper">
                <div class="table--container">
                    <table>
                        <thead>
                            <tr>
                                <th>Remove</th>
                                <th>Image</th>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                            </tr>

                            @foreach($cart as $carts)
                            <tbody>
                                <tr>
                                    <td>
                                        <a class="btn btn-danger" href="#">Delete</a>
                                    </td>
                                    <td>
                                        <img height="50" width="50" src="#" alt="">
                                    </td>
                                    <td>{{ $carts->product_title }}</td>
                                    <td>{{ $carts->quantity }}</td>
                                    <td>{{ $carts->price }}</td
                                </tr>
                            </tbody>
                            @endforeach
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </section>


    <script src="/js/script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>