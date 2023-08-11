@extends("layouts.main")
@section("title"){{$Product->name}}@endsection
@section("Content")
    <img src="{{Vite::asset("resources/images/".$Product->image)}}" alt="{{$Product->name}}" style="width: 15vw">
    <h3>{{$Product->name}}</h3>
    <label>{{$Product->description}}</label>
@endsection
