<?php
$ch = Date("H"); // читаем показания часов
$mi = Date("i"); // читаем показания минут
$date = Date("l");
$date1 = Date("N");
$date2 = Date("F");
$dataChet = date('W');
$p1 = "час"; // определяем переменные для часов
$p2 = "часа";
$p3 = "часов";
$m1 = "минут"; // определяем переменные для минут
$m2 = "минута";
$m3 = "минуты";
// проверяем какое из слов подходит к показаниям часов
if ( $ch == 1 or $ch == 21 ) { $p = $p1; } else {
if ( $ch > 1 and $ch <= 4 or $ch > 20 and $ch <= 24 ) { $p = $p2; } else { 
$p = $p3; } }
// проверяем какое из слов подходит к показаниям минут
if ( $mi == 0 or $mi > 4 and $mi <= 20 or $mi > 24 and $mi <= 30 or $mi > 34 
and $mi <= 40 or $mi > 44 and $mi <= 50 or $mi > 54 and $mi <= 60) 
{ $m = $m1; } else {
if ( $mi == 1 or $mi == 21 or $mi == 31 or $mi == 41 or $mi == 51) { $m = $m2; } else { $m = $m3; } } 
// выводим результат на экран
echo "Сейчас $ch $p, $mi $m,  $date1 $date,$date2 ,    ";
if($dataChet%2 === 0)echo '   Четная неделя,';
else echo '   Нечетная неделя,';

if ( $ch == 8   ) echo 'Pervaya para';
    else  if ( $ch == 9   ) echo 'Vtoraya para';
          else if ( $ch == 12   ) echo 'Tretya  para';
                 else if ($ch == 14 )echo 'Chetvertaya  para';
				      else  echo 'А мне пора домой!';
?>
