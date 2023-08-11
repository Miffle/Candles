@extends("layouts.main")
@section("title")
    {{$Product->name}}
@endsection
@section("Content")
    <div class="mainContainer">
        <img class="ProductPoster" src="{{Vite::asset("resources/images/".$Product->image)}}" alt="{{$Product->name}}">
        <h3 class="ProductName">{{$Product->name}}</h3>
        <label class="ProductDescription">{{$Product->description}}</label>
    </div>
@endsection
