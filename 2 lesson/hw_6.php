<?
    function power($val, $pow) {
        if($pow > 1) {
            $val *= power($val, $pow-1);
        }
        return $val;        
    }

    echo 'Число 5 в 3 степени = '.power(5,3);
?>