<?php

$delay =  mt_rand(0,5) * 10000;
usleep($delay);

echo 'This server is ' . gethostname() . "<br>";
echo $delay;
