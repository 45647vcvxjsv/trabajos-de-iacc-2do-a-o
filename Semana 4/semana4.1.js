// Declarando variables
const descAdultoMayor = 40;
const descNoSocios = 25;
const descPadresSocios = 35;
const precio = 800;
let resultado = 0;

// Función para calcular el descuento
function calcularDescuento(edad, socio) {
  if (edad > 60) {
    return precio * descAdultoMayor / 100;
  } else if (edad < 21) {
    return precio * descNoSocios / 100;
  } else if (socio === "Si") {
    return precio * descPadresSocios / 100;
  }
  return 0;
}

// Función para calcular el precio final
function calcularPrecio() {
  const nombreCliente = document.getElementById("Nombre Cliente").value;
  const edadCliente = parseFloat(document.getElementById("EdadCliente").value);
  const socioDelClub = document.getElementById("Socio del club").value;

  // Validación de entrada
  if (!Number.isInteger(edadCliente) || edadCliente <= 0) {
    alert("Ingrese una edad válida");
    return;
  }
  if (!["Si", "No"].includes(socioDelClub)) {
    alert("Valor no válido para 'Socio del club'");
    return;
  }

  // Cálculo del precio final
  resultado = precio - calcularDescuento(edadCliente, socioDelClub);

  // Mostrar el resultado
  console.log(
    `El precio final para el cliente ${nombreCliente} es de: $${resultado.toFixed(
      2
    )}`
  );
}
