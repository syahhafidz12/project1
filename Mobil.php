<?php

/**
 * Description of Class
 *
 * @author Lenovo
 */
class Mobil {

    //Property
    public $jumlahRoda;
    //Property
    private $jumlahKursi;

    //Method
    public function setJumlahRoda($jumlahRoda) {
        $this->jumlahRoda = $jumlahRoda;
    }

    //Method
    public function setJumlahKursi($jumlahKursi) {
        $this->jumlahKursi = $jumlahKursi;
    }

    //Method
    public function cetak() {
        echo 'Mobil punya ' . $this->jumlahRoda . ' roda dan ' . $this->jumlahKursi . ' kursi.';
    }

}

$sedan = new Mobil(); //Instansiansi Object
$sedan->setJumlahRoda(14);
$sedan->setJumlahKursi(16);
//$sedan->cetak();
echo $sedan->jumlahRoda;
