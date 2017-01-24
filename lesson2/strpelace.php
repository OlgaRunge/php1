<?php
$name = 'Alex';
$string = 'Hello, ' . $name;
echo $string;
?>
<br>
<br>
<br>
<?php
$otherString = str_replace('Hello', 'Goodbye', $string);
echo $otherString;