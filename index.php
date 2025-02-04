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
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
    <style>

    .list-group-item a {
    color: black !important;
    text-decoration: none !important;
}

    
    .logo-container{
        width: 250px !important;
        margin-top: 10px;
        margin-bottom: 10px;
        margin-left: 10px;
    }
    .plandet{
        width: 230px;
    }
    .municipalidad{
        text-align: center;
    }

    .nav-item img {
    width: 32px;
    }
    @media (max-width: 1400px) {
        .municipalidad{
            display: none;
        }
    }
    @media (max-width: 530px) {
        .carousel-indicators{
            display: none;
        }
    }

    .bg-image {
        background-position: center top !important;
        background-size: cover;
        background-repeat: no-repeat;
        width: 100%;
        height: 100%;
    }

    .card {
        background-position: center center;
        background-size: cover;
        background-repeat: no-repeat;
        border: none;
        position: relative;
    }

    .carousel-indicators [data-bs-target] {
        width: 25px;
        height: 10px;
        background-color: #fff;
        transition: all 0.5s ease;
    }

    .carousel-indicators button.active {
        width: 50px;
        background-color: rgba(31, 75, 102, 0.5);
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
        background-color: #1F4B66;
        color: white;
        border: 2px solid #0e2330;
    }

    .btn-custom-blue:hover {
        background-color: #68A69B;
        border-color: #426d60;
        color: black;
    }

    .btn-custom-green {
        background-color: #65A693;
        color: black;
        border: 2px solid #426d60;
    }

    .btn-custom-green:hover {
        background-color: #1F4B66;
        border-color: #0e2330;
        color: white;
    }
    .custom-text-green{
        color: #259978;
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
        background-color: #25D366;
        padding: 15px;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .socialbar_whatsapp a:hover {
        background-color: #123340;
        transform: scale(1.1);
    }

    .whatsapp_link{
        text-decoration: none;
    }












    .sidebar {
        background-color: #123340;
        height: 100%;
        padding: 20px;
        border-radius: 10px;
    }
    .sidebar a {
        display: block;
        padding: 12px;
        color: white;
        text-decoration: none;
        font-size: 18px;
        border-radius: 5px;
        margin-bottom: 5px;
    }
    .sidebar a.active, .sidebar a:hover {
        background-color: #0A2230;
        border: 1px solid #18475a;
    }
    .content-box {
        height: 100%;
        background-color: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }










    .btn {
    border-radius: 8px;
    transition: all 0.3s ease;
    }
    .btn:hover {
        background-color: #34656D;
        color:rgb(71, 157, 170);
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
    }

.list-group-item {
    border-radius: 5px;
    margin: 5px 0;
    transition: background-color 0.3s ease;
}
.list-group-item:hover {
    background-color: #E9F7F6;
}


.description {
        overflow-y: auto;
        padding: 10px;
    }
    .list-container {
        padding: 10px;
    }
    .list-group {
        min-height: 160px;
        max-height: 160px;
        overflow-y: auto;
        padding-left: 4px;
        padding-right: 4px;
    }




    .list-group::-webkit-scrollbar {
        width: 8px;
    }

    .list-group::-webkit-scrollbar-track {
        background: #88bab2;
    }

    .list-group::-webkit-scrollbar-thumb {
        background: #123340;
        border-radius: 10px;
    }

    .list-group::-webkit-scrollbar-thumb:hover {
        background: #25657f;
    }






    .content-container {
        display: flex;
        gap: 20px;
    }
    .description {
        width: 70%;
        background-color: #f8f9fa;
        padding: 15px;
        border-radius: 8px;
    }
    .list-container {
        width: 30%;
    }
    .modal-dialog {
        max-width: 90vw;
    }
    .modal-body {
        max-height: 80vh;
        overflow-y: auto;
    }


    @media (max-width: 768px) {
    .content-container {
        display: flex;
        flex-direction: column;
    }
    .description {
        height: auto !important;
        width: 100%;
    }
    .list-container {
        width: 100%;
    }
}
</style>


<body class="">
    <nav class="navbar navbar-expand-xxl bg-light shadow-sm sticky-top" style="background-color: #F2F2F2 !important;">
        <div class="container-xxl d-flex justify-content-between align-items-center">
            <div class="logo-container plandet">
                <a href="index.php">
                    <img src="pictures/LOGO_PLANDET_OK.svg" alt="Logo 1" title="Plan de Desarrollo Territorial de Trujillo" class="img-fluid" style="height: auto;">
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link scroll-offset" href="#tramites_y_servicios">Tramites y Servicios</a></li>
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
                <img src="pictures/LOGO_MUNICIPALIDAD.png" alt="Logo 2" title="Municipalidad Provincial de Trujillo" class="img-fluid" style="height: 80px;">
            </div>
        </div>
    </nav>
    <main class="" style="height: 90vh;">
        <div id="carouselExampleIndicators" class="carousel slide w-100 h-100 d-flex flex-row justify-content-center align-items-center" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-indicators" style=" bottom: -5px; z-index: 10; position: absolute;">
                <div class="py-1 px-1 rounded-6" style="background-color: rgba(0, 0, 0, 0.473);">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1" >
                    </button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2" class="">
                    </button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3" class="">
                    </button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4" class="">
                    </button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5" class="">
                    </button>
                </div>
            </div>
            <div class="w-100 h-100">
                <div class="position-relative text-center w-100 h-100">
                    <div class="carousel-inner w-100 h-100">
                        <div class="carousel-item active w-100 h-100">
                            <div  class="h-100 text-light news card d-flex flex-row justify-content-center align-items-end bg-image" style="background-image: url('pictures/picture0001.jpeg');">
                                <div class="card-body">
                                    <h1 class="headlines">
                                        <a href="https://www.msn.com/en-xl/lifestyle/shopping/mushroom-shaped-earbuds-based-on-popular-japanese-kinoko-no-yama-snacks-to-go-on-sale/ar-AA1k8r98?ocid=msedgdhp&pc=U531&cvid=029498f338fe4366b71cea0c21a3a9a2&ei=219">Entreaga de mas de 700 titulos por parte de nuestro alcalde.</a>
                                    </h1>
                                    <div class="icons">
                                        <span class="icon"><i class="fa-regular fa-calendar"></i>12/12/2024</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item w-100 h-100">
                            <div  class="h-100 text-light news card d-flex flex-row justify-content-center align-items-end bg-image" style="background-image: url('pictures/picture0002.jpeg');">
                                <div class="card-body">
                                    <h1 class="headlines">
                                        <a href="https://www.msn.com/en-us/news/technology/elon-musk-says-the-risk-of-advanced-ai-is-so-high-that-the-public-needs-to-know-why-openai-fired-sam-altman/ar-AA1kbZpi?cvid=dd06d8fb2f5144179d660d2744a74f5b&ocid=winp2fptaskbar&ei=3">Impulsar proyectos ambientales, incluyendo la reforestación urbana y la gestión eficiente de las distintas áreas.</a>
                                    </h1>
                                    <div class="icons">
                                        <span class="icon"><i class="fa-regular fa-calendar"></i>12/12/2024</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item w-100 h-100">
                            <div  class="h-100 text-light news card d-flex flex-row justify-content-center align-items-end bg-image" style="background-image: url('pictures/picture0003.jpeg');">
                                <div class="card-body">
                                    <h1 class="headlines">
                                        <a href="https://www.msn.com/en-us/news/world/a-60-year-old-russian-tank-apparently-tried-attacking-the-ukrainian-marines-dnipro-bridgehead-the-tank-didn-t-survive/ar-AA1kcrpI?ocid=winp2fptaskbar&cvid=852c058a60854cd59f21ce6fcac3ec49&ei=372">Firma de Titulos de propiedad por parte de las familias formalizadas en Alto Trujillo.</a>
                                    </h1>
                                    <div class="icons">
                                        <span class="icon"><i class="fa-regular fa-calendar"></i>12/12/2024</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item w-100 h-100">
                            <div  class="h-100 text-light news card d-flex flex-row justify-content-center align-items-end bg-image" style="background-image: url('pictures/picture0002.jpeg');">
                                <div class="card-body">
                                    <h1 class="headlines">
                                        <a href="https://www.msn.com/en-us/sports/fifa-world-cup/latest-brazil-argentina-encounter-presents-a-chance-to-change-history/ar-AA1kcbIy?ocid=winp2fptaskbar&cvid=852c058a60854cd59f21ce6fcac3ec49&ei=378">Impulsar proyectos ambientales, incluyendo la reforestación urbana y la gestión eficiente de las distintas áreas.</a>
                                    </h1>
                                    <div class="icons">
                                        <span class="icon"><i class="fa-regular fa-calendar"></i>12/12/2024</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item w-100 h-100">
                            <div  class="h-100 text-light news card d-flex flex-row justify-content-center align-items-end bg-image" style="background-image: url('pictures/picture0003.jpeg');">
                                <div class="card-body">
                                    <h1 class="headlines">
                                        <a href="https://www.msn.com/en-us/weather/topstories/wildfire-from-interstate-crash-spreads-rapidly-over-mountains/ar-AA1kb42t?ocid=winp2fptaskbar&cvid=852c058a60854cd59f21ce6fcac3ec49&ei=379">Firma de Titulos de propiedad por parte de las familias formalizadas en Alto Trujillo.</a>
                                    </h1>
                                    <div class="icons">
                                        <span class="icon"><i class="fa-solid fa-calendar"></i>12/12/2024</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev" title="Previous">
                    <i class="fa-solid fa-chevron-left text-bg-dark text-light py-3 px-3 rounded"></i>
                    <span class="carousel-control-prev-icon visually-hidden" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next" title="Next">
                    <i class="fa-solid fa-chevron-right text-bg-dark text-light py-3 px-3 rounded"></i>
                    <span class="carousel-control-next-icon visually-hidden" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </main>





    <div class="container-xxl mt-5" style="margin-bottom: 20px;">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3">
                <div class="sidebar">
                    <a href="javascript:void(0);" class="active" onclick="showContent('quienes-somos')">¿Quiénes Somos?</a>
                    <a href="javascript:void(0);" onclick="showContent('mision')">Misión</a>
                    <a href="javascript:void(0);" onclick="showContent('vision')">Visión</a>
                    <a href="javascript:void(0);" onclick="showContent('valores')">Valores</a>
                </div>
            </div>

            <!-- Contenido Dinámico -->
            <div class="col-md-9">
                <div class="content-box" id="content" style="background-color: #F2F2F2">
                    <h2 class="text-center">¿Quiénes Somos?</h2>
                    <h4 class="text-center text-secondary">(PLANDET)</h4>
                    <p class="mt-4">
                        Somos una entidad de la Municipalidad Provincial de Trujillo encargada de la planificación, ordenamiento y desarrollo sostenible del territorio. Nos dedicamos a la generación y gestión de información territorial, al diseño de estrategias urbanas y a la formulación de planes que contribuyan a mejorar la calidad de vida de los ciudadanos. 
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showContent(section) {
            let content = {
                "quienes-somos": `
                    <h2 class="text-center">¿Quiénes Somos?</h2>
                    <h4 class="text-center text-secondary">(PLANDET)</h4>
                    <p class="mt-4">
                        Somos una entidad de la Municipalidad Provincial de Trujillo encargada de la planificación, ordenamiento y desarrollo sostenible del territorio. Nos dedicamos a la generación y gestión de información territorial, al diseño de estrategias urbanas y a la formulación de planes que contribuyan a mejorar la calidad de vida de los ciudadanos.
                    </p>
                `,
                "mision": `
                    <h2 class="text-center">Misión</h2>
                    <p class="mt-4">
                        Nuestra misión es promover el desarrollo ordenado y sostenible de la Provincia de Trujillo mediante la planificación territorial, la gestión del suelo y la implementación de políticas urbanas innovadoras. Trabajamos para fomentar un entorno equitativo, resiliente e inclusivo.
                    </p>
                `,
                "vision": `
                    <h2 class="text-center">Visión</h2>
                    <p class="mt-4">
                        Ser una entidad líder en planificación territorial, reconocida por su innovación y eficiencia en la gestión del desarrollo urbano y rural, contribuyendo a una ciudad sostenible y organizada.
                    </p>
                `,
                "valores": `
                    <h2 class="text-center">Valores</h2>
                    <ul class="mt-4">
                        <li><strong>Compromiso:</strong> Trabajo constante para mejorar la calidad de vida de los ciudadanos.</li>
                        <li><strong>Innovación:</strong> Uso de herramientas modernas en planificación territorial.</li>
                        <li><strong>Transparencia:</strong> Procesos claros y participativos.</li>
                        <li><strong>Sostenibilidad:</strong> Protección del medio ambiente y desarrollo equilibrado.</li>
                    </ul>
                `
            };

            document.getElementById("content").innerHTML = content[section];

            let links = document.querySelectorAll(".sidebar a");
            links.forEach(link => link.classList.remove("active"));
            event.target.classList.add("active");
        }
    </script>




    <div class="container-lg mt-2" style="border-top: 1px solid #123340;">
        <div class="row">
            <h2 class="fw-bold mb-4 text-center" style="padding-top: 15px">CONOCE PLANDET</h2>
            <div class="col-12 col-lg-6 mb-4 d-lg-block">
                <div class="d-flex justify-content-center mb-3" style="border: 2px solid #123340; border-radius: 20px">
                    <iframe 
                        src="https://www.google.com/maps?q=loc:-8.107384986498031,-79.03034909152134&z=17&output=embed" 
                        width="100%" 
                        height="300" 
                        style="border-radius:20px;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>                
            </div>
            <div class="col-12 col-lg-6" style="padding-left: 60px; padding-right: 60px; margin-bottom: 40px">
                <div class="row gy-4">
                    <div class="col-12 col-lg-12 justifi text-center">
                    </div>
                    <div class="col-12 col-lg-6 d-flex align-items-center shadow p-3" style="border: 1px solid #68A69B; background-color: #F2F2F2">
                        <i class="fas fa-envelope-open-text me-3" style="font-size: 2rem; color:rgba(18, 51, 64, 0.72);"></i>
                        <a href="https://www.munitrujillo.gob.pe/portal/mesa_virtual/solicitud" target="_blank" class="fw-bold text-decoration-none custom-text-green" title="Consulta el estado de tus tramites">
                            Mesa de partes
                        </a>
                    </div>
                    <div class="col-12 col-lg-6 d-flex align-items-center shadow p-3" style="border: 1px solid #68A69B; background-color: #F2F2F2">
                        <i class="fas fa-phone me-3" style="font-size: 2rem; color:rgba(18, 51, 64, 0.72);"></i>
                        <a href="contacto.php" target="_blank" class="fw-bold text-decoration-none custom-text-green" title="Contacto">
                            Contacto
                        </a>
                    </div>
                    <div class="col-12 col-lg-6 d-flex align-items-center shadow p-3" style="border: 1px solid #68A69B; background-color: #F2F2F2">
                        <i class="fas fa-bullhorn me-3" style="font-size: 2rem; color:rgba(18, 51, 64, 0.72);"></i>
                        <a href="Norticias.php" target="_blank" class="fw-bold text-decoration-none custom-text-green" title="Noticias">
                            Noticias
                        </a>
                    </div>
                    <div class="col-12 col-lg-6 d-flex align-items-center shadow p-3" style="border: 1px solid #68A69B; background-color: #F2F2F2">
                        <i class="fas fa-user-tie me-3" style="font-size: 2rem; color:rgba(18, 51, 64, 0.72);"></i>
                        <a href="equipo.php" target="_blank" class="fw-bold text-decoration-none custom-text-green" title="Conoce a nuestros miembros">
                            Equipo
                        </a>
                    </div>
                    <div class="col-12 col-lg-6 d-flex align-items-center shadow p-3" style="border: 1px solid #68A69B; background-color: #F2F2F2">
                        <i class="fas fa-map me-3" style="font-size: 2rem; color: rgba(18, 51, 64, 0.72);"></i>
                        <a href="https://www.munitrujillo.gob.pe" target="_blank" class="fw-bold text-decoration-none custom-text-green" title="Visor MPT">
                            Visor MPT
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>










    <div class="container-xxl mt-3" id="tramites_y_servicios" style="padding-bottom: 30px; border-top: 1px solid #123340; border-bottom: 1px solid #123340">
        <h1 class="text-center mb-4" style="margin-top: 15px;">Trámites y Servicios</h1>
        <div class="text-center mb-3">
            <button class="btn bg-white shadow mx-2" style="border: 1px solid #65A693; margin-bottom: 10px;" onclick="updateContent('gerencia1')">Subgerencia Geomática</button>
            <button class="btn bg-white shadow mx-2" style="border: 1px solid #65A693; margin-bottom: 10px" onclick="updateContent('gerencia2')">Subgerencia Planificación</button>
            <button class="btn bg-white shadow mx-2" style="border: 1px solid #65A693; margin-bottom: 10px" onclick="updateContent('gerencia3')">Subgerencia Titulación</button>
        </div>
        <div class="content-container">
            <div class="description" id="description" style="background-color: #F2F2F2; border: 1px solid #123340">
                <p>Seleccione una subgerencia para ver más detalles.</p>
            </div>
            <div class="list-container text-center" style="background-color: #68A69B; padding: 5px; border-radius: 10px;">
                <h4 style="border-radius: 5px; padding: 2px; background-color: #F2F2F2;">Trámites</h4>
                <ul id="tramites-list" class="list-group mb-3" style="background-color: #F2F2F2;"></ul>
                <h4 style="border-radius: 5px; padding: 2px; background-color: #F2F2F2;">Servicios</h4>
                <ul id="servicios-list" class="list-group" style="background-color: #F2F2F2;"></ul>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="modalContent" tabindex="-1" aria-labelledby="modalTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h4>Requerimientos</h4>
                    <p id="requerimientos"></p>
                    <h4>Tiempos de Entrega</h4>
                    <p id="tiempos"></p>
                    <h4>Pasos a Seguir</h4>
                    <div class="accordion" id="pasosAccordion"></div>
                    <h4>Recomendaciones</h4>
                    <p id="recomendaciones"></p>
                    <h4>Formatos</h4>
                    <div class="Formatos" id="visor"></div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const gerenciaData = {
            "gerencia1": {
                descripcion: "Información sobre la Subgerencia de Geomática.",
                tramites: ["Trámite 1", "Trámite 2"],
                servicios: ["Servicio 1", "Servicio 2"]
            },
            "gerencia2": {
                descripcion: "Información sobre la Subgerencia de Planificación.",
                tramites: ["Trámite 3", "Trámite 4", "Trámite 11", "Trámite 12", "Trámite 13", "Trámite 14", "Trámite 15"]
            },
            "gerencia3": {
                descripcion: "Información sobre la Subgerencia de Titulación.",
                tramites: ["Trámite 5", "Trámite 6"],
                servicios: ["Servicio 5", "Servicio 6"]
            }
        };
        
        const tramitesServiciosData = {
            "Trámite 1": {
                titulo: "Trámite 1 de Geomática",
                requerimientos: "Documentos necesarios para el trámite.",
                tiempos: "Plazos de entrega detallados.",
                pasos: ["Paso 1: Presentar documentos.", "Paso 2: Revisión.", "Paso 3: Aprobación.", "Paso 4: Entrega."],
                recomendaciones: "Consejos para un trámite eficiente."
            },
            "Servicio 1": {
                titulo: "Servicio 1 de Geomática",
                requerimientos: "Requisitos para el servicio.",
                tiempos: "Tiempo estimado de atención.",
                pasos: ["Paso 1: Solicitud.", "Paso 2: Evaluación.", "Paso 3: Ejecución.", "Paso 4: Finalización."],
                recomendaciones: "Consejos para optimizar el servicio."
            }
        };

        function showModal(tramite) {
            const data = tramitesServiciosData[tramite];
            document.getElementById("modalTitle").innerText = data.titulo;
            document.getElementById("requerimientos").innerText = data.requerimientos;
            document.getElementById("tiempos").innerText = data.tiempos;
            document.getElementById("recomendaciones").innerText = data.recomendaciones;
            
            const accordion = document.getElementById("pasosAccordion");
            accordion.innerHTML = data.pasos.map((paso, index) => `
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading${index}">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse${index}" aria-expanded="true">
                            ${paso.split(':')[0]}
                        </button>
                    </h2>
                    <div id="collapse${index}" class="accordion-collapse collapse" data-bs-parent="#pasosAccordion">
                        <div class="accordion-body">${paso.split(':')[1]}</div>
                    </div>
                </div>
            `).join('');
            
            new bootstrap.Modal(document.getElementById("modalContent")).show();
        }

        function updateContent(gerencia) {
            document.getElementById("description").innerHTML = `<p>${gerenciaData[gerencia].descripcion}</p>`;
            document.getElementById("tramites-list").innerHTML = gerenciaData[gerencia].tramites.map(item => `<li class="list-group-item"><a href="javascript:void(0);" onclick="showModal('${item}')">${item}</a></li>`).join('');
            document.getElementById("servicios-list").innerHTML = gerenciaData[gerencia].servicios.map(item => `<li class="list-group-item""><a href="javascript:void(0);" onclick="showModal('${item}')">${item}</a></li>`).join('');
        }

        document.addEventListener("DOMContentLoaded", () => {
            updateContent('gerencia1');
        });
    </script>













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