<?php

$nameProject = $_POST['nameProject']; 
$dataInicio  = $_POST['dataInicio'];
$DataTermino  = $_POST['DataTermino'];
$valorProject = $_POST['valorProject'];
$nameRisco = $_POST['nameRisco'];
$nameParticipantes = $_POST['nameParticipantes'];
$action = $_POST['action'];

include "../model/classProject.php";

$projeto = new classProject();
$projeto->addProjects($nameProject,$dataInicio,$DataTermino,$valorProject,$nameRisco,$nameParticipantes);
?>