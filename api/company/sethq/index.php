<?php

// POST parameters:
//  idcompanie - id companie
//  address    - 
//  phone      - 
//  fax        -
//  mobile     -
//  email      -
//  admin      -

include_once("../../../util/index.php");

$id = guid();




if (isset($_POST['idcompanie']))
  if (!empty($_POST['idcompanie']))
  {
	  $idcompanie = $_POST['idcompanie'];


$address = '';
if (isset($_POST['address']))
  if (!empty($_POST['address']))
	  $address = $_POST['address'];
  
  
$phone = '';  
if (isset($_POST['phone']))
  if (!empty($_POST['phone']))
	  $phone = $_POST['phone'];  

$fax = '';
if (isset($_POST['fax']))
  if (!empty($_POST['fax']))
	  $fax = $_POST['fax'];  

$mobile = '';
if (isset($_POST['mobile']))
  if (!empty($_POST['mobile']))
	  $mobile = $_POST['mobile'];  
  
  
$email = '';  
if (isset($_POST['email']))
  if (!empty($_POST['email']))
	  $email = $_POST['email']; 

$admin = '';
if (isset($_POST['admin']))
  if (!empty($_POST['admin']))
    $admin = $_POST['admin'];
      

  

$sql = "INSERT INTO hq (id,idcompany,address,phone,fax,mobile,email,admin) VALUES ('$id','$idcompanie','$address','$phone','$fax','$mobile','$email','$admin')";

if (mysqli_query($concompany, $sql)) {
  echo '{"id":"'.$id.'"}';
} else {
  echo "error : " . mysqli_error($concompany);
  http_response_code(409);
}
  }
  else 
	  http_response_code(409);

?>