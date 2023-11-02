
<nav class="navbar navbar-expand-lg  bg-body-secondary fixed-top shadow-lg">
    <div class="container d-flex justify-content-between">
        <a class="navbar-brand" href="#">
            <img class="img-fluid" src="{{ asset('img/logo.png')}}" alt="logo" width="180" height="100" class="d-inline-block align-text-top">
        </a>

        <button class="navbar-toggler bg-warning" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="offcanvas offcanvas-end bg-body-secondary" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">MENU</h5>
                <button type="button" class="btn-close btn-close-dark bg-warning" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>

            <div class="offcanvas-body  d-lg-flex">
                <ul class="navbar-nav justify-content-center flex-grow-1 py-2 pe-3 shadow-lg rounded">
                    <li class="nav-item">
                        <a class="nav-link  mx-3" href="{{url('/')}}">INICIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-3" href="{{ url('/servicios')}}">SERVICIOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-3" href="{{url('/nosotros')}}">SOBRE NOSOTROS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-3" href="{{url('/contact')}}">CONTACTO</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>


