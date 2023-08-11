<nav class="navigator">
    <div>
        <a href="{{route("catalog")}}">
            <img class="NavCatalog" src="{{Vite::asset("resources/images/catalog.svg")}}" alt="">
        </a>
        <a href="{{route("login")}}" class="NavLogin">
            <img src="{{Vite::asset("resources/images/profile.png")}}" alt="" class="NavLogin">
        </a>
        <a href="" class="cart">
            <img src="{{Vite::asset("resources/images/cart.svg")}}" alt="" class="NavCart">
        </a>
    </div>
</nav>
