@extends('layouts.main')

@section('title', 'QuestGames')

@section('content')

    <h1>Tela Inicial</h1>

<!-- Slideshow container -->
<div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img src="/img/Floglin.png" style="width:100%">
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


    <div class="card-container">
        <div class="card">
            <h1>Titulo do jogo</h1>
            <img src="/img/HDC_logo.svg" alt="Denim Jeans">
            <p class="price">R$00,00</p>
            <p><button>ver mais</button></p>
            <p><button>carrinho</button></p>
        </div>
        <div class="card">
            <h1>Titulo do jogo</h1>
            <img src="/img/HDC_logo.svg" alt="Denim Jeans">
            <p class="price">R$00,00</p>
            <p><button>ver mais</button></p>
            <p><button>carrinho</button></p>
        </div>
        <div class="card">
            <h1>Titulo do jogo</h1>
            <img src="/img/HDC_logo.svg" alt="Denim Jeans">
            <p class="price">R$00,00</p>
            <p><button>ver mais</button></p>
            <p><button>carrinho</button></p>
        </div>
        <div class="card">
            <h1>Titulo do jogo</h1>
            <img src="/img/HDC_logo.svg" alt="Denim Jeans">
            <p class="price">R$00,00</p>
            <p><button>ver mais</button></p>
            <p><button>carrinho</button></p>
        </div>
    </div>

@endsection
