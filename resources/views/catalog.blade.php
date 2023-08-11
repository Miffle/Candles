@extends("layouts.main")
@section("title")Catalog @endsection
@section("Content")
@foreach($categories as $category)
    <a href="{{route("products", $category->engName)}}">
        <img src="{{Vite::asset("resources/images/".$category->image)}}" alt="{{$category->name}}" style="width: 15vw">
        {{$category->name}}
    </a>
@endforeach
@endsection
