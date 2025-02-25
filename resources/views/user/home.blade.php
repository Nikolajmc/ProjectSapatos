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

            <a href="{{ url('redirect') }}" class="logo">
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
                                    <a href="{{ route('login') }}" class="nav-action-btn">Log in</a>
                                </li>

                            @if (Route::has('register'))
                                <li>
                                    <a href="{{ route('register') }}" class="nav-action-btn">Register</a>
                                </li>
                            @endif
                        @endauth
                    @endif
                </ul>
            </nav>
        </div>
    </header>



    {{-- 
        MAIN
    --}}
    <main>
        <article>
            {{-- 
                HERO
            --}}
            <section class="section hero" style="background-image: url('/images/banner.jpg')">
                <div class="container">
                    <h2 class="h1 hero-title">
                        The Real Comfort & <strong>STYLISH</strong>
                    </h2>

                    <p class="hero-text">
                        Competently expedite alternative benefits whereas leading-edge catalysts for change. Globally leverage existing an expanded array of leadership.
                    </p>

                    <button class="btn btn-primary">
                        <span>Shop Now</span>
                        <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                    </button>
                </div>
            </section>



            {{-- 
                COLLECTION
            --}}
            <section class="section collection">
                <div class="container">
                    <ul class="collection-list has-scrollbar">
                        <li>
                            <div class="collection-card" style="background-image: url('/images/collection-1.jpg')">
                                <h3 class="h4 card-title">Men Collections</h3>
                                <a href="#" class="btn btn-secondary">
                                    <span>Explore All</span>
                                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                                </a>
                            </div>
                        </li>

                        <li>
                            <div class="collection-card" style="background-image: url('/images/collection-2.jpg')">
                                <h3 class="h4 card-title">Women Collections</h3>
                                <a href="#" class="btn btn-secondary">
                                    <span>Explore All</span>
                                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                                </a>
                            </div>
                        </li>

                        <li>
                            <div class="collection-card" style="background-image: url('/images/collection-3.jpg')">
                                <h3 class="h4 card-title">Sports Collections</h3>
                                <a href="#" class="btn btn-secondary">
                                    <span>Explore All</span>
                                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>



            {{-- 
                PRODUCTS
            --}}
            @include('user.product')



            {{-- 
                CTA
            --}}
            <section class="section cta">
                <div class="container">

                    <ul class="cta-list">

                        <li>
                            <div class="cta-card" style="background-image: url('/images/cta-1.jpg')">
                                <p class="card-subtitle">Adidas Shoes</p>

                                <h3 class="h2 card-title">The Summer Sale Off 50%</h3>

                                <a href="#" class="btn btn-link">
                                    <span>Shop Now</span>

                                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                                </a>
                            </div>
                        </li>

                        <li>
                            <div class="cta-card" style="background-image: url('/images/cta-2.jpg')">
                                <p class="card-subtitle">Nike Shoes</p>

                                <h3 class="h2 card-title">Makes Yourself Keep Sporty</h3>

                                <a href="#" class="btn btn-link">
                                    <span>Shop Now</span>

                                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                                </a>
                            </div>
                        </li>

                    </ul>

                </div>
            </section>



            {{-- 
                SPECIAL
            --}}
            <section class="section special">
                <div class="container">

                    <div class="special-banner" style="background-image: url('/images/special-banner.jpg')">
                        <h2 class="h3 banner-title">New Trend Edition</h2>

                        <a href="#" class="btn btn-link">
                            <span>Explore All</span>
    
                            <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                        </a>
                    </div>

                    <div class="special-product">

                        <h2 class="h2 section-title">
                            <span class="text">Nike Special</span>
    
                            <span class="line"></span>
                        </h2>

                        <ul class="has-scrollbar">
                            {{-- 
                                PRODUCT 1
                            --}}
                            <li class="product-item">
                                <div class="product-card" tabindex="0">
                                    <figure class="card-banner">
                                        <img src="/images/product-1.jpg" width="312" height="350" loading="lazy" alt="Running Sneaker Shoes" class="image-contain">
                                        <div class="card-badge">New</div>
                                        <ul class="card-action-list">
                                            <li class="card-action-item">
                                                <button class="card-action-btn" aria-labelledby="card-label-1">
                                                    <ion-icon name="cart-outline"></ion-icon>
                                                </button>
                                                <div class="card-action-tooltip" id="card-label-1">Add to Cart</div>
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
                                            <a href="#" class="card-cat-link">Men</a> /
                                            <a href="#" class="card-cat-link">Women</a>
                                        </div>
    
                                        <h3 class="h3 card-title">
                                            <a href="#">Running Sneaker Shoes</a>
                                        </h3>
    
                                        <data class="card-price" value="180.85">$180.85</data>
                                    </div>
                                </div>
                            </li>
    
                            {{-- 
                                PRODUCT 2
                            --}}
                            <li class="product-item">
                                <div class="product-card" tabindex="0">
                                    <figure class="card-banner">
                                        <img src="/images/product-2.jpg" width="312" height="350" loading="lazy" alt="Leather Mens Slipper" class="image-contain">
                                        {{-- <div class="card-badge">New</div> --}}
                                        <ul class="card-action-list">
                                            <li class="card-action-item">
                                                <button class="card-action-btn" aria-labelledby="card-label-1">
                                                    <ion-icon name="cart-outline"></ion-icon>
                                                </button>
                                                <div class="card-action-tooltip" id="card-label-1">Add to Cart</div>
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
                                            <a href="#" class="card-cat-link">Men</a> /
                                            <a href="#" class="card-cat-link">Sports</a>
                                        </div>
    
                                        <h3 class="h3 card-title">
                                            <a href="#">Leather Mens Slipper</a>
                                        </h3>
    
                                        <data class="card-price" value="190.85">$190.85</data>
                                    </div>
                                </div>
                            </li>
    
                            {{-- 
                                PRODUCT 3
                            --}}
                            <li class="product-item">
                                <div class="product-card" tabindex="0">
                                    <figure class="card-banner">
                                        <img src="/images/product-3.jpg" width="312" height="350" loading="lazy" alt="Simple Fabric Shoe" class="image-contain">
                                        <div class="card-badge">New</div>
                                        <ul class="card-action-list">
                                            <li class="card-action-item">
                                                <button class="card-action-btn" aria-labelledby="card-label-1">
                                                    <ion-icon name="cart-outline"></ion-icon>
                                                </button>
                                                <div class="card-action-tooltip" id="card-label-1">Add to Cart</div>
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
                                            <a href="#" class="card-cat-link">Men</a> /
                                            <a href="#" class="card-cat-link">Women</a>
                                        </div>
    
                                        <h3 class="h3 card-title">
                                            <a href="#">Simple Fabric Shoe</a>
                                        </h3>
    
                                        <data class="card-price" value="160.85">$160.85</data>
                                    </div>
                                </div>
                            </li>
    
                            {{-- 
                                PRODUCT 4
                            --}}
                            <li class="product-item">
                                <div class="product-card" tabindex="0">
                                    <figure class="card-banner">
                                        <img src="/images/product-4.jpg" width="312" height="350" loading="lazy" alt="Air Jordan 7 Retro" class="image-contain">
                                        <div class="card-badge">-25%</div>
                                        <ul class="card-action-list">
                                            <li class="card-action-item">
                                                <button class="card-action-btn" aria-labelledby="card-label-1">
                                                    <ion-icon name="cart-outline"></ion-icon>
                                                </button>
                                                <div class="card-action-tooltip" id="card-label-1">Add to Cart</div>
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
                                            <a href="#" class="card-cat-link">Men</a> /
                                            <a href="#" class="card-cat-link">Sports</a>
                                        </div>
    
                                        <h3 class="h3 card-title">
                                            <a href="#">Air Jordan 7 Retro</a>
                                        </h3>
    
                                        <data class="card-price" value="170.85">$170.85 <del>$200.85</del></data>
                                    </div>
                                </div>
                            </li>
                        </ul>

                    </div>

                </div>
            </section>



            {{-- 
                SERVICE
            --}}
            <section class="section service">
                <div class="container">

                    <ul class="service-list">
                        {{-- 
                            SERVICE ITEM 1
                        --}}
                        <li class="service-item">
                            <div class="service-card">

                                <div class="card-icon">
                                    <img src="/images/service-1.png" width="53" height="28" loading="laze" alt="service icon">
                                </div>

                                <div>
                                    <h3 class="h4 card-title">Free Shiping</h3>

                                    <p class="card-text">
                                        All orders over <span>$150</span>
                                    </p>
                                </div>

                            </div>
                        </li>

                        {{-- 
                            SERVICE ITEM 2
                        --}}
                        <li class="service-item">
                            <div class="service-card">

                                <div class="card-icon">
                                    <img src="/images/service-2.png" width="43" height="35" loading="laze" alt="service icon">
                                </div>

                                <div>
                                    <h3 class="h4 card-title">Quick Payment</h3>

                                    <p class="card-text">
                                        100% secure payment
                                    </p>
                                </div>

                            </div>
                        </li>

                        {{-- 
                            SERVICE ITEM 3
                        --}}
                        <li class="service-item">
                            <div class="service-card">

                                <div class="card-icon">
                                    <img src="/images/service-3.png" width="40" height="40" loading="laze" alt="service icon">
                                </div>

                                <div>
                                    <h3 class="h4 card-title">Free Returns</h3>

                                    <p class="card-text">
                                        Money back in 30 days
                                    </p>
                                </div>

                            </div>
                        </li>

                        {{-- 
                            SERVICE ITEM 4
                        --}}
                        <li class="service-item">
                            <div class="service-card">

                                <div class="card-icon">
                                    <img src="/images/service-4.png" width="40" height="40" loading="laze" alt="service icon">
                                </div>

                                <div>
                                    <h3 class="h4 card-title">24/7 Support</h3>

                                    <p class="card-text">
                                        Get Quick Support
                                    </p>
                                </div>

                            </div>
                        </li>
                    </ul>

                </div>
            </section>



            {{-- 
                INSTA POST
            --}}
            <section class="section insta-post">

                <ul class="insta-post-list has-scrollbar">

                    {{-- 
                        INSTAGRAM POST 1
                    --}}
                    <li class="insta-post-item">
                        <img src="/images/insta-1.jpg" width="100" height="100" loading="lazy" alt="Instagram post" class="insta-post-banner image-contain">

                        <a href="#" class="insta-post-link">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>

                    {{-- 
                        INSTAGRAM POST 2
                    --}}
                    <li class="insta-post-item">
                        <img src="/images/insta-2.jpg" width="100" height="100" loading="lazy" alt="Instagram post" class="insta-post-banner image-contain">

                        <a href="#" class="insta-post-link">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>

                    {{-- 
                        INSTAGRAM POST 3
                    --}}
                    <li class="insta-post-item">
                        <img src="/images/insta-3.jpg" width="100" height="100" loading="lazy" alt="Instagram post" class="insta-post-banner image-contain">

                        <a href="#" class="insta-post-link">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>

                    {{-- 
                        INSTAGRAM POST 4
                    --}}
                    <li class="insta-post-item">
                        <img src="/images/insta-4.jpg" width="100" height="100" loading="lazy" alt="Instagram post" class="insta-post-banner image-contain">

                        <a href="#" class="insta-post-link">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>

                    {{-- 
                        INSTAGRAM POST 5
                    --}}
                    <li class="insta-post-item">
                        <img src="/images/insta-5.jpg" width="100" height="100" loading="lazy" alt="Instagram post" class="insta-post-banner image-contain">

                        <a href="#" class="insta-post-link">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>

                    {{-- 
                        INSTAGRAM POST 6
                    --}}
                    <li class="insta-post-item">
                        <img src="/images/insta-6.jpg" width="100" height="100" loading="lazy" alt="Instagram post" class="insta-post-banner image-contain">

                        <a href="#" class="insta-post-link">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>

                    {{-- 
                        INSTAGRAM POST 7
                    --}}
                    <li class="insta-post-item">
                        <img src="/images/insta-7.jpg" width="100" height="100" loading="lazy" alt="Instagram post" class="insta-post-banner image-contain">

                        <a href="#" class="insta-post-link">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>

                    {{-- 
                        INSTAGRAM POST 8
                    --}}
                    <li class="insta-post-item">
                        <img src="/images/insta-8.jpg" width="100" height="100" loading="lazy" alt="Instagram post" class="insta-post-banner image-contain">

                        <a href="#" class="insta-post-link">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>

                </ul>

            </section>
        </article>
    </main>



    {{-- 
        FOOTER
    --}}
    <footer class="footer">

        <div class="footer-top section">
            <div class="container">

                <div class="footer-brand">

                    <a href="#" class="logo">
                        <img src="/images/logo.png" width="160" height="50" alt="Sapatos logo">
                    </a>

                    <ul class="social-list">

                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-facebook"></ion-icon>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-twitter"></ion-icon>
                            </a>
                        </li>
                        
                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-pinterest"></ion-icon>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-linkedin"></ion-icon>
                            </a>
                        </li>

                    </ul>

                </div>

                <div class="footer-link-box">

                    <ul class="footer-list">

                        <li>
                            <p class="footer-list-title">Contact Us</p>
                        </li>

                        <li>
                            <address class="footer-link">
                                <ion-icon name="location"></ion-icon>

                                <span class="footer-link-text">
                                    Panacan, Bunawan, Davao City
                                </span>
                            </address>
                        </li>

                        <li>
                            <a href="#" class="footer-link">
                                <ion-icon name="call"></ion-icon>

                                <span class="footer-link-text">
                                    0912345678
                                </span>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="footer-link">
                                <ion-icon name="mail"></ion-icon>

                                <span class="footer-link-text">
                                    rolandojayoma@gmail.com
                                </span>
                            </a>
                        </li>

                    </ul>

                    <ul class="footer-list">

                        <li>
                            <p class="footer-list-title">My Account</p>
                        </li>

                        <li>
                            <a href="#" class="footer-link">
                                <ion-icon name="chevron-forward-outline"></ion-icon>

                                <span class="footer-link-text">My Account</span>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="footer-link">
                                <ion-icon name="chevron-forward-outline"></ion-icon>

                                <span class="footer-link-text">View Cart</span>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="footer-link">
                                <ion-icon name="chevron-forward-outline"></ion-icon>

                                <span class="footer-link-text">Wishlist</span>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="footer-link">
                                <ion-icon name="chevron-forward-outline"></ion-icon>

                                <span class="footer-link-text">Compare</span>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="footer-link">
                                <ion-icon name="chevron-forward-outline"></ion-icon>

                                <span class="footer-link-text">New Products</span>
                            </a>
                        </li>

                    </ul>

                    <div class="footer-list">

                        <p class="footer-list-title">Opening Time</p>

                        <table class="footer-table">
                            <tbody>

                                <tr class="table-row">
                                    <th class="table-head" scope="row">Mon - Tue:</th>

                                    <td class="table-data">8AM - 10PM</td>
                                </tr>

                                <tr class="table-row">
                                    <th class="table-head" scope="row">Wed:</th>

                                    <td class="table-data">8AM - 7PM</td>
                                </tr>

                                <tr class="table-row">
                                    <th class="table-head" scope="row">Fri:</th>

                                    <td class="table-data">7AM - 12PM</td>
                                </tr>

                                <tr class="table-row">
                                    <th class="table-head" scope="row">Sat:</th>

                                    <td class="table-data">9AM - 8PM</td>
                                </tr>

                                <tr class="table-row">
                                    <th class="table-head" scope="row">Sun:</th>

                                    <td class="table-data">Closed</td>
                                </tr>

                            </tbody>
                        </table>

                    </div>

                    <div class="footer-list">

                        <p class="footer-list-title">Newsletter</p>

                        <p class="newsletter-text">
                            Authoritatively morph 24/7 potentialities with error-free partnerships.
                        </p>

                        <form action="" class="newsletter-form">
                            <input type="email" name="email" required placeholder="Email Address" class="newsletter-input">

                            <button type="submit" class="btn btn-primary">Subscribe</button>
                        </form>

                    </div>

                </div>

            </div>
        </div>

        <div class="footer-bottom">

            <p class="copyright">
                &copy; 2024 <a href="#" class="copyright-link">Asentrix</a>. All Rights Reserved
            </p>

        </div>

    </footer>



    {{-- 
        GO TO TOP
    --}}
    <a href="#top" class="go-top-btn" data-go-top>
        <ion-icon name="arrow-up-outline"></ion-icon>
    </a>






    <script src="/js/script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>