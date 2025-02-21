<?php
echo hash('sha256', 'thisispruepassword') . "<br/>";
echo hash('sha256', 'thisiswendypassword') . "<br/>";
echo hash('sha256', 'thisisannypassword') . "<br/>";
//testUser, thisistestuser

$initialDate = new DateTime('20240208');
//$initialDate = 20240208;
$initialDate->modify('+30 days');
$initialDate = $initialDate->format('Y-m-d');
echo $initialDate . "<br/>";
?>