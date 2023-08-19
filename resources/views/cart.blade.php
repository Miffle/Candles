@extends("layouts.main")
@section("title")
    Корзина
@endsection
@section("Content")
    @if(!Cart::isEmpty())
        <main>
            <div class="cartContent">
                @foreach($cart as $product)
                    <div class="product">
                        <a href="{{route("product", ["Category"=>$product->attributes->category, "EngName"=>$product->attributes->EngName, "id"=>$product->id])}}"
                           class="productCard">
                            <img src="{{asset("storage/".$product->attributes->image)}}" alt="">
                        </a>
                        <div class="controls">
                            <p class="productName">{{$product->name}}</p>
                            <p>{{\Cart::get($product->id)->getPriceSum()}} ₽</p>
                            <div class="minusPlus">
                                <a class="minusBtn" id="minusBtn"
                                href="{{route("updateProduct", ["id" => $product->id, "updateNumber" => -1])}}">-</a>
                                    <p class="inCartCount">{{Cart::get($product->id)->quantity}} шт.</p>
                                <a class="plusBtn"
                                   href="{{route("updateProduct", ["id" => $product->id, "updateNumber" => 1])}}">+</a>
                            </div>
                            <a class="removeBtn" href="{{route("removeProduct", ["id" => $product->id])}}">Удалить</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <a href="{{route("start")}}" class="paymentBtn">Оплатить - {{\Cart::getTotal()}} ₽</a>
        </main>
    @else
        <p>Тут пусто :(</p>

    @endif
@endsection
