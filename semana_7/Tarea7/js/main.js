// EJERCICIO 1
function calculoTerreno() {
    ancho = document.getElementById("ancho1").value;
    alto = document.getElementById("largo1").value;
    precio = document.getElementById("precio1").value;
    areaTotal = ancho * alto;
    precioTotal = (ancho * alto) * precio;
    cuotaInicial = precioTotal * 0.13;
    cuotaMensual = (precioTotal - cuotaInicial) / 24;
    document.getElementById("resultado").innerHTML =
    "El area es del terreno es: " + areaTotal + "<br>" + 
    "El precio total del terreno es: " + precioTotal + "<br>" + 
    "La cuota inicial es: " + cuotaInicial + "<br>" + 
    "La cuota mensual es: " + cuotaMensual;

}

// EJERCICIO 2
function calculoCuotaInicial() {
    terreno = document.getElementById("cantidadTerreno").value;
    cantidadTotal = terreno * 50;
    cuotaInicial = cantidadTotal * 0.10;
    cuotaMensual = cantidadTotal - cuotaInicial;
    document.getElementById("resultadoInmobiliaria").innerHTML =
    "El monto total es: " + cantidadTotal + "<br>" + 
    "La cuota inicial es: " + cuotaInicial + "<br>" + 
    "La cuota mensual es: " + cuotaMensual;
}


// EJERCICIO 3
// EJERCICIO 3
function calculoBanco() {
    let monto = parseFloat(document.getElementById("montoPrestamo").value); // Obtiene el monto del préstamo y lo convierte a un número
    let intereses = monto * 0.24;
    let montoTotal = monto + intereses; 
    let primerPago = (monto / 2) / 4; 
    let segundoPago = (monto / 2) / 20;
    
    document.getElementById("resultadoBanco").innerHTML = 
    "Monto total a pagar: " + montoTotal + "<br>" + 
    "El interes es de: " + intereses + "<br>" + 
    "Monto cuotas especiales: " + primerPago + "<br>" + 
    "Monto cuotas ordinarias: " + segundoPago; // Muestra los resultados formateados con 2 decimales
}
