<?
    function getSum($a, $b) {            
        $sum = $a + $b;
        return $sum;        
    }
    function getDiff($a, $b) {
        $diff = $a - $b;
        return $diff;
    }
    function getComp($a, $b) {
        $comp = $a * $b;
        return $comp;
    }
    function getQuot($a, $b) {
        $quot = $a / $b;
        return $quot;
    }
    
    function mathOperation($a, $b, $operation) {        
        switch($operation) {
            case 'Сумма':
                echo 'Сумма = '.getSum($a, $b).';<br>';
                break;
            case 'Разность':
                echo 'Разность = '.getDiff($a, $b).';<br>';
                break;
            case 'Произведение':
                echo 'Произведение = '.getComp($a, $b).';<br>';
                break;
            case 'Частное':
                echo 'Частное = '.getQuot($a, $b).';<br>';
                break;
            default:
                echo 'Ошибка!';
                break;
        }
        return;
    }

    mathOperation(10, 11, 'Сумма');
    mathOperation(10, 11, 'Разность');
    mathOperation(10, 11, 'Произведение');
    mathOperation(10, 11, 'Частное');
?>