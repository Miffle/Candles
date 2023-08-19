@extends("layouts.main")
@section("title")
    Candles for your emotions
@endsection
@section("Content")
    <div class="Greeting">
        <div class="HiText">
            Привет, меня зовут Карина, а это мой маркет свечей. В моём каталоге ты сможешь выбрать для себя свечу под
            любой вкус и настроение. Их пока что не так много, поэтому рекомендую следить за обновлениями, чтобы не
            пропустить все самые интересные новинки.
        </div>
        <div class="Social">
            <a href="https://t.me/candlesmarketbot" target="_blank" class="TgChannel">
                <img src="{{Vite::asset("resources/images/telegram.svg")}}" alt="" class="SocialIcon">
                Телеграм канал</a>
        </div>
        <div class="HiText">
            В каталог:
        </div>
        <div class="Social">
            <a href="{{route("catalog")}}" class="TgChannel">Каталог</a>
        </div>
    </div>
@endsection
