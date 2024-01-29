class Caramelo {
  constructor(id,nombre,color){
    this.id= id;
    this.nombre= 'Luis Hermoso';
    this.color = 'negro';
  }
  nombrar(){
    return `${this.nombre} de color ${this.color}`;
  }
}

class Penique extends Caramelo {
  constructor(id, nombre, color, sabor) {
    super(id, nombre, color);
    this.sabor = sabor;
  }

  nombrarPenique() {
    return `Penique ${this.nombre} sabor ${this.sabor}`;
  }
}



const manzana = new Caramelo(1, 'caraca','negro');
const pera = new Caramelo(2, 'melado','azul');
const nacana = new Caramelo(3, 'riquelo','cafe');
console.log(manzana.nombrar());
console.log(pera.nombrar());


const oreo = new Penique(4, 'oreos', 'amarillo', 'chocolate');
const canales = new Penique(5, 'canales', 'azul', 'mariano');

console.log(oreo.nombrarPenique());
console.log(canales.nombrarPenique());