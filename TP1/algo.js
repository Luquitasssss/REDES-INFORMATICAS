const textoParpadeante = document.getElementById('textoParpadeante');

let mostrar = true;

setInterval(() => {
    if (mostrar) {
        textoParpadeante.style.display = 'none';
    } else {
        textoParpadeante.style.display = 'block';
    }
    mostrar = !mostrar;
}, 800);

const Hola = document.getElementById('Hola');

let mostrar1 = true;

setInterval(() => {
    if (mostrar1) {
        Hola.style.display = 'none';
    } else {
        Hola.style.display = 'block';
    }
    mostrar1 = !mostrar1;
}, 800);

const Hola1 = document.getElementById('Hola1');

let mostrar2 = true;

setInterval(() => {
    if (mostrar2) {
        Hola1.style.display = 'none';
    } else {
        Hola1.style.display = 'block';
    }
    mostrar2 = !mostrar2;
}, 800);
