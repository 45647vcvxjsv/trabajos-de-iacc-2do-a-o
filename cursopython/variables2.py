"""Este módulo contiene las variables mas utilizadas."""

variables = "aprendiendo python"
numero = 34
decimal = 10.5 
verdadero = True
falso = False

"""las variables siempre son en minusculas y en sneakers (mejor dicho _ este espacio ) """

Myvariable = "My string variable"
print (Myvariable)

# seria mejor #

my_strings_variable = "my strings variable"
print(my_strings_variable)

my_int_variable = 5
print(my_int_variable)

my_bool_variable = False
print(my_bool_variable)

my_int_to_string_variable = str(my_int_variable)
print(my_int_to_string_variable)
print(type(my_int_to_string_variable))

#concatenacion de cadenas en una variable y en un print
print(my_strings_variable, (my_int_variable), my_bool_variable)
print("este es la estudiacion: ", my_bool_variable)

# una prueba para rebuscar el codigo jajajaja
print(type(print(my_strings_variable, (my_int_variable), my_bool_variable)))

#funciones del sistema 

print(len(my_strings_variable))

# variables en una sola linea pero hay que tener precaucion maxima aunque es brujeria jajaja y hace dificil el mantenimiento del codigo 

name, surname, alias, age, = "quiero", "ponerla", "con mucho placer", 38 
print(" que quieres hacer", name, surname, alias, age)

# input 

first_name = input('cual es tu nombre: ')
age = input('cual es tu edad ')

print(first_name)
print(age)

 


