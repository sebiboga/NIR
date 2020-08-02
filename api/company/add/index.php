<?php

// POST parameters:
//  companie - denumire companie
//  cui   - cod fiscal ; contine RO daca este platitor de TVA
//  registru - numar de inregistrare in registrul comertului

//  cui este obligatoriu, ceilalti paramatrii fiind optionali

include_once("../../../util/index.php");

$id = guid();



if (isset($_POST['companie']))
  if (!empty($_POST['companie']))
	  $denumire = $_POST['companie'];

if (isset($_POST['registru']))
  if (!empty($_POST['registru']))
	  $registru = $_POST['registru'];

if (isset($_POST['cui']))
{if (!empty($_POST['cui']))
  {	  $cui = $_POST['cui'];



  
  

$sql = "INSERT INTO company (id,denumire,cui,registru) VALUES ('$id','$denumire','$cui','$registru')";

if (mysqli_query($concompany, $sql)) {
  echo "insert was successful";
} else {
  echo "error : " . mysqli_error($concompany);
}
}}
   else 
   { http_response_code(409); echo 'cui este obligatoriu';}
?>