@extends("layouts.main")
@section("title"){{$result->name}}@endsection
@section("Content")
@foreach($productsInThisCategory as $product)
    <a href="{{route("product", [$result->engName, $product->engName, $product->id])}}">{{$product->engName}}</a>
@endforeach
@endsection
