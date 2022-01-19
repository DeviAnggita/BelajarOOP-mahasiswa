<?php
require('mahasiswaD3.php');

//Contoh Opsi1
$mhsC = new MahasiswaD3() ; 
$mhsC->isiData("V3420028","Devi",2002,"Sragen");

//Contoh Opsi2
$mhsD = new MahasiswaD3("V3420029","Salma",2002,"KarangAnyar");
$mhsD ->beriJudulTA("Aplikasi Komputer");


$mhsC->cetakData();
$mhsD->cetakData();