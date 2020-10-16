<?php
class Fraction
{
    public $tuSo;
    public $mauSo;

    public function __construct($tuSo, $mauSo)
    {
        $this->tuSo = $tuSo;
        $this->mauSo = $mauSo;
    }


    public function greatestCommonDivisor() {
        $tuSo = $this->tuSo;
        $mauSo = $this->mauSo;
        while ($tuSo * $mauSo != 0){
            if ($tuSo > $mauSo){
                $tuSo %= $mauSo;
            }else{
                $mauSo %= $tuSo;
            }
        }
        return $tuSo + $mauSo;
    }


    public function compact($fraction) {
        $largeG = $this->greatestCommonDivisor($fraction);
        $tuSo = $this->tuSo / $largeG;
        $mauSo = $this->mauSo / $largeG;

        return new Fraction($tuSo, $mauSo);

    }


    public function add($fraction) {
        $tuSo = ($this->tuSo * $fraction->mauSo) + ($this->mauSo * $fraction->tuSo);
        $mauSo = ($this->mauSo * $fraction->mauSo);

        return new Fraction($tuSo, $mauSo);

    }


    public function subtract($fraction) {
        $tuSo = ($this->tuSo * $fraction->mauSo) - ($this->mauSo * $fraction->tuSo);
        $mauSo = ($this->mauSo * $fraction->mauSo);

        return new Fraction($tuSo, $mauSo);
    }


    public function multiply($fraction) {
        $tuSo = ($this->tuSo * $fraction->tuSo);
        $mauSo = ($this->mauSo * $fraction->mauSo);

        return new Fraction($tuSo, $mauSo);
    }


    public function division($fraction) {
        $tuSo = ($this->tuSo * $fraction->mauSo);
        $mauSo = ($this->mauSo * $fraction->tuSo);

        return new Fraction($tuSo, $mauSo);
    }
}



$fraction = new Fraction(3, 4);
$fraction2 = new Fraction(2,4);
$fraction3 = new Fraction(1, 4);

$resAdd = $fraction->add($fraction2);
$resAdd = $resAdd->compact($resAdd);

$resMul = $resAdd->multiply($fraction3);
$resMul = $resMul->compact($resMul);
print_r($resAdd);
echo '<br>-----------------------------------<br>';
print_r($resMul);






