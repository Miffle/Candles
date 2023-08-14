@extends("layouts.main")
@section("title")
    {{$user->name}}
@endsection
@section("Content")
    <div class="mainContainer">
        <p class="Name">{{$user->name}}</p>
        <p class="email">{{$user->email}}</p>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
        <a onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
           class="NavLogin">Выйти</a>
    </div>
@endsection
