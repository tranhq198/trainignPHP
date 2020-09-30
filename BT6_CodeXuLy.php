<?php
$a = "";
$b = "";
$c = "";
$x1 = "";
$x2 = "";

/**
 * @param $a
 * @param $b
 * @param $c
 */
function giaiPt($a, $b, $c) {
    $delta  = $b*$b - (4*$a*$c);
    if($delta < 0) {
        return 0;
    }else if($delta = 0) {
        $x1 = $x2 = -$b / (2* $a);
        return $x1;
    }else if($delta > 0) {
        $x1 = (-$b + sqrt($delta)) / (2*$a);
        $x2 = (-$b - sqrt($delta)) / (2*$a);
        return $x1;
        return $x2;
    }
}

if(isset($_POST["submit"])) {
    $soA = $_POST["so_a"];
    $soB = $_POST["so_b"];
    $soC = $_POST["so_c"];
    if(!empty($soA || $soB || $soC)){
        if($soA != 0) {
            giaiPt($soA, $soB, $soC);
        } else {
            echo "số a phài khác 0";
        }
    }else {
        echo "Thieu gia tri dau vao";
    }
}
