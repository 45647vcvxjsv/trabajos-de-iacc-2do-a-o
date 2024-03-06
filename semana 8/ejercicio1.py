class estudiante:
  def __init__(self, nombre, edad, asignatura, nota):
    self.nombre = nombre
    self.edad = edad
    self.asignatura = asignatura
    self.nota = nota
  
  def nota_asignada(self):
     return self.nota

  
class aprobados(estudiante):
   def __init__(self, nombre, edad, asignatura, nota):
      super().__init__(nombre, edad, asignatura, nota)
      print("El alumno, fue aprobado")

class repitentes(estudiante):
  def __init__(self, nombre, edad, asignatura, nota):
     super().__init__(nombre, edad, asignatura, nota)
     print("Lastima, hara el mismo curso el año que viene")
  


nombre = input("Ingrese el nombre del alumno: ")
edad = int(input("Ingrese la edad del alumno: "))
asignatura = input("Ingrese la asignatura: ")
nota = float(input("Ingrese la nota del alumno: "))

estudiante = estudiante(nombre, edad, asignatura, nota)

print(f"""
    Datos del estudiante: \n\
    Nombre : {estudiante.nombre} \n
    Edad : ) {estudiante.edad} \n
    Asignatura : {estudiante.asignatura} \n
    Nota : {estudiante.nota} \n
    
    """)

if estudiante.nota_asignada() >= 7:
    print("Alumno Aprobado con máxima nota.")
elif estudiante.nota_asignada() >= 4:
    print("El alumno fue aprobado con nota media.")
else:
    print("El alumno fue reprobado.")



