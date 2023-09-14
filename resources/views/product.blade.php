@extends("layouts.main")
@section("title")
    {{$Product->name}}
@endsection
@section("Content")
    <div class="mainContainer">
        <div class="productInfo">
            <img class="ProductPoster" src="{{asset("storage/".$Product->image)}}"
                 alt="{{$Product->name}}">
            <h3 class="ProductName">{{$Product->name}}</h3>
            <label class="ProductDescription">{{$Product->description}}</label>
            <h2>{{$Product->price}} ₽</h2>
        </div>
        <div class="controlsBtns">
            @if(!Cart::get($Product->id))
                <a class="addToCartBtn" href="{{route("createProduct", ["id" => $Product->id])}}">Добавить в корзину</a>
            @else
                <a class="minusBtn" id="minusBtn"
                   href="{{route("updateProduct", ["id" => $Product->id, "updateNumber" => -1])}}">-</a>

                <p id="itemCount" class="inCartCount">{{Cart::get($Product->id)->quantity}} шт.</p>
                <a class="plusBtn" href="{{route("updateProduct", ["id" => $Product->id, "updateNumber" => 1])}}">+</a>
            @endif
        </div>
    </div>
@endsection
