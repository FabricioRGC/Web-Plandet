<!doctype html>
<html lang="es-pe" style="scroll-behavior: smooth;"> 
<head>
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
<body>
    <nav class="navbar navbar-expand-xxl bg-light shadow-sm sticky-top" style="background-color: #F2F2F2 !important;">
        <div class="container-xxl d-flex justify-content-between align-items-center">
            <div class="logo-container plandet">
                <a href="index.html" target="_blank">
                    <img src="pictures/LOGO_PLANDET_OK.svg" alt="Logo 1" title="Plan de Desarrollo Territorial de Trujillo" class="img-fluid" style="height: auto;">
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link scroll-offset" href="index.html#tramites_y_servicios">Tramites y Servicios</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="index.html" id="visorDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Visor MPT</a>
                        <ul class="dropdown-menu" aria-labelledby="visorDropdown">
                            <li><a class="dropdown-item" href="index.html">Visita nuestro visor</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="index.html#Contacto">Contacto</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.html">Noticias</a></li>
                </ul>
            </div>
            <div class="logo-container municipalidad">
                <img src="pictures/LOGO_MUNICIPALIDAD.png" alt="Logo 2" title="Municipalidad Provincial de Trujillo" class="img-fluid" style="height: 80px;">
            </div>
        </div>
    </nav>



































    <section id="tramites_y_servicios">
        <div class="container-xxl mt-3" style="padding-bottom: 30px; border-top: 1px solid #123340; border-bottom: 1px solid #123340">
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
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <p class="text-center">Descargar</p>
                                    <a id="filedowload" href="#" download>
                                        <p class="text-center" id="text" style="margin-top: 15px"></p>
                                    </a>                                
                                </div>
                            </div>
                        </div>     
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="pdfModal" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="pdfModalLabel">Visor de PDF</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="pdf-container">
                        <canvas id="pdf-render"></canvas>
                        <div class="d-flex justify-content-center align-items-center my-3">
                            <button id="prev-page" class="btn btn-secondary me-2">Página Anterior</button>
                            <span>Página <span id="current-page">1</span> de <span id="total-pages">0</span></span>
                            <button id="next-page" class="btn btn-secondary ms-2">Página Siguiente</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>














    <script>
        const gerenciaData = {
        "gerencia1": {
            descripcion: "La subgerencia de Geomática se encarga de la gestión, análisis y representación de información geoespacial mediante tecnologías como los sistemas de información geográfica (SIG), teledetección y cartografía digital. Su función principal es optimizar la toma de decisiones en diversos ámbitos, como el ordenamiento territorial, el catastro y la gestión ambiental. Además, garantiza la actualización y precisión de bases de datos espaciales, facilitando la integración de información relevante para proyectos de infraestructura, urbanismo y conservación de recursos naturales.",
            tramites: ["Trámite 1", "Trámite 2", "Trámite 3", "Trámite 4"],
            servicios: ["Servicio 1", "Servicio 2", "Servicio 3", "Servicio 4"]
        },
        "gerencia2": {
            descripcion: "La subgerencia de Planificación tiene como objetivo coordinar y formular estrategias para el desarrollo sostenible de territorios y organizaciones. Se encarga de diseñar planes estratégicos, evaluar proyectos y garantizar la alineación de las iniciativas con las normativas y objetivos institucionales. También trabaja en la identificación de necesidades, priorización de inversiones y optimización de recursos para el crecimiento ordenado y eficiente. Su labor es clave en la estructuración de políticas públicas y programas que impulsan el bienestar económico y social de una comunidad.",
            tramites: ["Trámite 5", "Trámite 6", "Trámite 7", "Trámite 8"],
            servicios: ["Servicio 5", "Servicio 6", "Servicio 7", "Servicio 8"]
        },
        "gerencia3": {
            descripcion: "La subgerencia de Titulación se dedica a la regularización y formalización de la propiedad de tierras y bienes inmuebles. Su principal responsabilidad es asegurar la entrega de títulos de propiedad de manera transparente y legal, garantizando la seguridad jurídica a los propietarios. Para ello, realiza estudios técnicos, jurídicos y sociales que permiten la validación y saneamiento de terrenos. Además, colabora con entidades gubernamentales y comunidades para agilizar los procesos administrativos y contribuir al acceso equitativo a la propiedad, promoviendo el desarrollo urbano y rural de manera ordenada.",
            tramites: ["Trámite 9", "Trámite 10", "Trámite 11", "Trámite 12"],
            servicios: ["Servicio 9", "Servicio 10", "Servicio 11", "Servicio 12"]
        }
    };

    const tramitesServiciosData = {
        "Trámite 1": {
            titulo: "Trámite 1 de Geomática",
            requerimientos: "Documentos necesarios para el trámite.",
            tiempos: "Plazos de entrega detallados.",
            pasos: ["Paso 1: Presentar documentos.", "Paso 2: Revisión.", "Paso 3: Aprobación.", "Paso 4: Entrega."],
            recomendaciones: "Consejos para un trámite eficiente.",
            archivo: "Harry-Potter-y-la-piedra-filosofal.pdf", // Se agrega el archivo dentro de la data
            nombre: "Harry Potter"
        },
        "Trámite 2": {
            titulo: "Trámite 1 de Geomática",
            requerimientos: "Documentos necesarios para el trámite.",
            tiempos: "Plazos de entrega detallados.",
            pasos: ["Paso 1: Presentar documentos.", "Paso 2: Revisión.", "Paso 3: Aprobación.", "Paso 4: Entrega."],
            recomendaciones: "Consejos para un trámite eficiente.",
            archivo: "ElPrimerAmor.pdf" // Se agrega el archivo dentro de la data
        },
        "Servicio 1": {
            titulo: "Servicio 1 de Geomática",
            requerimientos: "Requisitos para el servicio.",
            tiempos: "Tiempo estimado de atención.",
            pasos: ["Paso 1: Solicitud.", "Paso 2: Evaluación.", "Paso 3: Ejecución.", "Paso 4: Finalización."],
            recomendaciones: "Consejos para optimizar el servicio.",
            archivo: "Harry-Potter-y-la-piedra-filosofal.pdf" // Se agrega el archivo dentro de la data
        }
    };

    function showModal(tramite) {
        const data = tramitesServiciosData[tramite];
        document.getElementById("modalTitle").innerText = data.titulo;
        document.getElementById("requerimientos").innerText = data.requerimientos;
        document.getElementById("tiempos").innerText = data.tiempos;
        document.getElementById("recomendaciones").innerText = data.recomendaciones;
        document.getElementById('filedowload').href = 'Archivos/' + data.archivo;
        document.getElementById("text").innerText = data.nombre;

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
    <script>
        // Definir el visor de PDF
        const PDFViewer = {
            pdfDoc: null,
            pageNum: 1,
            pageIsRendering: false,
            pageNumPending: null,
            scale: 1.5,
            canvas: document.getElementById('pdf-render'),
            ctx: document.getElementById('pdf-render').getContext('2d'),
            reset: function () {
                this.pdfDoc = null;
                this.pageNum = 1;
                this.pageIsRendering = false;
                this.pageNumPending = null;
                document.getElementById('current-page').textContent = 1;
                document.getElementById('total-pages').textContent = 0;
            },
            renderPage: function (num) {
                this.pageIsRendering = true;
                this.pdfDoc.getPage(num).then((page) => {
                    const viewport = page.getViewport({ scale: this.scale });
                    this.canvas.height = viewport.height;
                    this.canvas.width = viewport.width;
                    const renderCtx = {
                        canvasContext: this.ctx,
                        viewport: viewport,
                    };
                    page.render(renderCtx).promise.then(() => {
                        this.pageIsRendering = false;
                        if (this.pageNumPending !== null) {
                            this.renderPage(this.pageNumPending);
                            this.pageNumPending = null;
                        }
                    });
                    document.getElementById('current-page').textContent = num;
                });
            },
            queueRenderPage: function (num) {
                if (this.pageIsRendering) {
                    this.pageNumPending = num;
                } else {
                    this.renderPage(num);
                }
            },
            loadPdf: function (pdfUrl) {
                const pdfjsLib = window['pdfjs-dist/build/pdf'];
                pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.worker.min.js';
                this.reset();
                document.getElementById('pdf-container').classList.remove('d-none');
                pdfjsLib.getDocument(pdfUrl).promise.then((pdfDoc_) => {
                    this.pdfDoc = pdfDoc_;
                    document.getElementById('total-pages').textContent = this.pdfDoc.numPages;
                    this.renderPage(this.pageNum);
                });
                document.getElementById('prev-page').onclick = () => {
                    if (this.pageNum <= 1) return;
                    this.pageNum--;
                    this.queueRenderPage(this.pageNum);
                };
                document.getElementById('next-page').onclick = () => {
                    if (this.pageNum >= this.pdfDoc.numPages) return;
                    this.pageNum++;
                    this.queueRenderPage(this.pageNum);
                };
            },
            hideViewer: function () {
                document.getElementById('pdf-container').classList.add('d-none');
            },
        };
        // Manejo de enlaces
        document.querySelectorAll('.file-link').forEach(link => {
            link.addEventListener('click', function (e) {
                const fileType = this.getAttribute('data-type');
                const fileUrl = this.href;
                if (fileType === 'word') {
                    e.preventDefault();
                    document.getElementById('word-viewer').src = 'https://docs.google.com/document/d/13sLd7n3rXdxVxVYqzlkcWJ9Tqx_oszTv2yO_AY-5QiU/preview';
                    const wordModal = new bootstrap.Modal(document.getElementById('wordModal'));
                    wordModal.show();
                } else if (fileType === 'pdf') {
                    e.preventDefault();
                    PDFViewer.loadPdf(fileUrl);
                    const pdfModal = new bootstrap.Modal(document.getElementById('pdfModal'));
                    pdfModal.show();
                } else if (fileType === 'render') {
                    e.preventDefault();
                    document.getElementById('render-viewer').src = fileUrl;
                    const imageModal = new bootstrap.Modal(document.getElementById('imageModal'));
                    imageModal.show();
                }
            });
        });
        // Limpiar después de cerrar el modal
        document.getElementById('wordModal').addEventListener('hidden.bs.modal', function () {
            document.getElementById('word-viewer').src = '';
        });
        document.getElementById('imageModal').addEventListener('hidden.bs.modal', function () {
            document.getElementById('render-viewer').src = '';
        });
        // Ocultar visor PDF por defecto
        PDFViewer.hideViewer();
    </script>


















































    <section id="WhatsApp">
        <div class="socialbar_whatsapp ">
            <a class="whatsapp_link" target="_blank" title="WhatsApp PLANDET" href="https://wa.me/31617039960">
                <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
            </a>
        </div>
    </section>
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
    <!-- PDF.js para visualizar PDFs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.min.js"></script>

    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>