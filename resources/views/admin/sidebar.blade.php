<div class="sidebar">
    <div class="logo">
        <a href="#" class="logo-img">
            <img src="/images/sapatoslogo.png" width="140" height="50" alt="Sapatos logo">
        </a>
    </div>

    <ul class="menu">
        <li class="">
            <a href="{{ url('redirect') }}">
                <i class="fas fa-tachometer-alt"></i>
                <Span>Dashboard</Span>
            </a>
        </li>

        <li>
            <a href="{{ url('product') }}">
                <i class="fas fa-tachometer-alt"></i>
                <Span>Add Product</Span>
            </a>
        </li>

        <li>
            <a href="{{ url('showproduct') }}">
                <i class="fas fa-tachometer-alt"></i>
                <Span>Show Product</Span>
            </a>
        </li>

        <li class="logout">
            <a href="{{ route('profile.show') }}">
                <i class="fas fa-sign-out-alt"></i>
                <span>Profile</span>
            </a>
        </li>
    </ul>
</div>