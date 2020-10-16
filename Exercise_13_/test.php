<?php
class Fraction {
    public $tuSo;
    public  $mauSo;
    public $compact;


    public function __construct($tuSo, $mauSo)
    {
        $this->tuSo = $tuSo;
        $this->mauSo = $mauSo;
    }


    public function setCompact()
    {
        $compact = $this->compact('','');
        $this->compact = $compact;
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

        return new Fraction($tuSo, $mauSo);
    }

}

class Operator extends Fraction
{
    public function add($Fraction) {


        $tuSo = $this->tuSo / $compact;
        $mauSo = $this->mauSo / $compact;

        return new Fraction($tuSo, $mauSo);
    }
}

$fraction = new Operator(1, 4);
$fraction2 = new Operator(2,4);

$resAdd = $fraction->add($fraction2);
print_r($resAdd);
echo '<br>-----------------------------------<br>';
