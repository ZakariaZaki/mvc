<?php

$bdd = new PDO('mysql:host='.$host.';dbname='.$dbname, $user, $pwd, 
array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

 ?>
