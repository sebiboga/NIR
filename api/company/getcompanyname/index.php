<?php

// GET parameters:
//  cui   - cod fiscal ; contine RO daca este platitor de TVA

//  cui este obligatoriu


include_once("../../../util/index.php");

$id = guid();





if (isset($_GET['cui']))
{if (!empty($_GET['cui']))
  {	  $cui = $_GET['cui'];



$sql = "SELECT denumire FROM company WHERE cui = '$cui' ";


if ($result = mysqli_query($concompany, $sql)) {
	$row = mysqli_fetch_assoc($result);
    $name  = $row["denumire"];

  $results=new stdClass();
  $results-> companie=$name;
  echo json_encode($results);
  
} else {
  echo "error : " . mysqli_error($concompany);
  http_response_code(404);
}
}}
   else 
   { http_response_code(200); echo 'not found';}
?>