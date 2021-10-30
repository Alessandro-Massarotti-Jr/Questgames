@extends('layouts.main')

@section('title', 'QuestGames')

@section('content')

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <h1>Tela Inicial</h1>

    <!-- Slideshow container -->
    <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="/img/Flogin.png" style="width:100%">
            <div class="text">Caption Text</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="img2.jpg" style="width:100%">
            <div class="text">Caption Two</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="img3.jpg" style="width:100%">
            <div class="text">Caption Three</div>
        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <!-- The dots/circles -->
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>





<div class="games">

<h1 class="slidertitle">Titulo categoria destaque etc...</h1>
    <div class="slider owl-carousel" style="">
        <div class="card">
            <a href="/">
                <img class="img" src="/img/HDC_logo.svg" alt="Denim Jeans">
                <div class="content">
                    <h1 class="title">Titulo do jogo</h1>
                    <p class="price">R$00,00</p>
                </div>
            </a>
        </div>
        <div class="card">
          <a href="/">
              <img class="img" src="/img/Flogin.png" alt="Denim Jeans">
              <div class="content">
                  <h1 class="title">Titulo do jogo2</h1>
                  <p class="price">R$00,00</p>
              </div>
          </a>
      </div>
      <div class="card">
        <a href="/">
            <img class="img" src="/img/HDC_logo.svg" alt="Denim Jeans">
            <div class="content">
                <h1 class="title">Titulo do jogo3</h1>
                <p class="price">R$00,00</p>
            </div>
        </a>
    </div>
    <div class="card">
      <a href="/">
          <img class="img" src="/img/HDC_logo.svg" alt="Denim Jeans">
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
            margin:20,
            autoplay: true,
            autoplayTimeout: 5000, //1000 = 1 segundo
            autoplayHoverPause: true,
            
        })
    </script>



@endsection
