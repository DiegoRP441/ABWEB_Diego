let carrito = [];

function agregarAlCarrito(nombre, precio) {
    carrito.push({nombre, precio, cantidad: 1}); 
    mostrarCarrito();
    mostrarMensajeConfirmacion("El producto ha sido agregado al carrito.");
}

function mostrarMensajeConfirmacion(mensaje) {
    let mensajeConfirmacion = document.getElementById('mensaje-confirmacion');
    mensajeConfirmacion.textContent = mensaje;
    mensajeConfirmacion.style.display = 'block';
    setTimeout(function() {
        mensajeConfirmacion.style.display = 'none';
    }, 1000);
}

function vaciarCarrito() {
    carrito = [];
    mostrarCarrito();
}

function quitarDelCarrito(indiceProducto) { 
    let producto = carrito[indiceProducto];
    if (producto && producto.cantidad > 0) {
        producto.cantidad--;
        if (producto.cantidad === 0) {
            carrito.splice(indiceProducto, 1); 
        }
        mostrarCarrito();
    }
}

function mostrarCarrito() {
    let listaCarrito = document.getElementById('carrito');
    listaCarrito.innerHTML = '';
    let total = 0;

    carrito.forEach((producto, indice) => {
        total += producto.precio * producto.cantidad; 
        let item = document.createElement('div');
        item.textContent = `${producto.nombre} - $${producto.precio} x ${producto.cantidad}`;
        listaCarrito.appendChild(item);
        let botonQuitar = document.createElement('button');
        botonQuitar.textContent = 'X';
        botonQuitar.onclick = function() { quitarDelCarrito(indice); };
        item.appendChild(botonQuitar);
    });

    document.getElementById('totalCarrito').textContent = `Total: $${total}`;
}

document.getElementById('botonCarrito').addEventListener('click', function() {
    var carritoDeCompras = document.getElementById('carritoDeCompras');
    carritoDeCompras.classList.toggle('oculto');
});


