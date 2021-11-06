@extends('layouts.main')

@section('title', 'QuestGames')

@section('content')

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <div class="slideshow">
        <div class="slide">
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">

            <div class="slid first">
                <a href="">
                    <img src="/img/Test1.png" alt="">
                </a>
            </div>
            <div class="slid">
                <a href="">
                    <img src="/img/Test2.png" alt="">
                </a>
            </div>
            <div class="slid">
                <a href="">
                    <img src="/img/Test3.png" alt="">
                </a>
            </div>
            <div class="slid">
                <a href="">
                    <img src="/img/Test4.png" alt="">
                </a>
            </div>

            <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
                <div class="auto-btn4"></div>
            </div>



        </div>

        <div class="navigation-manual">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
            <label for="radio4" class="manual-btn"></label>
        </div>
    </div>

    <script type="text/javascript">
        var counter = 1;
        setInterval(function() {
            document.getElementById('radio' + counter).checked = true;
            counter++;
            if (counter > 4) {
                counter = 1;
            }
        }, 5000);
    </script>




@foreach ($categorias as $categoria)
    <div class="games">
        <h1 class="slidertitle">{{$categoria->category_name}}</h1>
        <div class="slider owl-carousel" style="">
            @foreach ($games as $game)
            @if($game->category == $categoria->category_name)
            <div class="card">
                <a href="/game/{{ $game->id }}">
                    <img class="img" src="/img/games/{{$game->image}}" alt="{{$game->nome}}">
                    <div class="content">
                        <h1 class="title">{{$game->nome}}</h1>
                        <p class="price">R${{$game->preco}},00</p>
                    </div>
                </a>
            </div>
            @endif
            @endforeach
        </div>
    </div>
@endforeach
    <script>
        $(".slider").owlCarousel({
            loop: true,
            margin: 20,
            autoplay: true,
            autoplayTimeout: 5000, //1000 = 1 segundo
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1,
                    slideBy:1
                },
                600: {
                    items: 2,
                    slideBy:2
                },
                1000: {
                    items: 3,
                    slideBy:3
                }
            }

        })
    </script>



@endsection
