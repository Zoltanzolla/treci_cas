<?php

$rezultat = str_replace("a", "5", "Ja sam programer");
echo $rezultat;

$drugaRec = str_replace(["a","e"],["4","3"] , "Ja sam programer");
echo $drugaRec;

$malaSlova = "OVO BI TREBALO DA BUDE MALIM SLOVIMA";
$malaSlova = strtolower($malaSlova);
echo $malaSlova;

#STRTUPPER-prebajues recenicu u velika slova

$samoglasnik = str_replace(["a","e","i","o"], ["4","3","1","0"], "Ideja nije moja,smisli su neki kreativni nastavnici" );
$samoglasnik = strtoupper($samoglasnik);
echo $samoglasnik;




?>
