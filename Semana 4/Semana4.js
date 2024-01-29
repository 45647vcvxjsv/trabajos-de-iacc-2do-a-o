// declarando variables 

var descAdultoMayor = 40;
var descNoSocios = 25;
var descPadresSocios = 35;
var precio = 800;
let resultado = 0;


function calcularPrecio(){

  const nombreCliente = document.getElementById("Nombre Cliente").value;
  const edadCliente = parseFloat(document.getElementById("EdadCliente").value);
  const socioDelClub = document.getElementById("Socio del club").value;

  if (isNaN(edadCliente)){
    alert("ingrese una edad");
    return;
  }


  if(edadCliente > 60){
    resultado = precio - (precio * descAdultoMayor / 100);
    console.log(`por ser adulto mayor su descuento sera ${descAdultoMayor}%`);
  }else if(edadCliente < 21) {
    resultado = precio - (precio * descNoSocios / 100);
    console.log(`su descuento por edad es de ${descNoSocios}%`);
  }else{
    resultado = precio - (precio * descPadresSocios / 100);
    console.log(`por ser hijo de socio, su descuento es de ${descPadresSocios}%`);
  }

  console.log(`el precios final para el cliente ${nombreCliente} es de : $${resultado}%`);

}
