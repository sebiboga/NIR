<?php

// POST parameters:
//  idc - denumire companie
//  idu   - cod fiscal ; contine RO daca este platitor de TVA

include_once("../../../util/index.php");

$id = guid();






if (isset($_POST['idu']))
{ if (!empty($_POST['idu']))
	{  $idu = $_POST['idu'];

  

if (isset($_POST['idc']))
  if (!empty($_POST['idc']))
	  $idc = $_POST['idc'];



  

$sql = "INSERT INTO uc_link (id,uid,cid) VALUES ('$id','$idu','$idc')";

if (mysqli_query($concompany, $sql)) {
  echo "insert was successful";
} else {
  echo "error : " . mysqli_error($concompany);
  http_response_code(409);
}
}}
   else 
   { http_response_code(409); echo 'idc,idu sunt obligatorii';}
?>