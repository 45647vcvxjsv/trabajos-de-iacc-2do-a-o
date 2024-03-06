class Nota:
    def __init__(self, nombre, edad, asignatura, nota):
        self.nombre_alumno = nombre
        self.edad = edad
        self.asignatura = asignatura
        self.nota_alumno = nota
    

    
nombre = input("Ingrese el nombre del alumno: ")
edad = int(input("Ingrese la edad del alumno: "))
asignatura = input("Ingrese la asignatura: ")
nota = float(input("Ingrese la nota del alumno: "))

alumno1 = Nota(nombre, edad, asignatura, nota)

if alumno1.obtener_nota() >= 7:
    print("Alumno Aprobado con máxima nota.")
elif alumno1.obtener_nota() >= 4:
    print("El alumno fue aprobado con nota media.")
else:
    print("El alumno fue reprobado.")



