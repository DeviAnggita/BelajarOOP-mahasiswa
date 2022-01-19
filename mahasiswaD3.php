<?php
require('mahasiswa.php'); //mengambil data dari mahasiswa.php
//pewarisan
Class MahasiswaD3 extends Mahasiswa{

    var $judulTA; //hanya milik mahasiswaD3.php

    //method dipanggil ketika object di create(new)
    public function __construct($nim="V3420028",$nama="Devi",$tahun=2002,$kota="Semarang")
    {
        parent :: __construct($nim,$nama,$tahun,$kota);
        $this->judulTA="Belum Ada Judul";
    }
       
    final public function beriJudulTA($judul){
        $this-> judulTA =$judul ;
    }

    //Method diperbaharui dari method file mahasiswa.php
    public function cetakData() { //overriding
        echo "----------------------------------------" ."</br>";
        echo "Nim Mahasiswa :".$this->nim."</br>" ;
        echo "Nama Mahasiswa :".$this->nama."</br>" ;
        echo "Tahun Mahasiswa :".$this->tahun."</br>" ;
        echo "Kota Mahasiswa :".$this->kota."</br>" ;
        echo "Judul TA :".$this->judulTA."</br>" ;
        echo "----------------------------------------"."</br>" ;
    }

}   