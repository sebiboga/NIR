<?php

// POST parameters:
//  user - utilizator - poate fi email
//  passwd   - parola (MD5 encoded)
//  tel - optional

//  user - este obligatoriu


include_once("../../../util/index.php");

$id = guid();



	  

if (isset($_POST['passwd']))
  { $passwd = $_POST['passwd'];}
       else $passwd = '';

if (isset($_POST['tel']))
if (!empty($_POST['tel']))
  {	  $tel = $_POST['tel']; } else $tel = '';



if (isset($_POST['user']))
{  if (!empty($_POST['user']))
	{  $user = $_POST['user'];

   $sql = "INSERT INTO users (id,username,passwd,telefon) VALUES ('$id','$user','$passwd','$tel')";

if (mysqli_query($concompany, $sql)) {
  echo "insert was successful";
} else {
  echo "error : " . mysqli_error($concompany);
  http_response_code(409);
}
}}
   else 
   { http_response_code(409); echo 'user este obligatoriu';}
?>