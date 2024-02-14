"""Este módulo contiene como crear listas."""


#lenguajes = ["cena","camaleon", "telemetria", "carbon", "paja"]
#print(lenguajes[1])
#lenguajes[1] = "go"
#print(lenguajes[-2])
#print(lenguajes[4:5])
#print(lenguajes[:3])
#print(lenguajes[:4])

# metodos de las listas en Python

lista = [1, 3, 5]
lista2 = lista.copy()
lista.append('caracatoa, caracatoa')
lista.clear()

print(lista, lista2)

print(lista, lista2.count(3))
print(len(lista), len(lista2))

# accediendo a las listas
# el primer elemento de la lista siempre sera indice 0

lista = ['caraspera', 'me', 'tiene', 'chato']
lista4 = lista.copy()
lista.append('caraspera me')

print(lista[3])

# eliminando elementos de la lista 

#lista.pop()  # el elemento pop, no me permitira eliminar el ultimo elemento  
# para eliminar un elemento en particular se debe usar el comando remove 
#lista.remove('me') este elemento elimina un elemento en particular 

# ordenar la lista 

lista.reverse()
lista.sort() # en esta ocacion no se podra ejecutar ya que '<' no esta soportado entre un string y un integer y habra que cambiar el elemento de la lista.append(3) a un string 
print(lista)

# las tuplas no pueden ser modificadas deberas de hacer una copia si quieren ser modificadas

tupla = ('hola', 'caracatoa', 'somos', 'ejercicios')
listaDetupla = list(tupla)
listaDetupla.append('caracatoa')
print(listaDetupla)
 
