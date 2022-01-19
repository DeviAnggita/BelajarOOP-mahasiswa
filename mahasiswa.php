<?php
require('form.php');

Class Mahasiswa{
    protected $nim;
    var $nama;
    var $tahun;
    var $kota;

    //method dipanggil ketika object di create(new)
    public function __construct($nim="V3420028",$nama="Devi",$tahun=2002,$kota="Semarang")
    {
        $this-> nim = $nim;
        $this-> nama = $nama;
        $this-> tahun = $tahun;
        $this-> kota = $kota;
    }
       
    public function isiData($nim,$nama,$tahunlahir,$kotatinggal){
        $this-> nim = $nim;
        $this-> nama = $nama;
        $this-> tahun = $tahunlahir;
        $this-> kota = $kotatinggal;
    }

    public function cetakData() {
        echo "----------------------------------------" ."</br>";
        echo "Nim Mahasiswa :".$this->nim."</br>" ;
        echo "Nama Mahasiswa :".$this->nama."</br>" ;
        echo "Tahun Mahasiswa :".$this->tahun."</br>" ;
        echo "Kota Mahasiswa :".$this->kota."</br>" ;
        echo "Umur Mahasiswa :".$this->hitungUmur()."</br>" ;
        echo "----------------------------------------"."</br>" ;
    }

    //method void java menggunakan java 
    //method non void 
    //untuk membedakan method void dan non void di php dengan adanya return atau tidak 

    protected function hitungumur()
    {
        $umur= date('Y')-$this -> tahun;
        return $umur;
    }

    public function inputForm(){
        $formmhs = new Form('','Input Mahasiswa');
        $formmhs->addField('nim','Nim Mahasiswa');
        $formmhs->addField('nama','Nama Mahasiswa');
        $formmhs->addField('tahun','Tahun Lahir Mahasiswa');
        $formmhs->addField('kota','Kota Tinggal Mahasiswa');
       //$formmhs->addField('nomor telepon','Nomor Telepon Mahasiswa');

       // post tombol dengan nanti aksinya dari name tombol yakni button
       // button Input Mahasiswa
       // bisa juga dengan name = submit 
       // yang biasanya digunakan pada button submit 
        if(isset($_POST['tombol']))
        {
            $data= $formmhs->getData();
            $this-> nim = $data[0];
            $this-> nama = $data[1];
            $this-> tahun = $data[2];
            $this-> kota = $data[3];
            $this-> cetakData();
            require("koneksi.php");
            $sql = "INSERT INTO mahasiswa( nim, nama,tahun, kota) 
            VALUES ('" . $this->nim ."','" 
                    . $this->nama .  "','" 
                    . $this->tahun . "','"
                    . $this->kota .  "')";
            // $result = mysqli_query ($conn,$simpan);
            if ($conn->query($sql) === TRUE) {
                echo "New record creared seccessfully";
            }else{
                echo "Error : " .$sql . "<br>".$conn->error;
            }
        }
        else
        {
            $formmhs->displayForm();
        }
    }
}   