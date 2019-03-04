<?
    $hour = date('G');
    $minutes = date('i');

    function myTime($hour, $minutes) {
        if($hour == 1 || $hour == 21) {
            $h = ' час ';
        }
        else if(2 <= $hour & $hour <= 4 || 22 == $hour || $hour == 23) {
            $h = ' часа ';
        }
        else if(5 <= $hour & $hour <= 20 || $hour == 0) {
            $h = ' часов ';
        }
        else {
            echo 'Error!';
        }
            
        if($minutes == 1 || $minutes == 21 || $minutes == 31 || $minutes == 41 || $minutes == 51) {
            $m = ' минута ';
        }
        else if(2 <= $minutes & $minutes <= 4 || 22 <= $minutes & $minutes <= 24 || 32 <= $minutes & $minutes <= 34 || 42 <= $minutes & $minutes <= 44 || 52 <= $minutes & $minutes <= 54) {
            $m = ' минуты ';            
        }
        else if(5 <= $minutes & $minutes <= 20 || 25 <= $minutes & $minutes <= 30 || 35 <= $minutes & $minutes <= 40 || 45 <= $minutes & $minutes <= 50 || 55 <= $minutes & $minutes <= 59 || $minutes == 0) {
            $m = ' минут ';
        }
        else {
            echo 'Error!';
        }

        return $hour.$h.$minutes.$m;
    }

    echo myTime($hour, $minutes);    
?>
