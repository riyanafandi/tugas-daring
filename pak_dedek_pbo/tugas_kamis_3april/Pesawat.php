<?php 
class Pesawat 
{
    private $nama,
            $harga,
            $tinggiMax,
            $kecepatanMax;
    
    public function setNama($nama){
        $this->nama = $nama;
    }
    public function getNama() {
        return $this->nama;
    }
    public function setHarga($harga){
        $this->harga = $harga;
    }
    public function getHarga(){
        return $this->harga;
    }
    public function setTinggiMax($tinggiMax){
        $this->tinggiMax = $tinggiMax;
    }
    public function getTinggiMax(){
        return $this->tinggiMax;
    }
    public function setKecepatanMax($kecepatanMax){
        $this->kecepatanMax = $kecepatanMax;
    }
    public function getKecepatanMax(){
        return $this->kecepatanMax;
    }
}
// instance class dan set nilai property
$pesawat1 =  new Pesawat();
$pesawat1->setNama("Boeing 737 MX");
$pesawat1->setHarga("2000.000.000");
$pesawat1->setTinggiMax("750 Feet");
$pesawat1->setKecepatanMax("650 Km/Jam");

// geter nilai dari setiap property
$nama = $pesawat1->getNama();
$harga = $pesawat1->getHarga();
$tinggiMax = $pesawat1->getTinggiMax();
$kecepatanMax = $pesawat1->getKecepatanMax();

// eksekusi tampilan
echo "Biaya Operasional Pesawat $nama Sebesar Rp. $harga Yang Memiliki Tinggi Maksimum $tinggiMax dan kecepatan maksimum $kecepatanMax ";
echo "<br>";
echo "Riyan Afandi Kelas 11 TKJ 3";
?>