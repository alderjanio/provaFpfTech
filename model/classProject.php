<?php


include ("classConnect.php");
class ClassProject extends ClassConnection{

    public function addProjects($nameProject,$dataInicio,$DataTermino,$valorProject,$nameRisco,$nameParticipantes)
    {
        var_dump($nameProject,$dataInicio,$DataTermino,$valorProject,$nameRisco,$nameParticipantes);
    }

}
?>