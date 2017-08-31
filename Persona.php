<?php
class Persona {

     public $nombre;
     public $apellido;

     public function hablar()

     {
          echo "Soy ".$this->nombre." y estoy hablando ".",";

     }

}

$p = new Persona();
$p->nombre = "Micaela";
$p->apellido = "Gomez";

$p1 = new Persona();
$p1->nombre = "Juan";
$p1->apellido = "Perez";

echo "Hola ".$p->nombre."<br>";
echo "Hola ".$p1->nombre."<br>";

$p->hablar();
$p1->hablar();
?>