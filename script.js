let currentNoticiaIndex = 0;
let totalNoticias = 0; // Se actualizará dinámicamente según el JSON
let autoPlayInterval;
let noticiasData = []; // Almacena las noticias cargadas

function getNoticiasPorPantalla() {
    return window.innerWidth >= 1200 ? 3 : (window.innerWidth >= 600 ? 2 : 1); 
}

function renderNoticias() {
    const container = document.querySelector('.noticia-contenedor');
    const controls = document.querySelector('.noticias-controls');
    container.innerHTML = ''; // Limpia el contenedor de noticias
    controls.innerHTML = ''; // Limpia los indicadores

    noticiasData.forEach((noticia, i) => {
        // Crear la tarjeta de noticia
        const noticiaElement = document.createElement('div');
        noticiaElement.classList.add('noticia', 'card');
        noticiaElement.id = `noticia${i + 1}`;
        noticiaElement.innerHTML = `
            <img src="${noticia.imagen}" alt="${noticia.titulo}" class="noticia-imagen img-fluid">
            <div class="noticia-texto">
                <h3 class="noticia-titulo card-title">${noticia.titulo}</h3>
                <p class="noticia-descripcion card-text fs-5">${noticia.descripcion}</p>
                <p class="noticia-fecha card-text fs-6">${noticia.fecha}</p>
                <a href="${noticia.link}" target="_blank" class="noticia-boton">
                    <button class="btn-Plandet">Leer más</button>
                </a>
            </div>
        `;
        container.appendChild(noticiaElement);

        // Crear el indicador correspondiente
        const indicator = document.createElement('button');
        indicator.classList.add('noticia-indicator');
        indicator.onclick = () => showNoticia(i);
        controls.appendChild(indicator);
    });

    totalNoticias = noticiasData.length;
    showNoticia(currentNoticiaIndex); // Muestra las noticias iniciales
}

function showNoticia(index) {
    const noticias = document.querySelectorAll('.noticia');
    const noticiasPorPantalla = getNoticiasPorPantalla();
    const anchoPorNoticia = 100 / noticiasPorPantalla;

    if (index + noticiasPorPantalla > totalNoticias) {
        index = totalNoticias - noticiasPorPantalla;
    }

    currentNoticiaIndex = index;
    noticias.forEach((noticia, i) => {
        if (i >= index && i < index + noticiasPorPantalla) {
            noticia.style.display = 'flex';
            noticia.style.width = `${anchoPorNoticia}%`;
        } else {
            noticia.style.display = 'none';
        }
    });

    const indicators = document.querySelectorAll('.noticia-indicator');
    indicators.forEach((indicator, i) => {
        indicator.classList.toggle('active', i >= index && i < index + noticiasPorPantalla);
        //indicator.classList.toggle('active', i === index);
    });
}

function nextNoticia() {
    const noticiasPorPantalla = getNoticiasPorPantalla();
    currentNoticiaIndex = (currentNoticiaIndex + noticiasPorPantalla) % totalNoticias;
    showNoticia(currentNoticiaIndex);
}

function prevNoticia() {
    const noticiasPorPantalla = getNoticiasPorPantalla();
    currentNoticiaIndex = (currentNoticiaIndex - noticiasPorPantalla + totalNoticias) % totalNoticias;
    showNoticia(currentNoticiaIndex);
}

function startAutoPlay() {
    autoPlayInterval = setInterval(nextNoticia, 40000);
}

function stopAutoPlay() {
    clearInterval(autoPlayInterval);
}

function handleResize() {
    const noticiasPorPantalla = getNoticiasPorPantalla();
    if (currentNoticiaIndex + noticiasPorPantalla > totalNoticias) {
        currentNoticiaIndex = totalNoticias - noticiasPorPantalla;
    }
    showNoticia(currentNoticiaIndex);
}

function loadNoticias() {
    const url = `noticias.json?cacheBuster=${Date.now()}`; // Parámetro único para evitar la caché
    fetch(url)
    .then(response => {
        if (!response.ok) {
            throw new Error('Error al cargar noticias.json');
        }
        return response.json();
    })
    .then(data => {
        noticiasData = data;
        renderNoticias(); // Renderiza las noticias dinámicamente
    })
    .catch(error => console.error('Error al cargar las noticias:', error));
}

document.addEventListener('DOMContentLoaded', () => {
    loadNoticias(); // Carga las noticias desde el archivo JSON
    const noticiasSeccion = document.querySelector('.noticias-seccion');
    noticiasSeccion.addEventListener('mouseover', stopAutoPlay);
    noticiasSeccion.addEventListener('mouseout', startAutoPlay);
    window.addEventListener('resize', handleResize);
    startAutoPlay();
});
//--------------------------------------------------------------------------------
//--------------------------------------------------------------------------------
//--------------------------------------------------------------------------------