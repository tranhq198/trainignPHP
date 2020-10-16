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

    public function compact($tuSo, $mauSo) {
        while (($tuSo != 0) && ($mauSo != 0)) {
            if ($tuSo >= $mauSo)
                $tuSo -= $mauSo;
            else
                $mauSo -= $tuSo;
        }
        if ($tuSo == 0){
            return $mauSo;
        } else {
            return $tuSo;
        }
    }


    public function add($Fraction) {
        $tuSo = ($this->tuSo * $Fraction->mauSo) + ($this->mauSo * $Fraction->tuSo);
        $mauSo = ($this->mauSo * $Fraction->mauSo);

        $compact = $this->compact($tuSo, $mauSo);
        $tuSo = $tuSo / $compact;
        $mauSo = $mauSo / $compact;

        return new Fraction($tuSo, $mauSo);

    }


    public function subtract($Fraction) {
        $tuSo = ($this->tuSo * $Fraction->mauSo) - ($this->mauSo * $Fraction->tuSo);
        $mauSo = ($this->mauSo * $Fraction->mauSo);

        $compact = $this->compact($tuSo, $mauSo);
        $tuSo = $tuSo / $compact;
        $mauSo = $mauSo / $compact;

        return new Fraction($tuSo, $mauSo);
    }


    public function multiply($Fraction) {
        $tuSo = ($this->tuSo * $Fraction->tuSo);
        $mauSo = ($this->mauSo * $Fraction->mauSo);

        $compact = $this->compact($tuSo, $mauSo);
        $tuSo = $tuSo / $compact;
        $mauSo = $mauSo / $compact;

        return new Fraction($tuSo, $mauSo);
    }


    public function division($Fraction) {
        $tuSo = ($this->tuSo * $Fraction->mauSo);
        $mauSo = ($this->mauSo * $Fraction->tuSo);

        $compact = $this->compact($tuSo, $mauSo);
        $tuSo = $tuSo / $compact;
        $mauSo = $mauSo / $compact;

        return new Fraction($tuSo, $mauSo);
    }
}

class CalculateFraction extends Fraction
{


}

$fraction = new Fraction(3, 4);
$fraction2 = new Fraction(2,4);
$fraction3 = new Fraction(1, 4);
$resAdd = $fraction->add($fraction2);
$resMul = $resAdd->multiply($fraction3);
print_r($resAdd);
echo '<br>-----------------------------------<br>';
print_r($resMul);






