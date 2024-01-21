let carrito = [];

function agregarAlCarrito(nombre, precio) {
    carrito.push({nombre, precio});
    mostrarCarrito();
}

function vaciarCarrito() {
    carrito = [];
    mostrarCarrito();
}

function quitarDelCarrito(producto) {
    if (carrito[producto] && carrito[producto].cantidad > 0) {
        carrito[producto].cantidad--;
        if (carrito[producto].cantidad === 0) {
            delete carrito[producto];
        }
        mostrarCarrito();
    }
}


function mostrarCarrito() {
    let listaCarrito = document.getElementById('carrito');
    listaCarrito.innerHTML = '';
    let total = 0;

    carrito.forEach(producto => {
        total += producto.precio;
        let item = document.createElement('div');
        item.textContent = `${producto.nombre} - $${producto.precio}`;
        listaCarrito.appendChild(item);
    });

    document.getElementById('totalCarrito').textContent = `Total: $${total}`;
}

document.getElementById('botonCarrito').addEventListener('click', function() {
    var carrito = document.getElementById('carritoDeCompras');
    carrito.classList.toggle('oculto');
});


