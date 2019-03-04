<?
    $a = 5;
    $b = 11;

    if($a >= 0 & $b >= 0) {
        $x = $a - $b;
        echo $x;
    }
    else if($a < 0 & $b < 0) {
        $x = $a * $b;
        echo $x;
    }
    else if(($a < 0 & $b >= 0) || ($a >= 0 & $b < 0)) {
        $x = $a + $b;
        echo $x;
    }
    else {
        echo 'Error!!!';
    }
?>