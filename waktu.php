<?php
class Motor {
    private $Matic;
    private $SportBike;
    private $Scooter;
    private $Cruiser;
    protected $Ppn;

    function __construct() {
        $this->Ppn = 10000;
    }
     
    public function setHarga($tipe1, $tipe2, $tipe3, $tipe4) {
        $this->Matic = $tipe1;
        $this->SportBike = $tipe2;
        $this->Scooter = $tipe3;
        $this->Cruiser = $tipe4;
    }
    
    public function getHarga() {
        $data["Matic"] = $this->Matic;
        $data["SportBike"] = $this->SportBike;
        $data["Scooter"] = $this->Scooter;
        $data["Cruiser"] = $this->Cruiser;
        return $data;
    }
}

class Beli extends Motor {
    public function CetakPembelian() {
        //Untuk Nyari harga//
        $dataHarga = $this->getHarga();
        $hargaBeli = $this->waktu * $dataHarga[$this->jenis];
        $hargaRental = $hargaBeli + $this->Ppn;

        //untuk menentukan member atau bukan//
        if ($this->nama == "Edward" || $this->nama == "Nabil" ||  $this->nama == "Geo" ||  $this->nama == "Rayhan" || $this-> nama == "Daniel") {
            $status = "Member ";
            $hargaRental1 = $hargaRental;
            $hargadiskon = $hargaRental1 * 5/100;        
            $hargaRental = $hargaRental1 - $hargadiskon;
            $diskon = "Mendapakan diskon sebesar 5%";
        }else {
            $status = "Non-Member";
            $diskon = " Tidak Mendapat Diskon";
        };

        //Nampilin hasilnya//
        echo "<center>";
        echo "------------------------------------------------------------" . "<br>";
        echo $this->nama . " Bersatus sebagai " . $status .  $diskon . "<br>";
        echo "Jenis Motor yang dirental adalah " . $this->jenis . " Selama " . $this->waktu . " Hari" . "<br>";
        echo "Harga rental per-harinya : " . number_format($dataHarga[$this->jenis], 0, ',' , '.') . "<br>" . "<br>";
        echo "Besar yang harus dibayarkan adalah " . number_format($hargaRental, 0, ',', '.') . "<br>";
        echo "------------------------------------------------------------";
        echo "</center>";
    }
}
