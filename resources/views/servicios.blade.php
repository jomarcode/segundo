@extends('layouts.app')


@section('title','Servicios')

@section('content')
<div id="slider-jomar" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="service-slide">
                <img class="d-block w-100 img-fluid h-100" src="{{asset('img/servicio.png')}}" alt="">
                <div class="carousel-caption">
                    <div class="hero-text py-5 text-center"><br>
                        <div class="hero-text">
                            <h4 class="display-4 mb-3 text-secondary">NUESTROS <span class="text-primary">SERVICIOS </span></h4>
                            <div class="border-top border-primary w-50 mx-auto my-4"></div>
                            <h1 class="tipeo2"><span class="type"></span></h1>
                            <p class="mt-3 text-dark">Añade una breve descripción o eslogan aquí para dar más contexto sobre tu página web.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container my-3">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <h5 class="text-muted mb-3">CONOCE</h5>
            <h3 class="display-6 mb-4">MÁS SOBRE TODO NUESTROS SERVICIOS</h3>
            <div class="border-top w-50 mx-auto mt-1s"></div>
        </div>
    </div>
</div>

<div class="container container-fluid py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="tab-content">
                <div id="servicio1" class="tab-pane fade show active  text-center">
                    @include('_components.modals')
                    <!-- Servicio de Soldadura -->
                    <div class="card mb-3 shadow-lg hover-card">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{asset('img/soldadura.jpg')}}" class="img-fluid rounded" alt="Servicio de Soldadura">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Soldadura de Mantenimiento</h5>
                                    <p class="card-text">Realizamos soldadura de mantenimiento utilizando diversos Procesos: SMAW - GMAW - GTAW - FCAW. Servicio experto y profesional.</p>
                                    <button type="button" class="btn btn-outline-primary " data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Detalles
                                   </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Servicio de Mecanizado -->
                    <div class="card mb-3 shadow-lg hover-card">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{asset('img/servicios-general.jpg')}}" class="img-fluid rounded" alt="Servicio de Soldadura">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Servicio de Confiabilidad</h5>
                                    <p class="card-text">Servicios Integrales de Soluciones de Mantenimiento:</p>
                                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#jomarModal">
                                        Detalles
                                   </button>
                                </div>
                            </div>
                        </div>
                        <!-- Contenido del Servicio 1 -->
                    </div>
                    <div class="card mb-3 shadow-lg hover-card">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{asset('img/cnc.jpg')}}" class="img-fluid rounded" alt="Servicio de Mecanizado">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Servicio de Mecanizado de Piezas [Equipos CNC]</h5>
                                    <p class="card-text">Ofrecemos servicios de mecanizado de piezas con Equipos CNC especializados para un mecanizado preciso y eficiente.</p>
                                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#cruzModal">
                                        Detalles
                                   </button>
                                </div>
                            </div>
                        </div>
                        <!-- Contenido del Servicio 2 -->
                    </div>
                </div>
                <!-- Agrega más elementos tab-pane para otros servicios si es necesario -->
            </div>
        </div>
    </div>
</div>
@include('_components._footer')
@endsection
