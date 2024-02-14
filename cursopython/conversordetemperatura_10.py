"""Este módulo contiene el ejercicio de temperatura."""


def celsius_a_fahrenheit(celsius):
    # Fórmula para convertir grados Celsius a grados Fahrenheit
    fahrenheit = (celsius * 9/5) + 32
    return fahrenheit

# Solicitar al usuario la temperatura en grados Celsius
temperatura_celsius = float(input("Ingresa la temperatura en grados Celsius: "))

# Llamar a la función para realizar la conversión
temperatura_fahrenheit = celsius_a_fahrenheit(temperatura_celsius)

# Mostrar el resultado
print(f"{temperatura_celsius} grados Celsius son equivalentes a {temperatura_fahrenheit} grados Fahrenheit.")

# otra forma 

temperatura = float(input("ingrese la temperatura: "))
escala = input("Es farenheit (F) o es Celsius(C)? ").lower()

if escala == "f":
    celsius = (temperatura - 32) * 5/9 
    print(celsius)
elif escala == "c":
    fahrenheit = temperatura * 1.8 + 32
    print("fahrenheit")
else:
    print("No es Farenheit ")

    