<?php

// class bangun datar
class BangunDatar {
    protected $luas;
    protected $keliling;

    public function area() {
    }

    public function circumference() {
    }

    public function enlarge($scale) {
    }

    public function shrink($scale) {
    }
}

// lingkaran
class Lingkaran extends BangunDatar {
    private $jariJari;

    public function __construct($jariJari) {
        $this->jariJari = $jariJari;
    }

    public function area() {
        $this->luas = pi() * pow($this->jariJari, 2);
        return $this->luas;
    }

    public function circumference() {
        $this->keliling = 2 * pi() * $this->jariJari;
        return $this->keliling;
    }

    public function enlarge($scale) {
        $this->jariJari *= $scale;
    }

    public function shrink($scale) {
        $this->jariJari /= $scale;
    }
}

// persegi
class Persegi extends BangunDatar {
    private $sisi;

    public function __construct($sisi) {
        $this->sisi = $sisi;
    }

    public function area() {
        $this->luas = pow($this->sisi, 2);
        return $this->luas;
    }

    public function circumference() {
        $this->keliling = 4 * $this->sisi;
        return $this->keliling;
    }

    public function enlarge($scale) {
        $this->sisi *= $scale;
    }

    public function shrink($scale) {
        $this->sisi /= $scale;
    }
}

// persegi panjang
class PersegiPanjang extends BangunDatar {
    private $panjang;
    private $lebar;

    public function __construct($panjang, $lebar) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function area() {
        $this->luas = $this->panjang * $this->lebar;
        return $this->luas;
    }

    public function circumference() {
        $this->keliling = 2 * ($this->panjang + $this->lebar);
        return $this->keliling;
    }

    public function enlarge($scale) {
        $this->panjang *= $scale;
        $this->lebar *= $scale;
    }

    public function shrink($scale) {
        $this->panjang /= $scale;
        $this->lebar /= $scale;
    }
}

// Descriptor
class Descriptor {
    public static function describe(BangunDatar $bangunDatar) {
        $class = get_class($bangunDatar);
        $luas = $bangunDatar->area();
        $keliling = $bangunDatar->circumference();

        echo "Bangun datar ini adalah $class yang memiliki luas ".sprintf('%.2f', $luas)." dan keliling ".sprintf("%.2f", $keliling).".";
    }
}

// eksekusi
$lingkaran = new Lingkaran(5);
$persegi = new Persegi(4);
$persegiPanjang = new PersegiPanjang(3, 6);

Descriptor::describe($lingkaran);
echo "<br>";
Descriptor::describe($persegi);
echo "<br>";
Descriptor::describe($persegiPanjang);

?>