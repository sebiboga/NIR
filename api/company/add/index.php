<?php
include_once("../../../util/index.php");

$id = guid();
$denumire = 'INFOPOWER';
$cui = 'RO21953930';
$registru = 'J05/1574/2007';

$sql = "INSERT INTO company (id,denumire,cui,registru) VALUES ('$id','$denumire','$cui','$registru')";

if (mysqli_query($concompany, $sql)) {
  echo "insert was successful";
} else {
  echo "error : " . mysqli_error($concompany);
}
?>