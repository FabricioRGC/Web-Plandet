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
//--------------------------------------------------------------------------------
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
//--------------------------------------------------------------------------------
//--------------------------------------------------------------------------------