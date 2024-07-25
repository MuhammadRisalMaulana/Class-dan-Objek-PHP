<?php
class Buku {
    public $judul;
    public $penulis;
    public $tahunTerbit;

    public function __construct($judul, $penulis, $tahunTerbit) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->tahunTerbit = $tahunTerbit;
    }

    public function tampilkanInfo() {
        return "Judul : $this->judul, Penulis : $this->penulis, Tahun Terbit : $this->tahunTerbit";
    }
}

class Perpustakaan {
    private $koleksiBuku = [];

    public function tambahBuku(Buku $buku) {
        $this->koleksiBuku[] = $buku;
    }

    public function tampilkanSemuaBuku() {
        foreach ($this->koleksiBuku as $buku) {
            echo $buku->tampilkanInfo() . "<br>";
        }
    }

    public function cariBukuBerdasarkanJudul($judul) {
        foreach ($this->koleksiBuku as $buku) {
            if ($buku->judul == $judul) {
                return $buku->tampilkanInfo();
            }
        }
        return "Buku tidak ditemukan.";
    }
}

// Contoh penggunaan:
$buku1 = new Buku("Belajar PHP", "John Doe", 2020);
$buku2 = new Buku("Pemrograman Web", "Jane Doe", 2019);

$perpustakaan = new Perpustakaan();
$perpustakaan->tambahBuku($buku1);
$perpustakaan->tambahBuku($buku2);

echo "Daftar Semua Buku :<br>";
$perpustakaan->tampilkanSemuaBuku();

echo "<Cari Buku :br>";
echo $perpustakaan->cariBukuBerdasarkanJudul("Belajar PHP") . "<br>";
?>