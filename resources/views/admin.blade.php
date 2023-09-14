@extends("layouts.main")
@section("title")
    {{$user->name}}
@endsection
@section("Content")
    <div class="addProductForm">
        <form action="{{route("addProduct")}}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="nameInput">Название продукта</label>
            <input type="text" id="nameInput" name="name">

            <label for="engNameInput">Транслитное название продукта</label>
            <input type="text" id="engNameInput" name="engName">

            <label for="descriptionInput">Описание</label>
            <input type="text" id="descriptionInput" name="description">

            <label for="priceInput">Цена продукта</label>
            <input type="number" id="priceInput" name="price">

            <label for="typeInput">Тип продукта</label>
            <select name="type" id="typeInput">
                @foreach($types as $type)
                    <option value="{{$type->id}}">{{$type->name}}</option>
                @endforeach
            </select>

            <label for="image">Загрузить фотографию продукта</label>
            <input type="file" accept=".png, .jpg, .webp, .jpeg" id="image" name="image">
            <button type="submit">Создать</button>
        </form>
    </div>
    <div class="addTypeForm">
        <form action="{{route("addProductType")}}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="typeName">Название категории</label>
            <input type="text" name="name" id="typeName">

            <label for="typeEngName">Название категории транслитом</label>
            <input type="text" name="engName" id="typeEngName">

            <label for="typeImage">Загрузить фотографию категории</label>
            <input type="file" accept=".png, .jpg, .webp, .jpeg" id="typeImage" name="image">
            <button type="submit">Создать</button>

        </form>
    </div>
@endsection
