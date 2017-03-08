<?php

session_start();

echo 'This server is ' . gethostname() . '</br>';
echo 'cookie is: ' . $_COOKIE['PHPSESSID'];
