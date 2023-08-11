@extends("layouts.main")
@section("title")
    Catalog
@endsection
@section("Content")
    <div class="content">
        @foreach($categories as $category)
            <a class="category" href="{{route("products", $category->engName)}}">
                <img src="{{Vite::asset("resources/images/".$category->image)}}" alt="{{$category->name}}">
                <p>{{$category->name}}</p>
            </a>
        @endforeach
    </div>
@endsection
