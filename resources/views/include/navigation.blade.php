<nav class="navigator">
    <div>
        <a href="{{route("start")}}">
            <img class="NavHome" src="{{Vite::asset("resources/images/home.svg")}}" alt="">
        </a>
        <a href="{{route("catalog")}}">
            <img class="NavCatalog" src="{{Vite::asset("resources/images/catalog.svg")}}" alt="">
        </a>
        @if($user==null)
            <a href="{{route("login")}}" class="NavLogin">
                <img src="{{Vite::asset("resources/images/profile.png")}}" alt="" class="NavLogin">
            </a>
        @else()
            <div class="logout">
                <a href="{{route("profile")}}">
                    <img src="{{Vite::asset("resources/images/profile.png")}}" alt="" class="NavLogin">
                </a>
            </div>
        @endif
        <a href="{{route("cart")}}" class="cart">
            <img src="{{Vite::asset("resources/images/cart.png")}}" alt="" class="NavCart">
            @if(\Cart::getTotalQuantity())
                <p class="countIndicator">{{\Cart::getTotalQuantity()}}</p>
            @endif
        </a>
    </div>
</nav>
