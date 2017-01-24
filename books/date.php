<?php

print date('r');
?>
    <br>

<?php

$now_1 = getdate();
print_r($now_1);
$now_2 = localtime();
print_r($now_2);
?>
    <br>
<?php
print "{$now_1['hours']}:{$now_1['minutes']}:{$now_1['seconds']}\n";
print "$now_2[2]:$now_2[1]:$now_2[0]"; //тоже самое

?>
    <br>
<?php

//определение месяца, дня и года
$a = getdate();
printf('%s %d, %d', $a['month'], $a['mday'], $a['year']);
?>

<?php

//с временной меткой
$a = getdate(163727100);
printf('%s %d, %d', $a['month'], $a['mday'], $a['year']);

$squere