
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

    let contentBox = document.getElementById("content");
    contentBox.innerHTML = content[section];

    // Remover la clase 'slide-in' para reiniciar la animación
    contentBox.classList.remove("slide-in-right");
    // Forzar el reflow para reiniciar la animación
    void contentBox.offsetWidth;
    // Agregar la clase para activar la animación de entrada
    contentBox.classList.add("slide-in-right");

    // Manejar los links activos
    let links = document.querySelectorAll(".sidebar a");
    links.forEach(link => link.classList.remove("active"));
    event.target.classList.add("active");
}
//--------------------------------------------------------------------------------
const tramitesServiciosData = {
    "Trámite 1": {
        titulo: "Trámite 1 de Geomática",
        requerimientos: "Documentos necesarios para el trámite.",
        tiempos: "Plazos de entrega detallados.",
        pasos: ["Paso 1: Presentar documentos.", "Paso 2: Revis,ión.", "Paso 3: Aprobación.", "Paso 4: Entrega."],
        recomendaciones: "Consejos para un trámite eficiente.",
        archivo: "Harry-Potter-y-la-piedra-filosofal.pdf",
        nombre: "Harry-Potter-y-la-piedra-filosofal",
        archivo2: null, 
        nombre2: null,
        archivo3: null, 
        nombre3: null
    },
    "Servicio 1": {
        titulo: "Servicio 1 de Geomática",
        requerimientos: "Requisitos para el servicio./n 345",
        tiempos: "Tiempo estimado de atención: 12 horas.",
        pasos: ["Paso 1: Solicitud.", "Paso 2: Evaluación.", "Paso 3: Ejecución.", "Paso 4: Finalización."],
        recomendaciones: "Consejos para optimizar el servicio.",
        archivo: "Harry-Potter-y-la-piedra-filosofal.pdf", 
        nombre: "Harry-Potter-y-la-piedra-filosofal",
        archivo2: "ElPrimerAmor.pdf", 
        nombre2: "ElPrimerAmor",
        archivo3: "Harry-Potter-y-la-piedra-filosofal.pdf", 
        nombre3: "Harry-Potter-y-la-piedra-filosofal"
    }
};

function showModal(tramite) {
    const data = tramitesServiciosData[tramite];
    if (!data) {
        console.error("No se encontró información para:", tramite);
        return;
    }

    document.getElementById("modalTitle").innerText = data.titulo;
    document.getElementById("requerimientos").innerText = data.requerimientos;
    document.getElementById("tiempos").innerText = data.tiempos;
    document.getElementById("recomendaciones").innerText = data.recomendaciones;

    // Descargar Formato 1
    document.getElementById('filedowload').href = data.archivo ? 'Archivos/' + data.archivo : "#";
    document.getElementById("text").innerText = data.nombre || "Sin archivo";

    // Descargar Formato 2 (Verificación antes de mostrar)
    if (data.archivo2) {
        document.getElementById("filedowload2").href = 'Archivos/' + data.archivo2;
        document.getElementById("text2").innerText = data.nombre2;
        document.getElementById("dowload2").innerText = "Descargar Formato";
        document.getElementById("f02").style.display = "block";
    } else {
        document.getElementById("f02").style.display = "none";
    }

    // Descargar Formato 3 (Verificación antes de mostrar)
    if (data.archivo3) {
        document.getElementById("filedowload3").href = 'Archivos/' + data.archivo3;
        document.getElementById("text3").innerText = data.nombre3;
        document.getElementById("dowload3").innerText = "Descargar Formato";
        document.getElementById("f03").style.display = "block";
    } else {
        document.getElementById("f03").style.display = "none";
    }

    // Cargar pasos del trámite/servicio
    const accordion = document.getElementById("pasosAccordion");
    accordion.innerHTML = data.pasos.map((paso, index) => {
        return `
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading${index}">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse${index}" aria-expanded="true">
                        Paso ${index + 1}
                    </button>
                </h2>
                <div id="collapse${index}" class="accordion-collapse collapse" data-bs-parent="#pasosAccordion">
                    <div class="accordion-body">${paso}</div>
                </div>
            </div>
        `;
    }).join('');

    // Mostrar el modal
    new bootstrap.Modal(document.getElementById("modalContent")).show();
}
//--------------------------------------------------------------------------------
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
// //--------------------------------------------------------------------------------

//----------------------------------------------------------------------------------------------------------
document.querySelector('.animated-background').addEventListener('mouseover', () => {
    console.log('Cursor encima del elemento');
});

document.querySelector('.animated-background').addEventListener('mouseout', () => {
    console.log('Cursor fuera del elemento');
});
//----------------------------------------------------------------------------------------------------------------------------
function flipCard(event, cardId, sectionId) {
    event.preventDefault();
    document.getElementById(cardId).classList.add('flipped');
    document.querySelectorAll(`#${cardId} .back`).forEach(el => el.style.display = 'none');
    document.getElementById(sectionId).style.display = 'block';
}

function flipBack(event, cardId) {
    event.preventDefault();
    document.getElementById(cardId).classList.remove('flipped');
    document.querySelectorAll(`#${cardId} .back`).forEach(el => el.style.display = 'none');
}
//----------------------------------------------------------------------------------------------------------------------------

//----------------------------------------------------------------------------------------------------------------------------
//----------------------------------------------------------------------------------------------------------------------------
//----------------------------------------------------------------------------------------------------------------------------
//----------------------------------------------------------------------------------------------------------------------------
//----------------------------------------------------------------------------------------------------------------------------
//----------------------------------------------------------------------------------------------------------------------------
//----------------------------------------------------------------------------------------------------------------------------
//----------------------------------------------------------------------------------------------------------------------------

