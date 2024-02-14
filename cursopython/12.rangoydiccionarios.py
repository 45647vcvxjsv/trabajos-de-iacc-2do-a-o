rango = range(6)
#print (rango)

diccionarios = {
    "cascabel": "serpiente cascabel",
    "raza": "Reptil",
    "edad": 6
}

print(diccionarios)
print(diccionarios['edad'])
print(diccionarios.get('cascabel'))

diccionarios['cascabel'] = 'Caricia'

diccionarios['sisea'] = 'si'
diccionarios['Se arrastra'] = 'si'
diccionarios['Muda su piel'] = 'si'
print(diccionarios)

#diccionarios.pop('sisea')

# Eliminar elementos del diccionario habria que llamar a la palabra reservada de DEL 

#del diccionarios['sisea']
#print(diccionarios)

# Generar copias de los diccionarios que se crean de dos formas con la palabra reservada de COPY y DICT

copiaSerpiente = diccionarios.copy()
print(diccionarios)

copiaSerpiente = dict(diccionarios)

# si se quiere borrar el diccionario creado se aplica la palabra CLEAR

diccionarios.clear()
print(diccionarios, copiaSerpiente)

# diccionarios anidados y contrucciones de dict 

Callejera = {
    "Nombre": "fea ",
    "Edad": 9
}
Cuquito = {
        "Nombre": "Maria Joaquina",
        "Edad": 19
    }

felinosDecasa = {
    "Ternurita": {
        "Nombre": "Ternurita",
        "Edad": 10
    }
}

print(felinosDecasa, Cuquito, Callejera)

gatitos = dict(nombre= "caquita", edad=6)
print(gatitos)




