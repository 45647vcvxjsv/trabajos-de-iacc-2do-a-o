
function numeros(){

  for(let i = 7; i<= 350; i++) 
    if(i % 7 === 0){
      resultados.push(i);
    } 
  return resultados;
}
let resultados = [];
let numerosDivisibles = numeros();

console.log('los numeros que son divisibles por 7 son ', numerosDivisibles);


