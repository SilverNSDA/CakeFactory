<div>
    <nav>
        <div class="top-left links">
            <a class="navbar-brand">Cake Factory</a>
            <a href="/home">Home</a>
            {{--  <a href="/shop">Shop </a>  --}}
            <a href="/cart">Cart</a>
            <a class="scroll" href="#footer">About</a>
        </div>
        <div class="top-right links row">
            
            @auth
                @if (Auth::user()->admin)
                <div style="display:inline-block;">
                    <a class="" href="/admin"><i class="fa fa-caret-down"></i> Administator</a>
                    <div>
                        <a href="/admin">Home</a>
                        <a href="/admin/cakes">Cakes</a>
                        <a href="/admin/chefs">Chefs</a>
                        <a href="/admin/categories">Categories</a>
                        {{--  <a href="/admin/user">User</a>  --}}
                    </div>

                </div>
                <a href="/">Frontpage</a>

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