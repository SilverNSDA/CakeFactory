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
                @if (Auth::user()->admin)
                    <a href="/admin"><i class="fa fa-caret-down"></i> Administator</a>
                @endif
                <a href="/logout">Logout</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    </nav>
    <div style="align:center;">
    </div>
</div>