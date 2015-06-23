<?php

//foreach (glob("class/*.php") as $filename) {
//  include $filename;
//}

require './EntGen.php';

$Nick = new EntGen('Grigory', 4, 'Early 1900s', 'male');
$Nick->myFirstName();
$Nick->myFamilyName();
$Nick->myKind();
$Nick->myGender();
$Nick->myFeatures();
$Nick->myAncestry();
$Nick->myEpoch();
$Nick->myGeneration();


echo '<hr>';


$Nick = new EntGen('Nikolay', 5, 'Mid 1900s', 'male');
$Nick->myFirstName();
$Nick->myFamilyName();
$Nick->myKind();
$Nick->myGender();
$Nick->myFeatures();
$Nick->myAncestry();
$Nick->myEpoch();
$Nick->myGeneration();


echo '<hr>';

$Vladimir = new EntGen('Vladimir', 5, 'Mid 1900s', 'male');
$Vladimir->myFirstName();
$Vladimir->myFamilyName();
$Vladimir->myKind();
$Vladimir->myGender();
$Vladimir->myFeatures();
$Vladimir->myAncestry();
$Vladimir->myEpoch();
$Vladimir->myGeneration();



echo '<hr>';

$Igor = new EntGen('Igor', 6, 'Late 1900s', 'male');
$Igor->myFirstName();
$Igor->myFamilyName();
$Igor->myKind();
$Igor->myGender();
$Igor->myFeatures();
$Igor->myAncestry();
$Igor->myEpoch();
$Igor->myGeneration();

echo '<hr>';

$Joy = new EntGen('Joy', 7, 'Early 2000s', 'female');
$Joy->myFirstName();
$Joy->myFamilyName();
$Joy->myKind();
$Joy->myGender();
$Joy->myFeatures();
$Joy->myAncestry();
$Joy->myEpoch();
$Joy->myGeneration();

