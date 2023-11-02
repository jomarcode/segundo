@extends('layouts.app')

@section('title','Contactanos')

@section('content')
<div id="slider-jomar" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="service-slide">
                <img class="d-block w-100 img-fluid h-100" src="{{asset('img/contacto.jpg')}}" alt="">
                <div class="carousel-caption">
                    <div class="hero-text py-5 text-center"><br>
                        <div class="hero-text">
                            <h4 class="display-4 mb-3 text-secondary">COMUNICATE <span class="text-primary">CON NOSOTROS</span></h4>
                            <div class="border-top border-primary w-50 mx-auto my-4"></div>
                            <h1 class="tipeo2"><span class="type4"></span></h1>
                            <p class="mt-3 text-dark">Añade una breve descripción o eslogan aquí para dar más contexto sobre tu página web.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Galería de Productos -->
<div class="container mt-5">
    <h2 class="display-6 text-center mb-4">NUESTROS SERVICIOS MAS DESTACADOS</h2>
    <div class="border-top w-50 mx-auto mt-1s"></div>
    <div class="row py-5">
        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow">
                <img src="URL_IMAGEN_PRODUCTO" alt="Producto" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Nombre del servicio</h5>
                    <p class="card-text">Descripción corta del  servicio</p>
                    <a href="#" class="btn btn-primary">Ver más</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow">
                <img src="URL_IMAGEN_PRODUCTO" alt="Producto" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Nombre del servicio</h5>
                    <p class="card-text">Descripción corta del  servicio</p>
                    <a href="#" class="btn btn-primary">Ver más</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow">
                <img src="URL_IMAGEN_PRODUCTO" alt="Producto" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Nombre del servicio</h5>
                    <p class="card-text">Descripción corta del servicio.</p>
                    <a href="#" class="btn btn-primary">Ver más</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container my-3">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <h5 class="text-muted mb-3">CONOCE</h5>
            <h3 class="display-6 mb-4">COMO CONTACTARNOS</h3>
            <div class="border-top w-50 mx-auto mt-1s"></div>
        </div>
    </div>
</div>


<div class="conatiner py-4 ">
    <div class="form shadow-lg ">
        <div class="contact-info">
                <h3 class="contact_tittle">ESTAMOS UBICADOS EN</h3>
                <p class="contact_text">Estamos aquí para responder a tus preguntas y brindarte un excelente servicio. ¡No dudes en contactarnos o visitarnos !
                </p>

            <div class="contactos_info">
                <div class="contact_information">
                    <i class="fas fa-2x fa-map-marker-alt"></i>
                    <p>Piura | Av.Cusco FACTORIA-LA/LIBERTAD </p>
                </div>
                <div class="contact_information">
                <i class="fas fa-2x fa-phone-volume"></i>
                    <p>969911844</p>
                </div>
                <div class="contact_information">
                    <i class="far fa-2x fa-envelope"></i>
                    <p> info@factorialibertad.com</p>
                </div>
            </div>
            <div class="social_media">
                <p>REDES SOCIALES</p>
                <div class="social-icons">
                    <a href="https://web.facebook.com/factorialibertad/?locale=es_LA&_rdc=1&_rdr" target="none">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" target="none">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="" target="none">
                        <i class="fab fa-twitter-square"></i>
                    </a>
                    <a href="#" target="none">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="contact-form">
            <form action="" autocomplete="off">
                <h3 class="contact_tittle">COMUNÍCATE CON NOSOTROS</h3>
                <div class="input-container ">
                    <input type="text" name="name" class="contact_input" placeholder="NOMBRE">
                </div>
                <div class="input-container">
                    <input type="text" name="email" class="contact_input" placeholder="EMAIL">
                </div>
                <div class="input-container">
                    <input type="tel" name="celular" class="contact_input" placeholder="CELULAR">
                </div>
                <div class="input-container">
                    <textarea name="mensaje" class="contact_input" id="" placeholder="MENSAJE"></textarea>
                </div>
                <input type="submit" value="ENVIAR" class="contact_btn">
            </form>
        </div>
    </div>
</div>
<div class="container my-3 mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <h3 class="display-6 text-dark mb-4">ESTAMOS UBICADOS EN </h3>
            <div class="border-top w-50 mx-auto mt-1s"></div>
        </div>
    </div>
</div>
<div class="container mt-5 mb-5 shadow-lg rounded">
    <div class="row">
        <div class="col-lg-6 ">
            <iframe class="img-fluid w-100"  src="https://www.google.com/maps/embed?pb=!4v1695498358240!6m8!1m7!1suNFiSj8OxHUXp-sWsN6SgA!2m2!1d-5.193669113820013!2d-80.62777010490633!3f109.12777!4f0!5f0.7820865974627469" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-lg-6 ">
            <iframe class="img-fluid w-100"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.4373713133486!2d-80.63017172589566!3d-5.193729194783826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x904a107eae95f529%3A0x34d00623a9fce77c!2sC.%20Cusco%20523%2C%20Piura%2020001!5e0!3m2!1ses!2spe!4v1695498092796!5m2!1ses!2spe" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>
@include('_components._footer')
@endsection
