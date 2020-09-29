<?php
$a = "";
$b = "";
$c = "";

/**
 * @param $a
 * @param $b
 * @param $c
 */
function giaiPt($a, $b, $c) {
    $delta  = $b*$b - (4*$a*$c);

   if($delta < 0) {
       echo ("phương trình vô nghiệm");
   }else if($delta = 0) {
       echo ("phuong trinh co nghiem kep");
       echo ("x1 = x2"."="."-$b/(2*$a)");
   }else if($delta > 0) {
       echo ("phuong trinh co 2 nghiem phan biet");
       echo ("x1 = ".(-$b + sqrt($delta)) / 2*$a);
       echo ("x2 = ".(-$b - sqrt($delta)) / 2*$a);
   }
   if($a + $b + $c == 0) {
       echo ("phuong trinh co nghiem la:");
       echo ("x1 = 1"."<br>"."x2 = "."$c / $a");
   }
    if($a - $b + $c == 0) {
        echo ("phuong trinh co nghiem la: ");
        echo ("x1=-1"."<br>"."x2 = "."-($c / $a)");
    }
}


if(isset($_POST["submit"])) {
    $soA = $_POST["so_a"];
    $soB = $_POST["so_b"];
    $soC = $_POST["so_c"];
    if(!empty($soA || $soB || $soC)){
        giaiPt($soA, $soB, $soC);
    }else {
        echo "Thieu gia tri dau vao";
    }
}
