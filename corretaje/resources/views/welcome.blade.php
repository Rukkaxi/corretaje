<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Corretaje de Propiedades</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            /* Estilos adicionales si es necesario */
        </style>
    @endif
</head>
<body class="font-sans antialiased">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Corretaje de Propiedades</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#inicio">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#propiedades">Propiedades</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sobre-nosotros">Sobre Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contacto">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Carrusel de Propiedades -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://via.placeholder.com/800x400" class="d-block w-100" alt="Propiedad 1">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Propiedad 1</h5>
                    <p>Ubicación: Ciudad, País | Precio: $XXX,XXX</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://via.placeholder.com/800x400" class="d-block w-100" alt="Propiedad 2">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Propiedad 2</h5>
                    <p>Ubicación: Ciudad, País | Precio: $XXX,XXX</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://via.placeholder.com/800x400" class="d-block w-100" alt="Propiedad 3">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Propiedad 3</h5>
                    <p>Ubicación: Ciudad, País | Precio: $XXX,XXX</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>

    <!-- Sección "¿Por qué contratarnos?" -->
    <section id="por-que-contratarnos" class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>¿Por qué contratarnos?</h2>
                    <p class="lead">Somos expertos en el mercado inmobiliario y te ayudamos a encontrar la propiedad perfecta.</p>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-check text-success"></i> Amplia experiencia en el sector.</li>
                        <li><i class="fas fa-check text-success"></i> Asesoramiento personalizado.</li>
                        <li><i class="fas fa-check text-success"></i> Propiedades exclusivas.</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <img src="https://via.placeholder.com/500x300" class="img-fluid" alt="Imagen de corretaje">
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>Contacto</h5>
                    <p>Email: info@corretaje.com</p>
                    <p>Teléfono: +123 456 789</p>
                </div>
                <div class="col-md-4">
                    <h5>Redes Sociales</h5>
                    <a href="#" class="text-white me-2"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="text-white me-2"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-white me-2"><i class="fab fa-instagram"></i></a>
                </div>
                <div class="col-md-4">
                    <h5>Política de Privacidad</h5>
                    <a href="#" class="text-white">Leer más</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS y dependencias -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <!-- FontAwesome para íconos -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>
