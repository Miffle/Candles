<header>
    <div class="left-piece">
        <a href="{{route("catalog")}}">
            <img class="catalog" src="{{Vite::asset("resources/images/catalog.svg")}}" alt="">
        </a>
    </div>
    <a href="/">
        <img src="{{Vite::asset("resources/images/titleForShop.png")}}" alt="" class="ShopName">
    </a>
    <div class="right-piece">
        @if($user==null)
            <a href="{{route("login")}}" class="login">
                <img src="{{Vite::asset("resources/images/profile.png")}}" alt="" class="login">
            </a>
        @else()
            <a href="{{route("profile")}}">
                <img src="{{Vite::asset("resources/images/profile.png")}}" alt="" class="login">
            </a>
        @endif
        <a href="" class="cart">
            <img src="{{Vite::asset("resources/images/cart.png")}}" alt="" class="cart">
        </a>
    </div>
</header>
