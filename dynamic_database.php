<?php
include('MysqliDb.php');
include('db_cred.php');

$db = new MysqliDb($db_host, $db_user, $db_pass, $db_database);
$db->setTrace (true);
$db->where('first_name', 'Adam');
$employees = $db->get('employees');

$delay =  mt_rand(0,5) * 10000;
usleep($delay);

echo 'This server is ' . gethostname() . "<br>";
echo $delay;
echo '<br>found ' . count($employees) . ' employees';
echo '<br>query took ' . $db->trace[0][1] . ' seconds';
