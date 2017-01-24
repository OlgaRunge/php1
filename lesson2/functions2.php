<?php

function sayHello($name,  $stdout = true)
{
    $string = 'Hello' . $name;
if ($stdout) {
    echo $string;
} else {
   echo "Bye";
}
}


