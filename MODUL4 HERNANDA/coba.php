<?php 

$password = '$2y$10$CRvGmW.IzC.dshGO0736bOXtgeJjHZ4nijc7aR7RbI6RSsQ3uRTqm';
$password2 = '1';

$a = password_verify($password2, $password);

echo($a);


 ?>