let carrito = [];

const productos = {
    "Laptop HP 15": "img/productos/laptop.jpg",
    "Samsung Galaxy S21": "img/productos/celular.jpg",
    "Audífonos Sony WH-1000XM4": "img/productos/audifonos.jpg",
    "Monitor LG 27UL850": "img/productos/monitor.jpg",
    "Teclado Mecánico Razer BlackWidow": "img/productos/teclado.jpg",
    "Cámara Canon EOS M50": "img/productos/camara.jpg"
};

function agregarAlCarrito(nombre, precio) {
    carrito.push({ nombre, precio });
    mostrarMensajeFlotante(nombre + " ha sido agregado al carrito.");
}

function abrirCarrito() {
    let modal = document.getElementById("carritoModal");
    let lista = document.getElementById("listaCarrito");
    let total = document.getElementById("totalCarrito");
    lista.innerHTML = "";
    let suma = 0;

    carrito.forEach((item, index) => {
        let li = document.createElement("li");
        li.style.display = "flex"; // Usamos flexbox para alinear
        li.style.alignItems = "center"; // Alinear verticalmente
        li.style.justifyContent = "space-between"; // Espacio entre el texto y el botón
        li.style.marginBottom = "10px";

        // Crear imagen
        let img = document.createElement("img");
        img.src = productos[item.nombre]; 
        img.alt = item.nombre; // 
        img.style.width = "50px"; // 
        img.style.height = "auto"; // 
        img.style.marginRight = "10px"; // 

        
        li.appendChild(img);
        
        
        li.appendChild(document.createTextNode(item.nombre + " - S/ " + item.precio));

        // Botón para eliminar un producto individualmente
        let btnEliminar = document.createElement("button");
        btnEliminar.textContent = "Eliminar";
        btnEliminar.style.marginLeft = "auto";
        btnEliminar.onclick = function() {
            carrito.splice(index, 1);
            abrirCarrito(); // Actualizar el carrito
        };
        li.appendChild(btnEliminar);
        lista.appendChild(li);
        suma += item.precio;
    });

    total.textContent = "Total: S/ " + suma;
    modal.style.display = "block";
}

function vaciarCarrito() {
    carrito = [];
    abrirCarrito(); // Actualizar el carrito
}

function finalizarCompra() {
    if (carrito.length === 0) {
        mostrarMensajeFlotante('El carrito está vacío. Agrega productos antes de finalizar la compra.');
        return;
    }
    mostrarMensajeFlotante('¡Gracias por su compra!');
    vaciarCarrito();
}

function cerrarCarrito() {
    document.getElementById("carritoModal").style.display = "none";
}

window.onclick = function(event) {
    if (event.target == document.getElementById("carritoModal")) {
        cerrarCarrito();
    }
}

// Función para mostrar el mensaje flotante
function mostrarMensajeFlotante(mensaje) {
    const mensajeFlotante = document.createElement('div');
    mensajeFlotante.className = 'mensaje-flotante';
    mensajeFlotante.textContent = mensaje;
    document.body.appendChild(mensajeFlotante);

    // Mostrar el mensaje
    mensajeFlotante.style.display = 'block';
    mensajeFlotante.style.opacity = '1';

    
    setTimeout(() => {
        mensajeFlotante.style.opacity = '0';
        setTimeout(() => {
            document.body.removeChild(mensajeFlotante);
        }, 500); // Espera a que termine la transición
    }, 3000); 
}
