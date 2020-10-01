<?php
/**
 * @param $a
 * @param $b
 * @param $c
 */
function giaiPt($a, $b, $c) {
    $delta  = $b*$b - (4*$a*$c);
    if($delta < 0) {
        return false;
    }else if($delta == 0) {
        $x = -$b / (2* $a);
        return $x;
    }else if($delta > 0) {
        $x1 = (-$b + sqrt($delta)) / (2*$a);
        $x2 = (-$b - sqrt($delta)) / (2*$a);
        return ['x1' => $x1,'x2 ' => $x2];
    }
}

if(isset($_POST["submit"])) {
    $soA = $_POST["so_a"];
    $soB = $_POST["so_b"];
    $soC = $_POST["so_c"];
    if(!empty($soA || $soB || $soC)){
        if($soA != 0) {
            $result = giaiPt($soA, $soB, $soC);
            if(is_array($result)) {
                echo 'x1 = '.$result['x1'].', x2 ='.$result['x2'];
            } else if(is_numeric($result)) {
                echo 'x='.$result;
            } else {
                echo 'Phương trình vô nghiệm!';
            }
        } else {
            echo "số a phài khác 0";
        }
    }else {
        echo "Thieu gia tri dau vao";
    }
}
