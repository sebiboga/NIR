<?php

// POST parameters:
//  companie - denumire companie
//  cui   - cod fiscal ; contine RO daca este platitor de TVA
//  registru - numar de inregistrare in registrul comertului

//  cui este obligatoriu, ceilalti paramatrii fiind optionali

//  companiile de test intra cu statusul 0, toate celelalte intra in status 1, apoi validate in status 2, inactive in status 3

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



  
if (isset($_POST['status']))
 { if (!empty($_POST['status']))
   $status = $_POST['status']== 'test' ? '0' : '1'; }
   else 
	  $status = '1';



  

$sql = "INSERT INTO company (id,denumire,cui,registru,status) VALUES ('$id','$denumire','$cui','$registru','$status')";

if (mysqli_query($concompany, $sql)) {

  $results= new stdClass();
  $results -> id = $id;
  echo json_encode($results); 
  
  
} else {
  echo "error : " . mysqli_error($concompany);
  http_response_code(409);
}
}}
   else 
   { http_response_code(406); echo 'cui este obligatoriu';}
?>