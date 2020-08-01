<?php
include_once("../../util/index.php");

$furnizor = new stdClass();
$beneficiar  = new stdClass();

$receptie = new stdClass();
$receptie-> id = guid();
$receptie-> title = "NOTA DE RECEPTIE SI CONSTATARE DIFERENTE";


$receptie-> furnizor = new stdClass();
$receptie-> beneficiar = new stdClass();

$furnizor-> nume = "SC IDEAL SRL";
$furnizor-> cui  = "RO9032235";
$furnizor-> document ="FACTURA";
$furnizor-> docnr = "9982733";
$furnizor-> datadoc = "17/03/2020";

$beneficiar-> nume = "SC BENEFICIAR SRL-D";
$beneficiar-> cui  = "RO911111111";
$beneficiar-> comert = "amanuntul";


$detalii= array();

$crt = 1;
$detalii[$crt] = new stdClass();
$detalii[$crt]->crt = $crt;
$detalii[$crt]->cod_intern = "cocacola25";
$detalii[$crt]->ean = "3133554854441";
$detalii[$crt]->denumire_produs = "COCA COLA 2.5L";
$detalii[$crt]->um = "BUC";
$detalii[$crt]->pret_unitar = 35;
$detalii[$crt]->moneda = "RON";
$detalii[$crt]->cantitate = 24;
$detalii[$crt]->valoare = $detalii[$crt]->cantitate * $detalii[$crt]->pret_unitar;
$detalii[$crt]->procent_tva = "19";
$detalii[$crt]->tva_aferent = $detalii[$crt]->valoare * $detalii[$crt]->procent_tva/100;


$crt = 2;
$detalii[$crt] = new stdClass();
$detalii[$crt]->crt = $crt;
$detalii[$crt]->cod_intern = "cocacola25";
$detalii[$crt]->ean = "3133554854441";
$detalii[$crt]->denumire_produs = "COCA COLA 2.5L";
$detalii[$crt]->um = "BUC";
$detalii[$crt]->pret_unitar = 35;
$detalii[$crt]->moneda = "RON";
$detalii[$crt]->cantitate = 24;
$detalii[$crt]->valoare = $detalii[$crt]->cantitate * $detalii[$crt]->pret_unitar;
$detalii[$crt]->procent_tva = "19";
$detalii[$crt]->tva_aferent = $detalii[$crt]->valoare * $detalii[$crt]->procent_tva/100;



$crt = 3;
$detalii[$crt] = new stdClass();
$detalii[$crt]->crt = $crt;
$detalii[$crt]->cod_intern = "cocacola25";
$detalii[$crt]->ean = "3133554854441";
$detalii[$crt]->denumire_produs = "COCA COLA 2.5L";
$detalii[$crt]->um = "BUC";
$detalii[$crt]->pret_unitar = 35;
$detalii[$crt]->moneda = "RON";
$detalii[$crt]->cantitate = 24;
$detalii[$crt]->valoare = $detalii[$crt]->cantitate * $detalii[$crt]->pret_unitar;
$detalii[$crt]->procent_tva = "19";
$detalii[$crt]->tva_aferent = $detalii[$crt]->valoare * $detalii[$crt]->procent_tva/100;




$receptie-> furnizor = $furnizor;
$receptie-> beneficiar = $beneficiar;
$receptie-> detalii  = $detalii;

echo json_encode($receptie);

?>