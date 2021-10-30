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
                <img src="/img/Test1.png" alt="">
            </div>
            <div class="slid">
                <img src="/img/Test2.png" alt="">
            </div>
            <div class="slid">
                <img src="/img/Test3.png" alt="">
            </div>
            <div class="slid">
                <img src="/img/Test4.png" alt="">
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
var counter =1;
setInterval(function(){
document.getElementById('radio'+counter).checked = true;
counter++;
if(counter>4){
  counter=1;
} 
}, 5000);

</script>





    <div class="games">

        <h1 class="slidertitle">Titulo categoria destaque etc...</h1>
        <div class="slider owl-carousel" style="">
            <div class="card">
                <a href="/">
                    <img class="img" src="/img/Test1.png" alt="Denim Jeans">
                    <div class="content">
                        <h1 class="title">Titulo do jogo</h1>
                        <p class="price">R$00,00</p>
                    </div>
                </a>
            </div>
            <div class="card">
                <a href="/">
                    <img class="img" src="/img/Test2.png" alt="Denim Jeans">
                    <div class="content">
                        <h1 class="title">Titulo do jogo2</h1>
                        <p class="price">R$00,00</p>
                    </div>
                </a>
            </div>
            <div class="card">
                <a href="/">
                    <img class="img" src="/img/Test3.png" alt="Denim Jeans">
                    <div class="content">
                        <h1 class="title">Titulo do jogo3</h1>
                        <p class="price">R$00,00</p>
                    </div>
                </a>
            </div>
            <div class="card">
                <a href="/">
                    <img class="img" src="/img/Test4.png" alt="Denim Jeans">
                    <div class="content">
                        <h1 class="title">Titulo do jogo4</h1>
                        <p class="price">R$00,00</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <script>
        $(".slider").owlCarousel({
            loop: true,
            margin: 20,
            autoplay: true,
            autoplayTimeout: 5000, //1000 = 1 segundo
            autoplayHoverPause: true,

        })
    </script>



@endsection
