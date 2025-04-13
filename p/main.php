<?php
include_once ("index.php");
include_once ("./model/Aluno.php");

$aluno = new Aluno ("Carlos", 17);

echo json_encode($aluno);


?>