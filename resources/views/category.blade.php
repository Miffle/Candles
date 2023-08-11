@extends("layouts.main")
@section("title")
    {{$result->name}}
@endsection
@section("Content")
    <div class="content">
        @foreach($productsInThisCategory as $product)
            <a class="category" href="{{route("product", [$result->engName, $product->engName, $product->id])}}">
                <img src="{{Vite::asset("resources/images/".$product->image)}}" alt="">
                <p>{{$product->name}}</p>
            </a>
        @endforeach
    </div>
@endsection
