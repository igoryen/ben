<?php

//foreach (glob("class/*.php") as $filename) {
//  include $filename;
//}
require './Person.php';
require './Male.php';
require './Female.php';
require './Nick.php';
require './SonOfNick.php';
//
//$Nick = new Male('Nikolay');
//$Nick->myName();
//$Nick->myKind();
//$Nick->mySex();


$Iggy = new SonOfNick('Igor');
$Iggy::myKind();