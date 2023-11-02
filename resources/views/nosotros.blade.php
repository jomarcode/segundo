@extends('layouts.app')

@section('title','Nosotros')

@section('content')
<div id="slider-jomar" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="service-slide">
                <img class="d-block w-100 img-fluid h-100" src="{{asset('img/2.jpg')}}" alt="">
                <div class="carousel-caption">
                    <div class="hero-text py-5 text-center"><br>
                        <div class="hero-text">
                            <h4 class="display-4 mb-3 text-secondary">LO MEJOR  <span class="text-primary">ESTA AQUI</span></h4>
                            <div class="border-top border-primary w-50 mx-auto my-4"></div>
                            <h1 class="tipeo2"><span class="type3"></span></h1>
                            <p class="mt-3">Añade una breve descripción o eslogan aquí para dar más contexto sobre tu página web.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5 ">
    <h2 class="display-6 text-center mb-4">CLIENTES QUE CONFIAN EN NOSOTROS  </h2>
    <div class="border-top w-50 mx-auto mt-1s"></div>
    <div class="row p-5">
        <div class="col-md-4 mb-4 shadow-lg rounded">
            <blockquote class="blockquote text-center">
                <p class="mb-0">El servicio X es increíble y ha superado mis expectativas.</p>
                <footer class="blockquote-footer">Cliente Satisfecho</footer>
            </blockquote>
        </div>
        <div class="col-md-4 mb-4 shadow-lg rounded">
            <blockquote class="blockquote text-center">
                <p class="mb-0">El servicio X es increíble y ha superado mis expectativas.</p>
                <footer class="blockquote-footer">Cliente Satisfecho</footer>
            </blockquote>
        </div>
        <div class="col-md-4 mb-4 shadow-lg rounded">
            <blockquote class="blockquote text-center">
                <p class="mb-0">El servicio X es increíble y ha superado mis expectativas.</p>
                <footer class="blockquote-footer">Cliente Satisfecho</footer>
            </blockquote>
        </div>
    </div>
</div>

<div class="container my-3">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <h5 class="text-muted mb-3">CONOCE</h5>
            <h3 class="display-6 text-dark mb-4">MÁS SOBRE NOSOTROS</h3>
            <div class="border-top w-50 mx-auto mt-1s"></div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6 mb-3 text-center">
            <div class="nosotros_card shadow-lg rounded">
                <div class="nosotros_imbBx"  data-text="¿Quienes Somos?">
                    <i class="fas fa-5x fa-question"></i>
                </div>
                <div class="nosotros_content">
                    <div>
                        <h3>¿Quienes somos?</h3>
                        <p>Hola Soy jomar diseñador web esta pagina web esta totalmente gratis para que puedan implementar a algun proyecto universitario la unica de
                            condicon de uso es que mejoren algo a esta pagina web para que asi fortalezcan sus conocimientos.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 mb-3 text-center">
            <div class="nosotros_card shadow-lg rounded">
                <div class="nosotros_imbBx" data-text="¿Nuestra Misión?">
                    <i class="fas fa-5x fa-cogs"></i>
                </div>
                <div class="nosotros_content">
                    <div>
                        <h3>Nuestra Visión</h3>
                        <p>Ser una empresa lider a nivel local y reconoocida como la mejor organizacion piurana por brindar un servicio
                            de mantenimiento mecanico atravez de un procedimiento integral.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 mb-3 text-center">
            <div class="nosotros_card shadow-lg rounded">
                <div class="nosotros_imbBx" data-text="¿Nuestra Visión?">
                    <i class="fas fa-5x fa-chart-bar"></i>
                </div>
                <div class="nosotros_content">
                    <div>
                        <h3>Nuestra Misión</h3>
                        <p>Somos una empresa que promueve y garantiza la satisfaccion de nuestros clientes ofreciendoles un eficiente servicio
                            incrementando su productividad  y generandoles valor  atravez de atencion y soporte en mantenimiento mecanico.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 mb-3 text-center">
            <div class="nosotros_card shadow-lg rounded">
                <div class="nosotros_imbBx" data-text="¿Porque escogernos?">
                    <i class="fas fa-5x fa-check-circle"></i>
                </div>
                <div class="nosotros_content">
                    <div>
                        <h3> Nuestros Valores </h3>
                        <p> Satisfaccion del cliente
                            ; Calidad en el servicio
                            ; Respeto al medio ambiente
                            ; Responsabilidad
                            y Trabajo en equipo
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('_components._footer')
@endsection
