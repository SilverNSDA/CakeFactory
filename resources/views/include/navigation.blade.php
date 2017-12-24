<div>
    <nav>
        <div class="top-left links">
            <a class="navbar-brand">Cake Factory</a>
            <a href="/home">Home</a>
            <a href="/shop">Shop </a>
            <a href="/cart">Cart</a>
            <a class="scroll" href="#footer">About</a>
        </div>
        <div class="top-right links">
            @auth
                <a href="{{ url('/') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    </nav>
    <div style="align:center;">
    </div>
</div>