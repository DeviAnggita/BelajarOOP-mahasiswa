<?php
//semua form bersifat universal 
//from merupakan class abstract karena atributnya tidak jelas 
Class Form{
//bagian ngisi teks bisa berupa text , textarea 
// field berupa array 
var $fields = array(); 
//action masuk ke construct 
//action nanti ada this--> action berfungsi untuk ke halaman selanjutnya 
// ke halaman yang berbeda atau file lain 
//jika this --> action dikosongin maka berada di file itu sendiri 
var $action;
//submit untuk variabel mengisi submit 
//submit untuk value data 
var $submit = "";
// jumFiled untuk perulangan jumlah field 
var $jumField=0;

function __construct($action='', $submit='Input'){
    $this->action = $action;
    $this->submit = $submit;
    }
    
    function displayForm(){
    echo"<form action='".$this->action."' method='post'>";
    echo"<table widht='100%'>";
    for($i=0;$i<$this->jumField;$i++)
    {
    echo"<tr>
         <td align='right'>".$this->fields[$i]['label']."</td>";
    echo"<td><input type='text' name='".$this->fields[$i]['name']."'></td>
         </tr>";
    }
    echo"<tr><td><input type='submit' name='tombol' 
    value='".$this->submit."' ></td></tr>";
    echo"</table>";
    }
    
    function addField($name,$label){
        $this->fields[$this->jumField]['name']=$name;
        $this->fields[$this->jumField]['label']=$label;
        $this->jumField++;
    }

    function getData(){
        //Hanya untuk return  ,disesuaikan dengan fiels 
        for($i=0;$i<$this->jumField;$i++)
        {
            $data[$i]=$_POST[$this->fields[$i]['name']];
        }
        return $data;
         /*
        $data[0]=$_POST['nim'];
        $data[1]=$_POST['nama'];
        $data[2]=$_POST['tahun'];
        $data[3]=$_POST['kota'];
        return $data;
        */
    }

    }

?>