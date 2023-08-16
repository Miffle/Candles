@extends("layouts.main")
@section("title")
    Корзина
@endsection
@section("Content")
    @if(!\Cart::isEmpty())
        <main>
            <div class="cartContent">
                @foreach($cart as $product)
                    <div class="product">
                        <div class="productCard">
                            <img src="{{Vite::asset("resources/images/".$product->attributes->image)}}" alt="">
                            <p>{{$product->name}}</p>
                        </div>
                        <div class="controls">
                            <div class="minusPlus"><a class="minusBtn" id="minusBtn"
                                                      href="{{route("updateProduct", ["id" => $product->id, "updateNumber" => -1])}}">-</a>

                                <p class="inCartCount">{{\Cart::get($product->id)->quantity}}</p>
                                <a class="plusBtn"
                                   href="{{route("updateProduct", ["id" => $product->id, "updateNumber" => 1])}}">+</a>
                            </div>
                            <a class="removeBtn" href="{{route("removeProduct", ["id" => $product->id])}}">Удалить</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <a href="{{route("start")}}" class="paymentBtn">Оплатить</a>
        </main>
    @else
        <p>Тут пусто :(</p>

    @endif
@endsection
