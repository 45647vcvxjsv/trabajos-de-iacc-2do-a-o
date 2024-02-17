<?php

class horarios{
  private $conn;
  private $table_name= 'horarios';

  public $calendario_id;
  public $id_curso;
  public $diasemana;
  public $horainicio;
  public $horafinal;

  public function __construct($db, $calendario_id, $id_curso, $diasemana, $horainicio, $horafinal) {
    $this->$db = $db;
    $this->$calendario_id = $calendario_id;
    $this->$id_curso = $id_curso;
    $this->$diasemana = $diasemana;
    $this->$horafinal = $horainicio;
    $this->$horafinal = $horafinal;
  }

  public function getIdcalendario_id() {
    return $this->calendario_id;
  }
  public function setIdcalendario_id($calendario_id){
    $this->calendario_id = $calendario_id;
  }

  public function getId_curso(){
    return $this->id_curso;
  }
  public function setId_curso($id_curso){
    $this->id_curso = $id_curso;
  }
  public function getdiasemana(){
    return $this->diasemana;
  }
  public function setdiasemana($diasemana){
    $this->diasemana = $diasemana;
  }
  public function gethorainicio(){
    return $this->horainicio;
  }
  public function sethorainicio($horainicio){
    $this->horainicio = $horainicio;
  }
  public function gethorafinal(){
    return $this->horafinal;
  }
  public function sethorafinal($horafinal){
    $this->horafinal = $horafinal;
  }

  public function leer(){
    $query = 'SELECT * FROM horarios'. $this->table_name;
    $stmt = $this->conn->prepare($query);
    $stmt->execute();
    return $stmt;
  }
}

$horario = new horarios($db, $calendario_id, $id_curso, $diasemana, $horarioinicio, $horafinal);
echo "Calendario id: " . $horario->getIdcalendario_id() . "<br>";
echo "Numero de curso: " . $horario->getId_curso() . "<br>";
echo "Dia de la semana: " . $horario->getdiasemana() . "<br>";
echo "Iniciando la Jornada: " . $horario->gethorainicio() . "<br>";
echo "Finalizando la Jornada: " . $horario->gethorafinal() . "<br>";



