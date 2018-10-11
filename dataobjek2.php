<?php

$pesan = new Sapa ();
$pesan->variable = "Hello Mabes TNI";
echo $pesan->variable;
$pesan->variable = 3;
echo $pesan->variable; 
$pesan->variable  = 3.5;
echo $pesan->variable;

class Sapa {

	var $variable;

}