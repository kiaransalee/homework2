<!DOCTYPE>
<html lang="ru">
<head>
</head>
<body>
<form method="GET">
    Введите число <input type="number" name="user_number">
    <input type = "submit" name = "submit" value = "Отправить">
</form>
<?php
/*echo "<br/>Число = ". $_GET['user_number'];*/
$x = $_GET['user_number'];
$a=1;
$b=1;
$c=0;

function rec_function($x,$a,$b,$c) {
    if ($a>$x) {
        echo "Задуманное число НЕ входит в числовой ряд.";
    }
    elseif ($a==$x) {
        echo "Задуманное число входит в числовой ряд.";
    }
    else {
        $c=$a;
        $a=$a+$b;
        $b=$c;
        rec_function($x,$a,$b,$c);
    }
}
rec_function($x,$a,$b,$c);
?>

</body>

</html>