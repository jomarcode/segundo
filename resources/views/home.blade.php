@extends('layouts.app')

@section('title','Bienvenido')

@section('content')
<div id="slider-jomar" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button class="active" data-bs-target="#slider-jomar" data-bs-slide-to="0"></button>
        <button data-bs-target="#slider-jomar" data-bs-slide-to="1"></button>
        <button data-bs-target="#slider-jomar" data-bs-slide-to="2"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="service-slide">
                <img class="d-block w-100 img-fluid h-100" src="{{asset('img/ol.jpg')}}" alt="">
                <div class="carousel-caption">
                    <div class="hero-text py-5 text-center"><br>
                        <div class="hero-text">
                            <h4 class="display-4 mb-3 text-secondary">BIENVENIDO  <span class="text-primary"> A </span></h4>
                            <div class="border-top border-primary w-50 mx-auto my-4"></div>
                            <h1 class="tipeo2"><span class="type5"></span></h1>
                            <p class="mt-3 text-dark">Añade una breve descripción o eslogan aquí para dar más contexto sobre tu página web.</p>
                        </div>

                        <!-- Call to action button -->
                        <a href="{{ url('/servicios')}}" class="btn btn-warning btn-lg mt-4">Explorar más</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="service-slide">
                <img class="d-block w-100 img-fluid h-100" src="{{asset('img/1.jpg')}}" alt="">
                <div class="carousel-caption">
                    <div class="hero-text py-5 text-center"><br>
                        <div class="hero-text">
                            <h4 class="display-4 mb-3 text-secondary">BIENVENIDO  <span class="text-primary"> A </span></h4>
                            <div class="border-top border-primary w-50 mx-auto my-4"></div>
                            <h1 class="tipeo2"><span class="type6"></span></h1>
                            <p class="mt-3 text-dark">Añade una breve descripción o eslogan aquí para dar más contexto sobre tu página web.</p>
                        </div>

                        <!-- Call to action button -->
                        <a href="{{ url('/servicios')}}" class="btn btn-warning btn-lg mt-4">Explorar más</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="service-slide">
               <img class="d-block w-100 img-fluid h-100" src="{{asset('img/home.jpg')}}" alt="">
               <div class="carousel-caption">
                <div class="hero-text py-5 text-center"><br>
                    <div class="hero-text">
                        <h4 class="display-4 mb-3 text-secondary">BIENVENIDO  <span class="text-primary"> A </span></h4>
                        <div class="border-top border-primary w-50 mx-auto my-4"></div>
                        <h1 class="tipeo2"><span class="type7"></span></h1>
                        <p class="mt-3 text-dark">Añade una breve descripción o eslogan aquí para dar más contexto sobre tu página web.</p>
                    </div>

                    <!-- Call to action button -->
                    <a href="{{ url('/servicios')}}" class="btn btn-warning btn-lg mt-4">Explorar más</a>
                </div>
            </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" data-bs-target="#slider-jomar" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" data-bs-target="#slider-jomar" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

<div class="container py-4 text-center">
    <div class="row">
        <div class="col-12">
            <div class="testimonial-title">
                <h3>
                    <span class="left-line"></span>
                    ¿Por Que Trabajar con Factoria Libertad?
                    <span class="right-line"></span>
                </h3>
            </div>
        </div>
    </div>
</div>

@include('_components._service')
{{--
<div class="container mt-5 mb-5 shadow-lg">
    <div class="row ">
        <h1 class="display-6">HISTORIA</h1>
        <div class="col">
           <p>En 1950 se fundo libertad , la factoria con  mas historia de piura . Esta empresa familiar nacio con el nombre de Garaje Libertad , sin embargo en 1999 el nombre cambio a factoria libertad para comunicar la evolucion y crecimiento de la marca  . Han pasado ya tres generaciones con la familia  a cargo del negocio , tres generaciones  de experiencia compromiso e innovacion. </p>
           <p>Su actual gerente general , Ronal Gil , nieto del fundador , quien asumio el cargo  en 22006 , inspirado en la vision de su abuelo  y con espiritu vanguardista , privilegia la capacitacion del capital humano , asi como la innovacion con tecnologia de procesos mecanizados  por arranque de viruta para brindar un excelente servicio  diferenciando para empresas y talleres .</p>
        </div>
        <div class="col text-center">
            <img src="{{asset('img/1.jpg')}}" alt="" class="img-fluid w-100">
        </div>
    </div>
</div> --}}

<div class="container mt-5 mb-5 shadow-lg bg-body-secondary">
    <div class="row ">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <img src="{{asset('img/i.png')}}" alt="" class="img-fluid w-100 rounded">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 text-center">
            <p class="display-4 text-primary">Experiencia Unica con Factorial Libertad</p>
            <h3>Accede a todos nuestros servicios</h3>
            <a href="{{ url('/servicios')}}" class="btn btn-outline-warning btn-lg mt-4 mb-2">Explorar más</a>
        </div>
    </div>
</div>

<div class="container my-3">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <h5 class="text-muted mb-3">CONOCE</h5>
            <h3 class="display-6 mb-4">NUESTROS SERVICIOS</h3>
            <div class="border-top w-50 mx-auto mt-1s"></div>
        </div>
    </div>
</div>
<div class="container mt-4 text-center">
    <div class="row">
        <div class="col-sm-12 col-md-4 col-lg-4 py-2">
            @component('_components.card', ['imgSrc' => asset('img/tt.jpg')])
                @slot('title', 'Mecanizado de Piezas')
                @slot('content', 'Equipos CNC especializados para un mecanizado preciso y eficiente.')
                @slot('buttonText', 'VER MÁS')
            @endcomponent
        </div>

        <div class="col-sm-12 col-md-4 col-lg-4 py-2">
            @component('_components.card', ['imgSrc' => asset('img/sa.jpg')])
                @slot('title', 'Soldadura de Mantenimiento')
                @slot('content', 'Procesos: SMAW - GMAW - GTAW - FCAW. Servicio experto y profesional.')
                @slot('buttonText', 'VER MÁS')
            @endcomponent
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 py-2">
            @component('_components.card', ['imgSrc' => asset('img/home.jpg')])
                @slot('title', 'Servicio de Confiabilidad')
                @slot('content', 'Servicios Integrales de Soluciones de Mantenimiento:')
                @slot('buttonText', 'VER MÁS')
            @endcomponent
        </div>
    </div>
</div>

@include('_components._footer')
@endsection
