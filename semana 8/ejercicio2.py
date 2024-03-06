class estudiante:
  def __init__(self, nombre, edad, asignatura, nota):
    self.nombre = nombre
    self.edad = edad
    self.asignatura = asignatura
    self.nota = nota
  
  def nota_asignada(self):
     return self.nota
  
aprobado_conteo = 0
reprobado_conteo = 0

cantidad_alumnos = int(input("Ingrese el numero de alumnos a evaluar"))

for i in range(cantidad_alumnos):
  nombre = input("Ingrese el nombre del alumno: ")
  edad = int(input("Ingrese la edad del alumno: "))
  asignatura = input("Ingrese la asignatura: ")
  nota = float(input("Ingrese la nota del alumno: "))

estudiante = estudiante(nombre,edad,asignatura,nota)


print(f"""
    Datos del estudiante: \n\
    Nombre : {estudiante.nombre} \n  
    Edad :  {estudiante.edad} \n
    Asignatura : {estudiante.asignatura} \n
    Nota : {estudiante.nota} \n
    
    """)

if estudiante.nota_asignada() >= 7:
    print("Alumno Aprobado con máxima nota.")
    aprobado_conteo += 1
if estudiante.nota_asignada() < 4:
   print("Alumno reprobado con nota inferior a la minima")
   reprobado_conteo += 1 
elif estudiante.nota_asignada() >= 4:
    print("El alumno fue aprobado con nota media.")
else:
    print("El alumno fue reprobado.")



print(f"numero de alumnos aprobados: {aprobado_conteo}")
print(f"numero de alumnos reprobados: {reprobado_conteo}")



