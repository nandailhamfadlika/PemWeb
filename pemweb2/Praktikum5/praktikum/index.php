<?php

class Manusia {

    public $nama;
    public $umur;

    public function setNama($nama){

        $this->nama = $nama;

    }

    public function setUmur($umur){

        $this->umur = $umur;

    }

    public function getInfo(){

        return "Nama : " . $this->nama . "<br>Umur : " . $this->umur;

    }

}

// Membuat Objek

$Nanda = new Manusia();
$Nanda->setNama("Nanda Ilham Fadlika");
$Nanda->setUmur(19);

echo $Nanda->getInfo();

echo "<br>";

$Bambang = new Manusia();
$Bambang->setNama("Bambang pro geming");
$Bambang->setUmur(21);

echo $Bambang->getInfo();

?>