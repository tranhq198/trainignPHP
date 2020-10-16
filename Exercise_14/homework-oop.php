<?php
class rectangle
{
    public $length = 1.5;
    public $width = 1;
    public function __construct() {
    }

    function setLength($length) {
        $this->length = (float)$length;
    }

    function setWidth($width) {
        $this->width = (float)$width;
    }

    function getLength() {
       return $this->length;
    }

    function getWidth() {
        return $this->width;
    }

    function area($length, $width){
        $area = $length * $width;
        return $area;

    }

    function perimeter($length, $width){
        $perimeter = ($length + $width) * 2;
        return $perimeter;
    }
}

$class = new rectangle();
$length = $class->getLength();
$width = $class->getWidth();
$area = $class->area($length, $width);
$perimeter = $class->perimeter($length, $width);
echo "area = ".$area;
echo "<br>";
echo "perimeter = ".$perimeter;


