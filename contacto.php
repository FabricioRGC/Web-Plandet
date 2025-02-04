<!doctype html>
<html lang="es-pe" style="scroll-behavior: smooth;"> 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PLADET - Trujillo</title>
    <link rel="icon" href="pictures/LOGO_PLANDET_icon.png" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    
</head>
    <style>
    .logo-container{
        width: 250px !important;
        margin-top: 20px;
        margin-bottom: 20px;
        margin-left: 15px;
    }
    .plandet{
        width: 230px;
    }
    .municipalidad
    {
        margin: 0 auto; /* Centra la imagen horizontalmente */
    }
    .nav-item img {
    width: 32px;
    }
    @media (max-width: 1400px) {
        .municipalidad{
            display: none;
        }
    }
    .bg-image {
        background-position: center top !important;
        background-size: cover; /* Ocupa todo el espacio sin deformar la imagen */
        background-repeat: no-repeat;
        width: 100%; /* Fuerza que ocupe el ancho completo */
        height: 100%; /* Fuerza que ocupe el alto completo */
    }
    .card {
        background-position: center center;
        background-size: cover;
        background-repeat: no-repeat;
        border: none;
        position: relative;
    }
    .carousel-indicators [data-bs-target] {
        width: 30px;
        height: 10px;
        background-color: #fff;
        transition: all 0.5s ease;
    }
    .carousel-indicators button.active {
        width: 60px;
        background-color: #1F4B66;
    }
    .card::before {
        width: 100%;
        height: 100%;
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(180deg, #fff 0%, black 100%);
        z-index: 1;
        mix-blend-mode: multiply;
    }
    .card-body {
        position: absolute;
        z-index: 3;
    }
    .headlines a {
        text-decoration: none;
        color: #fff;
        transition: all 0.5s ease;
    }
    .headlines a:hover {
        text-decoration: underline;
    }
    .icons .icon {
        display: flex;
        gap: 0.3em;
    }
    .btn-custom-blue {
        background-color: #1F4B66; /* Azul */
        color: white; /* Color del texto */
        border: 2px solid #0e2330; /* Borde azul */
    }
    .btn-custom-blue:hover {
        background-color: #65A693; /* Azul más oscuro al hacer hover */
        border-color: #426d60; /* Borde azul más oscuro */
        color: black;
    }
    .btn-custom-green {
        background-color: #65A693; /* Verde */
        color: black; /* Color del texto */
        border: 2px solid #426d60; /* Borde verde */
    }
    .btn-custom-green:hover {
        background-color: #1F4B66;
        border-color: #0e2330;
        color: white;
    }
    .custom-text-green{
        color: #65A693;
    }
    .custom-box-green{
        border: 1px solid #1F4B66;
    }
    .socialbar_whatsapp {
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 1000;
    }
    .socialbar_whatsapp a {
        font-size: 25px;
        color: #fff;
        background-color: #25D366; /* Color oficial de WhatsApp */
        padding: 15px;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }
    .socialbar_whatsapp a:hover {
        background-color: #128C7E;
        transform: scale(1.1);
    }
    .whatsapp_link{
        text-decoration: none;
    }

    </style>

<body class="">
    <nav class="navbar navbar-expand-xxl bg-light shadow-sm sticky-top">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <div class="logo-container plandet">
                <a href="index.php">
                    <img src="pictures/LOGO_PLANDET_OK.svg" alt="Logo 1" title="Plan de Desarrollo Territorial de Trujillo" class="img-fluid justify-content-right" style="height: auto;">
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link scroll-offset" href="index.php#tramites_y_servicios">Tramites y Servicios</a></li>
                    <!--<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="tramitesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Subgerencias</a>
                        <ul class="dropdown-menu" aria-labelledby="tramitesDropdown">
                            <li><a class="dropdown-item" href="tramites_geomatica.html">Subgerencia Geomática</a></li>
                            <li><a class="dropdown-item" href="tramites_planificacion.html">Subgerencia Planificación</a></li>
                            <li><a class="dropdown-item" href="tramites_titulacion.html">Subgerencia Titulación</a></li>
                        </ul>
                    </li>-->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="index.php" id="visorDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Visor MPT</a>
                        <ul class="dropdown-menu" aria-labelledby="visorDropdown">
                            <li><a class="dropdown-item" href="index.php">Visita nuestro visor</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="index.php">Contacto</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php">Noticias</a></li>
                </ul>
            </div>
            <div class="logo-container municipalidad">
                <img src="pictures/LOGO_MUNICIPALIDAD.png" alt="Logo 2" title="Municipalidad Provincial de Trujillo" class="img-fluid justify-content-left" style="height: 80px;">
            </div>
        </div>
    </nav>
    


    <div class="position-relative py-2 text-center w-100 h-50" style="min-height: auto;">
        <div class="w-100 h-50">
            <div class="w-100 h-50">
                <div class="h-50 text-light news card d-flex flex-row justify-content-center align-items-center bg-image" 
                    style="background: linear-gradient(45deg, #1F4B66, #65A693);; min-height: 25vh; background-size: cover; background-position: center;">
                    <div class="card-body">
                        <h1 class="headlines">
                            <a href="https://www.msn.com/en-us/weather/topstories/wildfire-from-interstate-crash-spreads-rapidly-over-mountains/ar-AA1kb42t?ocid=winp2fptaskbar&cvid=852c058a60854cd59f21ce6fcac3ec49&ei=379">
                                Contacto PLANDET
                            </a>
                            <p>somososss</p>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>













    <div class="socialbar_whatsapp ">
        <a class="whatsapp_link" target="_blank" title="WhatsApp PLANDET" href="https://wa.me/31617039960">
            <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
        </a>
    </div>

    <footer class="py-5 bg-light" id="Contacto">
        <div class="container text-center">
            <h4 class="mb-2"></h4>
            <p class="mb-3">Teléfono: (044) 244212</p>
            <p class="mb-3">Correo: plandet@gmail.com</p>
            <h4 class="mb-2"></h4>
            <p class="mb-3">Sede: Av. España 793, Trujillo 13001</p>
            <p class="mb-4">Todos los derechos reservados © 2025 <b>PLANDET</b></p>
            <div class="d-flex justify-content-center align-items-center">
                <a href="https://www.facebook.com/PLANDETTRUJILLO/" target="_blank" class="mx-2">
                    <img src="pictures/facebook.svg" alt="Facebook" class="img-fluid" style="max-height: 40px; width: 45px;">
                </a>
                <a href="https://instagram.com" target="_blank" class="mx-2">
                    <img src="pictures/instagram.svg" alt="Instagram" class="img-fluid" style="max-height: 40px; width: 45px">
                </a>
                <a href="https://youtube.com" target="_blank" class="mx-2">
                    <img src="pictures/youtube.svg" alt="Twitter" class="img-fluid" style="max-height: 40px; width: 45px">
                </a>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>