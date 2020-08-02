<?php

// POST parameters:
//  companie - denumire companie
//  cui   - cod fiscal ; contine RO daca este platitor de TVA
//  registru - numar de inregistrare in registrul comertului



include_once("../../../util/index.php");

$id = guid();



if (isset($_POST('companie')))
  if (!empty($_POST('companie')))
	  $denumire = $_POST('companie');



if (isset($_POST('cui')))
  if (!empty($_POST('cui')))
	  $cui = $_POST('cui');


if (isset($_POST('registru')))
  if (!empty($_POST('registru')))
	  $registru = $_POST('registru');

$sql = "INSERT INTO company (id,denumire,cui,registru) VALUES ('$id','$denumire','$cui','$registru')";

if (mysqli_query($concompany, $sql)) {
  echo "insert was successful";
} else {
  echo "error : " . mysqli_error($concompany);
}
?>