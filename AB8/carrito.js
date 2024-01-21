let carrito = [];

function agregarAlCarrito(nombre, precio) {
    carrito.push({nombre, precio, cantidad: 1}); // Si quieres manejar cantidades, debes agregar esa propiedad aquí
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

function quitarDelCarrito(indiceProducto) { // Debes pasar el índice del producto en el carrito
    let producto = carrito[indiceProducto];
    if (producto && producto.cantidad > 0) {
        producto.cantidad--;
        if (producto.cantidad === 0) {
            carrito.splice(indiceProducto, 1); // Usamos splice para quitar el producto del array
        }
        mostrarCarrito();
    }
}

function mostrarCarrito() {
    let listaCarrito = document.getElementById('carrito');
    listaCarrito.innerHTML = '';
    let total = 0;

    carrito.forEach((producto, indice) => {
        total += producto.precio * producto.cantidad; // Si estás manejando cantidades, multiplica por la cantidad
        let item = document.createElement('div');
        item.textContent = `${producto.nombre} - $${producto.precio} x ${producto.cantidad}`;
        listaCarrito.appendChild(item);
        // Agregar un botón para quitar del carrito si es necesario
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


