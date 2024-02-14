if 2 < 4:
    print("2 es menor que 4")

# se pueden ver las evaluar 
# A == B 
# A < B
# A > B
# A != B
# A <= B
# A >= B

'''
if 2 == 2:
    print("2 es igual 2")

if 2 == 3:
    print("2 es igual que 3")

if 2 > 5:
    print("2 es mayor 5")

if 5 > 2:
    print("5 es mayor 2")

if 3 != 2:
    print("3 es distinto de 2")

if 3 >= 3:
    print("3 es mayor o igual  que 3")

if 3 <= 3:
    print("3 es menor o igual que 2")

'''

if 2 > 5:
    print("2 es mayor a 5 en if")
elif 2 > 5:
    print("2 es menor a 5 en elif")
elif 2 < 5:
    print("2 es menor a 5 en segundo elif")
else:
    print("yo me imprimo si todo lo demas es false")


# aunque en las dos condiciones sean iguales siempre se tomara if, primero que elif 

if 4 > 9:
    print(" 4 es menor que 9")
else:
    print("yo me imprimo si todo lo demas es false")

# cuando se quiere poner un if en una sola linea 

if 5 < 9: print("esto es un if de una sola linea")

print(" cuando devuelve los demas y es true") if 5 > 3 else print(" cuando devuelve false")

