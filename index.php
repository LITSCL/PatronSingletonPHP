<?php require_once "Persona.php"; ?>

<?php 
$persona1 = Persona::getInstance();
$persona2 = Persona::getInstance();

$persona1->setNombre("Esteban");

echo $persona2->getNombre();
?>