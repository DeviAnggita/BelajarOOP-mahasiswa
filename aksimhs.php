<?php
require('mahasiswa.php');


$mhsA = new Mahasiswa() ; 
$mhsA ->inputForm();
/*
//Contoh Opsi1
$mhsA = new Mahasiswa() ; 
$mhsA->isiData("V3420028","Devi",2002,"Sragen");

// jangan mengakses diluar klas 
//echo "nim mhs" .$mhsA->nim."</br>";

//Contoh Opsi2
$mhsB = new Mahasiswa("V3420029","Salma",2002,"KarangAnyar");
//$mhsB->isiData("V3420029","Salma",2002,"KarangAnyar");


$mhsA->cetakData();
$mhsB->cetakData();
*/