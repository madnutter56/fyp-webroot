<?php

session_start();

echo 'This server is ' . gethostname();
echo 'cookie is: ' . $_COOKIE['PHPSESSID'];
