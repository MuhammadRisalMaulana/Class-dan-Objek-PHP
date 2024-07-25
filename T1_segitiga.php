<?php
class Segitiga {
    public $alas;
    public $tinggi;
    public $sisiA;
    public $sisiB;
    public $sisiC;
    function __construct($alas, $tinggi, $sisiA, $sisiB, $sisiC) {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
        $this->sisiA = $sisiA;
        $this->sisiB = $sisiB;
        $this->sisiC = $sisiC;
    }
  
    function hitung_luas() {
        return 0.5 * $this->alas * $this->tinggi;
    }

    function hitung_keliling() {
        return $this->sisiA + $this->sisiB + $this->sisiC;
    }
}

$segitiga = new Segitiga(10, 5, 4, 6, 8);
echo "Luas Segitiga: " . $segitiga->hitung_luas() . "<br>";
echo "Keliling Segitiga: " . $segitiga->hitung_keliling() . "<br>";
?>